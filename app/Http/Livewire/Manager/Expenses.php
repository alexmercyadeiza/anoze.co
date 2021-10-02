<?php

namespace App\Http\Livewire\Manager;

use App\Models\Expenses as ModelsExpenses;
use App\Models\FuelPrices;
use App\Models\Manager;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Expenses extends Component
{
    use WithPagination;

    public $date;
    public $amount;
    public $desc;

    public $type;

    public $cash;
    public $gas;
    public $diesel;
    public $kerosene;
    public $petrol;

    public $global_fid;

    public function mount()
    {
        //Get manager
        $ids = Manager::where('id', Auth::id())->select('cid', 'fid')->get();
        $this->global_fid = $ids[0]->fid;
    }

    public function save()
    {

        $this->validate([
            'date' => 'required',
        ]);

        //Get manager
        $ids = Manager::where('id', Auth::id())->select('cid', 'fid')->get();

        if ($this->cash) {
            $this->validate([
                'cash' => 'required'
            ]);

            $this->desc = 'Cash';
            $this->amount = $this->cash;
        }

        if ($this->gas) {
            $this->validate([
                'gas' => 'required'
            ]);

            $this->desc = 'Gas';
            $this->amount = $this->gas * FuelPrices::where('cid', $ids[0]->cid)->sum('gas');
        }

        if ($this->diesel) {
            $this->validate([
                'diesel' => 'required'
            ]);

            $this->desc = 'Diesel';
            $this->amount = $this->diesel * FuelPrices::where('cid', $ids[0]->cid)->sum('diesel');
        }

        if ($this->kerosene) {
            $this->validate([
                'kerosene' => 'required'
            ]);

            $this->desc = 'Kerosene';
            $this->amount = $this->kerosene * FuelPrices::where('cid', $ids[0]->cid)->sum('kerosene');
        }

        if ($this->petrol) {
            $this->validate([
                'petrol' => 'required'
            ]);

            $this->desc = 'Petrol';
            $this->amount = $this->petrol * FuelPrices::where('cid', $ids[0]->cid)->sum('petrol');
        }

        if ($this->desc) {
            ModelsExpenses::create([
                'fid' => $ids[0]->fid,
                'cid' => $ids[0]->cid,
                'desc' => $this->desc,
                'amount' => $this->amount,
                'created_at' => $this->date,
            ]);
        }

        $this->reset();

        $this->emitSelf('notify-saved');
    }

    public function render()
    {
        return view('livewire.manager.expenses', [
            'expenses' => ModelsExpenses::where('fid', Manager::where('id', Auth::id())->sum('fid'))->orderBy('created_at', 'DESC')->paginate(10),
        ])->layout('layouts.app');
    }
}
