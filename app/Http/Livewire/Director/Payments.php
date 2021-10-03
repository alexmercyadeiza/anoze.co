<?php

namespace App\Http\Livewire\Director;

use App\Models\Director;
use App\Models\Expenses;
use App\Models\FillingStations;
use App\Models\Sales;
use App\Models\Tellers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;

    public $fid;
    public $sales_id;
    public $date;

    public function details($value)
    {
        $this->sales_id = $value;
        $this->fid = '';

        $this->date = Sales::where('fid', $value)->select('created_at')->get();
    }

    public function setFid($value)
    {
        $this->sales_id = '';
        $this->fid = $value;
    }

    public function getDate()
    {
        if ($this->sales_id) {
            $date = Sales::where('fid', $this->sales_id)->select('created_at')->get();
            return Carbon::parse($date[0]->created_at)->toDateString();
        }
    }

    public function grandTotal()
    {
        return Sales::where('fid', $this->sales_id)->sum('total') -
            Expenses::where('fid', $this->sales_id)->where('created_at', $this->getDate())->sum('amount');
    }

    public function getTeller()
    {
        if ($this->sales_id) {
            $file = Tellers::where('fid', $this->sales_id)->where('created_at', $this->getDate())->select('file')->get();
            return $file[0]->file;
        }
    }

    public function render()
    {
        return view('livewire.director.payments', [
            'stations' => FillingStations::where('cid', Director::where('id', Auth::id())->sum('cid'))->get(),
            'payments' => Sales::where('fid', $this->fid)->paginate(10),
            'sales' => Sales::where('fid', $this->sales_id)->get(),
            'expenses' => Expenses::where('fid', $this->sales_id)->where('created_at', $this->getDate())->get(),
            'sum_expenses' =>
            Expenses::where('fid', $this->sales_id)->where('created_at', $this->getDate())->sum('amount'),
            'total' => $this->grandTotal(),
            'teller' => $this->getTeller(),
        ])->layout('layouts.director.app');
    }
}
