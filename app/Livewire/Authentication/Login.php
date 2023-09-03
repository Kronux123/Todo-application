<?php

namespace App\Livewire\Authentication;

use App\Livewire\Pages\Dashboard;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Login extends Component
{
    #[Layout('layouts.guest-layout')]
    #[Title('Login Page')]

    public $email, $password;

    public function authenticate()
    {
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $authenticated = Auth::attempt($validated);

        if($authenticated)
        {
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }
        else
        {
            session()->flash('fail', "You don't have an account, register first");
        }

    }

    public function render()
    {
        return view('livewire.authentication.login');
    }
}
