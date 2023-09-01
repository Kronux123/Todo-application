<div class="card mt-3">

    <div class="card-header">
        Due date: <input type="date" class="form-control" wire:model='due_date_update'>
    </div>

    <div class="card-body d-flex">
        <div class="container">
            <input type="text" wire:model='todo_update' class="form-control" >
        </div>

        <div class="container">

            <button class="btn btn-warning" wire:click.prevent='update({{$todo->todo_id}})'>Update</button>
            <button class="btn btn-success" wire:click.prevent='cancel_update'>cancel</button>
        </div>
    </div>

   
</div>