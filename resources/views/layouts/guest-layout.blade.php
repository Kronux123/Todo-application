<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css') }}">
    <title>{{ $slot }}</title>
</head>

<body>
    <nav class="navbar p-3 navbar-expand navbar-dark bg-primary d-flex" style="justify-content: space-between">
        <div>

            <a href="{{ URL('/') }}"  class="navbar-brand">HOME</a>
        </div>

        <div>
            <ul class="navbar-nav me-auto ">
                <li class="nav-item d-flex">

                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                        <a href="{{ route('login') }}" class="nav-link" >Login</a>
                    

                </li>
            </ul>
        </div>
    </nav>


    {{ $slot }}



    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
