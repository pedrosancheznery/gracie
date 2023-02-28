<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gracie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>
    <body>
        <div class="hero is-fullheight is-justify-content-center is-align-items-center">
            <div class="hero-head">
                <p class="title">Gracie</p>
            </div>
            <div class="hero-body">
                <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="columns is-flex is-flex-direction-column box">
                            <div class="column">
                                <label for="name">User Name</label>
                                <input class="input is-primary" type="text" placeholder="User Name" name="name">
                                @error('name')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="column">
                                <label for="password">Password</label>
                                <input class="input is-primary" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="colmun">
                                @error('password')
                                    <p class="has-text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="column">
                                <button class="button is-primary is-fullwidth" type="submit">Login</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>
