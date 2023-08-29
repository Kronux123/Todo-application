<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Todo extends Component
{

    #[Layout('layouts.auth-layout')]

    public function render()
    {
        return view('livewire.pages.todo');
    }
}
