<?php

namespace App\Livewire\Pages;


use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.app')]
#[Title('Dashboard')]
class Dashboard extends Component
{
    use WithFileUploads;

    #[Rule('required|min:3|max:20')]
    public $title = '';
    #[Rule('required|image')]
    public $image = '';

    public function store()
    {
        $validated = $this->validate();
        $user = Auth::user();

        $user->Images()->create([
            'title' => $validated['title'],
            'image' => $validated['image']->store('public/images'),
        ]);

        $this->reset('title', 'image');
        session()->flash('success', 'successfully added a new image');
    }


    public function render()
    {
        $user = Auth::user();
        $images = $user->Images()->get();
        


        return view('livewire.pages.dashboard', compact('images'));
    }
}
