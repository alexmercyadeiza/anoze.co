<?php

namespace App\Http\Livewire\Manager;

use Livewire\Component;

class Expenses extends Component
{
    public function render()
    {
        return view('livewire.manager.expenses')->layout('layouts.app');
    }
}
