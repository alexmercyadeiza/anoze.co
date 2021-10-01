<?php

namespace App\Http\Livewire\Manager\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';
    private $login_err = 'Invalid account login details.';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $credentials = $this->validate();
        /** return Auth::guard('user')->attempt($credentials)
            ? redirect()->intended('/myIPS')
            : $this->addError('login', $this->login_err); */

        if (Auth::guard('manager')->attempt($credentials) == true) {
            //Logs::userLoginSuccess($credentials);
            //Log::channel('slack')->info($this->email .' corp-acc just logged in.');
            return redirect()->intended('/manager');
        } else {
            //Log::channel('slack')->info($this->email .' corp-acc attempt failed.');
            //Logs::userLoginFailed($credentials);
            return $this->addError('login', $this->login_err);
        }
    }

    public function render()
    {
        return view('livewire.manager.auth.login')->layout('layouts.base');
    }
}
