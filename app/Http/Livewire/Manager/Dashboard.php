<?php

namespace App\Http\Livewire\Manager;

use App\Models\FuelPrices;
use App\Models\Manager;
use App\Models\Sales;
use App\Models\Tellers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{



    public static function recentSales($manager)
    {
        $data = [];

        //get recent uploaded filesr
        $tellers = Tellers::where('fid', Manager::where('id', $manager)->sum('fid'))->orderBy('created_at', 'DESC')->limit(3)->get();

        //get payments
        $payments = Sales::where('fid', Manager::where('id', Auth::id())->sum('fid'))->orderBy('created_at', 'DESC')->limit(3)->get();


        //match dates
        foreach ($tellers as $teller) {
            $amount = Sales::where('created_at', Carbon::parse($teller->created_at)->toDateString())->sum('total');

            $var = (object)[
                'bank' => $teller->bank,
                'created_at' => $teller->created_at,
                'amount' => $amount,
                'file' => $teller->file
            ];

            array_push($data, $var);
        }

        return $data;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('manager')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.manager.dashboard', [
            'prices' => FuelPrices::where('cid', Manager::where('id', Auth::id())->sum('cid'))->get(),
            'tellers' => $this->recentSales(Auth::id()),

        ])->layout('layouts.app');
    }
}
