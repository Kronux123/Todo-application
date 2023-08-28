<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Logut extends Component
{
    public function logout()
    {
        auth()->logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
    
    public function render()
    {
        return view('livewire.components.logut');
    }
}
