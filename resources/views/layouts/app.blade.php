<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <script src="{{ asset('js/app.js') }}"></script>
            <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('https://www.antarctican.org/') }}"><img style="height: 50px; margin-left: -10%;" src="{{URL::asset('/img/Png_Antarctican_Society copy.png')}}" alt="Antarctican Society Logo"></a>
                
                    <!--{{ config('app.name', 'Laravel') }}-->
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" style="margin-right: -12%;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <!--DROPDOWN OPTIONS-->
                                    <a href="/home" class="dropdown-item">Dashboard</a>
                                    <a href="/stations" class="dropdown-item">Stations</a>
                                    <a href="/users" class="dropdown-item">Users</a>
                                    <a href="/events" class="dropdown-item">Events</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <main class="py-4">
        <!--ORIGINAL CSS-->
    <!--<div class="main_content">-->
        @if(!Auth::guest())
        <div class="sidebar">
            <a href="/stations">STATIONS</a>
            <a href="/users">USERS</a>
            <a href="/events">EVENTS</a>
            <!--<a href="#">PHOTOS</a>-->
            <a href="#">TIMELINE</a>
            <!--<div class="logout_button_container">
            <a class="logout_button" href="#">LOGOUT</a>
            </div>-->
        </div>
        @endif


     @yield('content')
           
            <!--used to be yield content here)-->
    </main>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
