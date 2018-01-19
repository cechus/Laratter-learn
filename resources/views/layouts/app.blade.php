<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laratter by YeyO')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <body>
        <div class="row">
                <div class="col s12">
                    <nav>
                        <div class="nav-wrapper teal lighten-2">
                            <a href="#" class="brand-logo">Laratter</a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">Acerca de Nosotros</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container">
                        @yield('content')
                    </div>
                </div> 
              </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
