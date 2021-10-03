<?php

namespace App\Http\Livewire\Director;

use App\Models\Director;
use App\Models\FuelPrices;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Prices extends Component
{
    public $petrol;
    public $gas;
    public $diesel;
    public $kerosene;

    public function updatePrices()
    {
        /*$this->validate([
            'petrol' => 'required',
            'gas' => 'required',
            'diesel' => 'required',
            'kerosene' => 'required',
        ]);*/

        // use manager to get the company

        $val = FuelPrices::where('cid', Director::where('id', Auth::id())->sum('cid'))->get();

        FuelPrices::where('cid', Director::where('id', Auth::id())->sum('cid'))->update([
            'petrol' => $this->petrol ?? $val[0]->petrol,
            'gas' => $this->gas ?? $val[0]->gas,
            'kerosene' => $this->kerosene ?? $val[0]->kerosene,
            'diesel' => $this->diesel ?? $val[0]->diesel,
        ]);

        $this->emitSelf('notify-saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.director.prices', [
            'prices' => FuelPrices::where('cid', Director::where('id', Auth::id())->sum('cid'))->get(),
        ])->layout('layouts.director.app');
    }
}
