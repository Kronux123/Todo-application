<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
class Welcome extends Component
{
    #[Layout('layouts.guest-layout')]
    #[Title('Welcome Page')]

    


    public function render()
    {
        return view('livewire.welcome');
    }
}
