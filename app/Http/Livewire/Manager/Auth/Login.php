<?php

namespace App\Http\Livewire\Manager\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.manager.auth.login')->layout('layouts.base');
    }
}
