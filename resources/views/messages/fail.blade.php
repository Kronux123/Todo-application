@if (session('fail'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('fail')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
