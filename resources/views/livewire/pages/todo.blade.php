<div >
    <div class="container-fluid d-flex justify-content-center p-3 mt-3 rounded " style="height: 100vh">
        @include('modals.delete-confirmation')
        <div class="container d-flex" style="gap: 2em">
            <div class="container" style="width: 400px">
                @include('livewire.components.add_todo')
            </div>

            <div class="container">
                <h1>PENDING TODO</h1>
                @foreach ($todos as $todo)
                    @if ($todoID === $todo->todo_id)
                        @include('livewire.components.edit_todo')
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
                                <button wire:click='setDeleteId({{$todo->todo_id}})' class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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


@push('script')
    <script>
        window.addEventListener('hide:delete-modal', function(){
            $("#deleteModal").modal('hide');
        })
    </script>
@endpush