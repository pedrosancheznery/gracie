<!DOCTYPE html>
<html class="has-navbar-fixed-top">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gracie</title>
    </head>
    <body>
        <div class="">
            <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">
                            Home
                        </a>

                        <a class="navbar-item">
                            Documentation
                        </a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                More
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    About
                                </a>
                                <a class="navbar-item">
                                    Jobs
                                </a>
                                <a class="navbar-item">
                                    Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                {{-- <a class="button is-primary"> --}}
                                    {{-- <strong>Sign up</strong> --}}
                                {{-- </a> --}}
                                <a class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <section class="section">
            <h1 class="title">Generate Docx File with Barcode</h1>
            <form method="post" action="{{ route('genx') }}" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label" for="first_name">First Name</label>
                    <div class="control">
                        <input class="input" type="text" name="first_name">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="last_name">Last Name</label>
                    <div class="control">
                        <input class="input" type="text" name="last_name">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="id_number">ID Number</label>
                    <div class="control">
                        <input class="input" type="text" name="id_number">
                    </div>
                </div>
                {{-- <div class="field"> --}}
                    {{-- <label class="label" for="file">Docx File</label> --}}
                    {{-- <div class="control"> --}}
                        {{-- <input class="input" type="file" name="file"> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Generate Docx</button>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>
