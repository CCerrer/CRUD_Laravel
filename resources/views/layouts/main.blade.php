<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css"></link>
        <script src="/js/scripts.js"></script>
    </head>
    <body >
        <header>
            <nav class="navbar navbar-default navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav nav">
                        <li class="nav-item">
                           <a href="/" class="nav-link">Eventos</a> 
                        </li>
                        <li class="nav-item">
                           <a href="/" class="nav-link">Criar Eventos</a> 
                        </li>
                        <li class="nav-item">
                           <a href="/" class="nav-link">Entrar</a> 
                        </li>
                        <li class="nav-item">
                           <a href="/" class="nav-link">Cadastrar</a> 
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <p>Footer</p>
        </footer>
    </body>
</html>
