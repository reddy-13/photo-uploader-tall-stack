<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    public $email = '';
    public $password = '';
    #[Title('Login')]

    public function render()
    {

        return view('livewire.auth.login');
    }

    public function login()
    {
        $credentials = $this->validate([
            "email" => 'required|min:2|max:30',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            session()->flash("success", "Logged in successfully!");
            return $this->redirectRoute("dashboard", navigate: true);
        }
        return $this->addError('email', "The provided credentials do not match our records");
    }
}
