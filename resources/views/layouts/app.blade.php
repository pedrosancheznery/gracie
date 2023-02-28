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
    <div id="app" class="hero">
        <div class="columns">
            <div class="column is-2">
                <aside class="menu box has-background-light">
                    <p class="menu-label">
                        Gracie
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a class="{{ request()->is('welcome') ? 'is-active' : '' }}" href="{{ url('welcome') }}">
                        Home
                        </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('women') ? 'is-active' : '' }}" href="{{url('women')}}">
                                Women
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('bullyproof') ? 'is-active' : '' }}" href="{{url('bullyproof')}}">
                                Bullyproof
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('master') ? 'is-active' : '' }}" href="{{url('master')}}">
                                Master
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        User
                    </p>
                    <ul class="menu-list">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </form>
                            </li>
                        @endguest
                    </ul>
                </aside>
            </div>
            <div class="column is-10">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
