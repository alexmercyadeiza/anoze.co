<?php

namespace App\Http\Livewire\Manager;

use Livewire\Component;

class Payments extends Component
{
    public function render()
    {
        return view('livewire.manager.payments')->layout('layouts.app');
    }
}
