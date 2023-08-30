<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

use Livewire\Component;
use App\Models\TodoModel;
use Livewire\WithPagination;





class Todo extends Component
{
    use WithPagination;

    #[Layout('layouts.auth-layout')]

    public $todoID;

    #[Rule('required|min:3|max:50')]
    public $todo_update;
    #[Rule('required')]
    public $due_date_update;


    #[Rule('required|min:3|max:50')]
    public $todo = '';
    #[Rule('required')]
    public $due_date = '';


    

    public function addTodo()
    {

        $validated = $this->validate();

        $user = auth()->user();
        $store = $user->Todos()->create([
            'todo' => $validated['todo'],
            'due_date' => $validated['due_date']
        ]);

        if($store)
        {
            $this->reset(
                'todo',
                'due_date'
            );

            session()->flash('success', 'You have successfully added a new todo');
        }
    }


    public function editing($todo_id)
    {
        $this->todoID = $todo_id;

        $todo = TodoModel::where('todo_id', $todo_id)->first();
        $this->todo_update = $todo->todo;
        $this->due_date_update = $todo->due_date;
    }

    public function update(TodoModel $todo)
    {

    }

    public function render()
    {
        $user = auth()->user();
        $todos = $user->Todos()->latest()->paginate(5);
        return view('livewire.pages.todo', ['todos' => $todos]);
    }
}
