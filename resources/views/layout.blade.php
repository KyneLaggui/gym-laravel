<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myKaydeePal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    
    
    <style>
        *{
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>

</head>
<body>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
        <div class="container-fluid">
            <span class="navbar-brand" >
                <a class="nav-link" href="{{ url('dashboard') }}">myKaydeePal</a>
            </span>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav ms-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('registration') }}">Signup</a>
                </li>
            @else
                @if (Auth::check() && Auth::user()->level === 10)

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usersList') }}">Users</a>
                </li>
            

                @endif
                <a class="nav-link">Hello, {{ auth()->user()->name}}</a>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('taskSchedule') }}">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
            @endguest
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar -->
    
    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @yield('content')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>
</html>