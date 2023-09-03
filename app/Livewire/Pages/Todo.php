<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

use Livewire\Component;
use App\Models\TodoModel;
use Livewire\Attributes\Title;
use Livewire\WithPagination;




#[Layout('components.layouts.app')]
#[Title('Todo')]
class Todo extends Component
{
    use WithPagination;

    

    public $todoID;

    
    public $todo_update;
    public $due_date_update;


    
    public $todo = '';
    public $due_date = '';

    public $deleteID;
    

    public function addTodo()
    {
      
        $validated = $this->validate([
            'todo' => 'required|min:3|max:50',
            'due_date' => 'required',
        ]);
        

        $user = auth()->user();
        $store = $user->Todos()->create([
            'todo' => $validated['todo'],
            'due_date' => $validated['due_date'],
        ]);

        if ($store)
        {
            $this->reset('todo', 'due_date');
            session()->flash('success', 'You have successfully added a new Todo');
        }
    }


    public function editing($todo_id)
    {
        $this->todoID = $todo_id;

        $todo = TodoModel::where('todo_id', $todo_id)->first();
        $this->todo_update = $todo->todo;
        $this->due_date_update = $todo->due_date;
    }

    public function cancel_update()
    {
        $this->reset('todoID');
    }

    public function update($todo)
    {
        $validated = $this->validate([
            'todo_update' => 'required', 
            'due_date_update' => 'required'
        ]);


        $todo = TodoModel::where('todo_id', $todo)->first();
        $update = $todo->update([
            'todo' => $validated['todo_update'],
            'due_date' => $validated['due_date_update'],
        ]);

        if ($update)
        {
            $this->reset('todoID', 'todo_update', 'due_date_update');
        }
        
    }

    //! DELETE FUNCTIONALITIES ---------------------------

    public function setDeleteId($id)
    {
        $this->deleteID = $id;
        
    }

    public function delete()
    {
        
        $todo = TodoModel::where('todo_id', $this->deleteID)->first();
        $todo->delete();

        session()->flash('success', 'You have successfully deleted the todo');
        $this->dispatch('hide:delete-modal');
    }



    //!-------------------------------------------------------

    public function render()
    {
        $user = auth()->user();
        $todos = $user->Todos()->latest()->paginate(5);
        return view('livewire.pages.todo', ['todos' => $todos]);
    }
}
