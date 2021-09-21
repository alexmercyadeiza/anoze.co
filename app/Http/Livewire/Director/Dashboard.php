<?php

namespace App\Http\Livewire\Director;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.director.dashboard')->layout('layouts.director.app');
    }
}
