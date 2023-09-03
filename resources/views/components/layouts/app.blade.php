<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.js') }}"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('manualcss/Auth.css') }}">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js') }}"></script>
    <title>{{ $title ?? 'TODO APP' }}</title>
</head>

<body>
    <nav class="navbar p-3 navbar-expand navbar-dark bg-primary d-flex" style="justify-content: space-between">
        <div>

            <a href="{{ URL('/') }}" class="navbar-brand">HOME</a>
        </div>

        <div>
            <ul class="navbar-nav me-auto ">
                <li class="nav-item d-flex">
                    @guest

                        <a wire:navigate href="{{ route('register') }}" class="nav-link">Register</a>
                        <a wire:navigate href="{{ route('login') }}" class="nav-link">Login</a>
                    @endguest

                    @auth
                        <a class="nav-link">{{ Auth::user()->name }}</a>
                        @livewire('components.logout')
                    @endauth


                </li>
            </ul>
        </div>
    </nav>

    @guest

        <div class="container">

            {{ $slot }}
        </div>
    @endguest

    @auth
        <div class="row">
            <div class="col-2 bg-dark " style="height: 100vh">
                <aside>
                    <div class="container side-link-container p-3">
                        <a wire:navigate href="{{ route('dashboard') }}"
                            class="{{ Route::is('dashboard') ? 'active' : '' }} nav-link side-link text-center">Home</a>
                        <a wire:navigate href="{{ route('todo') }}"
                            class="{{ Route::is('todo') ? 'active' : '' }} nav-link side-link text-center">Todo</a>

                    </div>
                </aside>
            </div>

            <div class="col">
                {{ $slot }}
            </div>
    @endauth


    @stack('script')
</body>

</html>
