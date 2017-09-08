<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Final Project</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="{{route('home')}}">
                       <img class="logo" src="{{asset('images/logo.png')}}" alt="FinalPro Logo">
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>

                <div class="nav-right" style="overflow: visible">
                    @if (!Auth::guest())
                        <a href="#" class="nav-item is-tab">Log In</a>
                        <a href="#" class="nav-item is-tab">Join the Community</a>
                    @else
                        <button class="dropdown is-aligned-right nav-item is-tab">
                            Hey Nenad <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-user"></i></span>
                                        Profile</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                        Notifications</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                        Settings</a></li>
                                <li class="separator"></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                                        LogOut</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
