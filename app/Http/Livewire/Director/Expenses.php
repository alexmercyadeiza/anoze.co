<?php

namespace App\Http\Livewire\Director;

use Livewire\Component;

class Expenses extends Component
{
    public function render()
    {
        return view('livewire.director.expenses')->layout('layouts.director.app');
    }
}
