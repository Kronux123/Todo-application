<div>
    <div class="container-fluid d-flex justify-content-center p-3 mt-3 rounded " style="height: 100vh">

        <div class="container d-flex" style="gap: 2em">
            <div class="container" style="width: 400px">
                <h1 class="text-dark text-center ">NEW TODO</h1>
                @include('messages.success')
                <form wire:submit.prevent="addTodo">

                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" wire:model="todo" id="todo" placeholder="todo">
                        <label for="todo">New Todo</label>
                    </div>

                    @error('todo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-floating mt-3">
                        <input type="date" class="form-control" wire:model="due_date" id="due_date"
                            placeholder="date">
                        <label for="due_date">Due Date</label>
                    </div>

                    @error('due_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="container mt-3 " style="padding: 0">
                        <button class="btn btn-success">Add new Todo</button>
                    </div>

                </form>
            </div>

            <div class="container">
                <h1>PENDING TODO</h1>
                @foreach ($todos as $todo)
                    @if ($todoID === $todo->todo_id)
                        <div class="card mt-3">

                            <div class="card-header">
                                Due date: <input type="date" class="form-control" wire:model='due_date_update'>
                            </div>

                            <div class="card-body d-flex">
                                <div class="container">
                                    <input type="text" wire:model='todo_update' class="form-control" >
                                </div>

                                <div class="container">

                                    <button class="btn btn-warning">Edit</button>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success" wire:click='editing({{ $todo->todo_id }})'>Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    @else
                        <div class="card mt-3">

                            <div class="card-header">
                                Due date: {{ $todo->due_date }}
                            </div>

                            <div class="card-body">
                                {{ $todo->todo }}
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success" wire:click='editing({{ $todo->todo_id }})'>Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    @endif
                @endforeach


                <div class="container mt-3 ">
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
