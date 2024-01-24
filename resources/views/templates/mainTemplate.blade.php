<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persewaan Mobil</title>

    {{-- Jquery --}}
    <script src="{{ asset('assets/dist/jquery/jquery.min.js') }}"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    {{-- Bootstrap 5.3.2 CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/bootstrap5.3.2/css/bootstrap.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/fontawesome-free-6.4.0/css/all.min.css') }}">

    {{-- Icon Title --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}">

    {{-- CSS Custom --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}

    {{-- CSS Links --}}
    @yield('cssLinkOnHead')

</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sewa Mobil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mobil">List Mobil</a>
                </li>
                {{--  --}}
                @auth
                    {{-- User telah login / terauthentifikasi --}}
                    <li class="nav-item dropdown userNavbarItem">
                        <a class="nav-link userMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user me-1"></i>
                            <span>{{ auth()->user()->nama }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/myprofile">My Profile</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>                   
                @else
                    {{-- User belum login / ter-authentifikasi  --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/register">Register</a></li>
                        </ul>
                    </li>
                @endauth
              {{--  --}}
            </ul>
          </div>
        </div>
    </nav>

    {{-- mainContent --}}
    @yield('mainContent')  

    {{-- Bootstrap 5.3.2 JS--}}
    <script src="{{ asset('assets/dist/bootstrap5.3.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>