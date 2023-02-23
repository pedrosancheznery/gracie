<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield("title")</title>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar is-fixed-top is-primary">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://www.gracieuniversity.com">
                    <img src="{{ url('gracie.jpeg')}}" width="50" height="80">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu" id="navbar">
                <!-- Left Side Of Navbar -->
                <div class="navbar-start">
                    <a class="navbar-item {{ request()->is('welcome') ? 'is-active' : '' }}" href="{{ url('welcome') }}">
                        Home
                    </a>

                    <a class="navbar-item {{ request()->is('women') ? 'is-active' : '' }}" href="{{url('women')}}">
                        Women
                    </a>
                    <a class="navbar-item {{ request()->is('bullyproof') ? 'is-active' : '' }}" href="{{url('bullyproof')}}">
                        Bullyproof
                    </a>
                    <a class="navbar-item {{ request()->is('master') ? 'is-active' : '' }}" href="{{url('master')}}">
                        Master
                    </a>
                </div>
                <!-- Right Side Of Navbar -->
                <div class="navbar-end">
                    <!-- Authentication Links -->
                    @guest
                        <li class="navbar-item">
                            <a class="navbar-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="navbar-item">
                                <a class="navbar-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="navbar-dropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <a class="navbar-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </form>
                                {{-- <hr class="navbar-divider"> --}}
                                {{-- <a class="navbar-item"> --}}
                                    {{-- Report an issue --}}
                                {{-- </a> --}}
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
