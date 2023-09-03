<?php

namespace App\Livewire\Authentication;

use App\Livewire\Pages\Dashboard;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Login extends Component
{
    #[Layout('components.layouts.app')]

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
            Session::regenerate();
            return $this->redirect('dashboard', navigate: true);
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
