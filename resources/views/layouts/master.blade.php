<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Gerenciar Produtos</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}">Negociar</a></li>

            @if (Route::has('login'))
                    @auth
                    <li><a href="{{ route('tasks.index') }}">Produtos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
            @endif

        </div>
    </div>
</nav>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>