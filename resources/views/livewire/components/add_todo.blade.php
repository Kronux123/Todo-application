<h1 class="text-dark text-center ">NEW TODO</h1>
@include('messages.success')
@include('messages.fail')
<form>

    <div class="form-floating mt-3">
        <input type="text" class="form-control" wire:model.prevent="todo" id="todo" placeholder="todo">
        <label for="todo">New Todo</label>
    </div>

    @error('todo')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <div class="form-floating mt-3">
        <input type="date" class="form-control" wire:model.prevent="due_date" id="due_date" placeholder="date">
        <label for="due_date">Due Date</label>
    </div>

    @error('due_date')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <div class="container mt-3 " style="padding: 0">
        <button wire:click.prevent='addTodo' class="btn btn-success">Add new Todo</button>
    </div>

</form>
