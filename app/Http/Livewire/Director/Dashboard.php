<?php

namespace App\Http\Livewire\Director;

use App\Models\Director;
use App\Models\FuelPrices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('director')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/director/login');
    }

    public function render()
    {
        return view('livewire.director.dashboard', [
            'prices' => FuelPrices::where('cid', Director::where('id', Auth::id())->sum('cid'))->get(),
        ])->layout('layouts.director.app');
    }
}
