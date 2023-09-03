<?php

namespace App\Livewire\Authentication;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\User;

class Register extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Register Page')]

    public $name, $email, $password, $password_confirmation;

    public function registerUser()
    {
        $validated = $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $store = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],

        ]);

        if($store){
            session()->flash('success', 'You have successfully registered');
            $this->reset(
                'name',
                'email',
                'password',
                'password_confirmation'
            );
        }
    }

    public function render()
    {
        return view('livewire.authentication.register');
    }
}
