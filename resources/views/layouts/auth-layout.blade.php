<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('manualcss/Auth.css')}}">
    <title>{{ $slot }}</title>
</head>

<body >
    <nav class="navbar p-3  navbar-dark bg-primary d-flex" style="justify-content: space-between">
        <div>

            <a href="{{ route('dashboard') }}" wire:navigate class="navbar-brand">TODO</a>
        </div>

        <div>
            <ul class="navbar-nav me-auto ">
                <li class="nav-item d-flex" style="gap: 10px">



                    <a href="{{ route('register') }}" class="nav-link" wire:navigate>{{ Auth::user()->name }}</a>
                    @livewire('components.logut')


                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-2 bg-dark " style="height: 100vh">
            <aside>
                <div class="container side-link-container p-3" >
                    <a href="{{route('dashboard')}}" class="{{Route::is('dashboard') ? 'active' : ''}} nav-link side-link text-center" wire:navigate>Home</a>
                    <a href="{{route('todo')}}" class="{{Route::is('todo') ? 'active' : ''}} nav-link side-link text-center" wire:navigate>Todo</a>
                    
                </div>
            </aside>
        </div>

        <div class="col">
            {{ $slot }}
        </div>
        
    </div>


   



    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
