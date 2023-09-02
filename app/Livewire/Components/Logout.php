<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        Session::invalidate();
        Session::regenerateToken();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.components.logout');
    }
}
