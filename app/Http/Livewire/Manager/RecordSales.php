<?php

namespace App\Http\Livewire\Manager;

use Livewire\Component;
use App\Models\FuelPrices;
use Illuminate\Support\Facades\Auth;
use App\Models\Manager;
use App\Models\Sales;
use Carbon\Carbon;

class RecordSales extends Component
{

    public $petrol;
    public $gas;
    public $kerosene;
    public $diesel;

    // Get Company
    public function record()
    {
        $this->validate([
            'kerosene' => 'required',
            'gas' => 'required',
            'petrol' => 'required',
            'diesel' => 'required'
        ]);

        // Get the company ID
        $cid = Manager::select('cid')->where('id', Auth::id())->sum('cid');
        $fid = Manager::select('cid')->where('id', Auth::id())->sum('fid');

        // Check no entry already exists.

        $date = Sales::where('fid', $fid)->select('created_at')->orderBy('created_at', 'DESC')->first();

        //check if the date is the same, and notify user that record has already been created
        if (Carbon::parse()->toDateString() == Carbon::parse($date->created_at ?? Carbon::tomorrow())->toDateString()) {
            //notify
            $this->emitSelf('notify-saved-already');

            //else store the data
        } else {
            // Pass id to get fuel prices for the company
            $prices = FuelPrices::select('kerosene', 'petrol', 'gas', 'diesel')->where('cid', $cid)->get();

            // Get new price values
            $this->petrol = $this->petrol * $prices[0]->petrol;
            $this->kerosene = $this->kerosene * $prices[0]->kerosene;
            $this->gas = $this->gas * $prices[0]->gas;
            $this->diesel = $this->diesel * $prices[0]->diesel;

            //Store the sales for the current day
            Sales::create([
                'fid' => $fid,
                'cid' => $cid,
                'kerosene' => $this->kerosene,
                'gas' => $this->gas,
                'diesel' => $this->diesel,
                'petrol' => $this->petrol
            ]);

            $this->reset();

            redirect('/payments');

            //notify
            $this->emitSelf('notify-saved');
        }
    }
    // Get Fuel Prices


    // Use Co Station ID

    public function render()
    {
        return view('livewire.manager.record-sales');
    }
}
