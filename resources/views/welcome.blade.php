<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        html,
        body,
        .main,
        .wrapper {
            font-family: 'Nunito', sans-serif;
            height: 100%;
        }

        .wrapper {
            padding: 0;
            margin: 0;
            background-image: url(/img/initial.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.35);
        }

        .justify-title {
            background-color: rgba(0, 0, 0, 0.75);
        }

        .justify-use {
            background-color: rgba(0, 0, 0, 0.5);
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <ul class="nav justify-content-center py-4 fixed-top">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}" class="px-2 text-light">Início</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="px-2 text-light">Entrar</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="px-2 text-light">Criar uma
                                conta</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>

        <div class="main">
            <div class="container fixed-bottom">
                <div class="row text-white">
                    <div class="col-md-5 px-4 py-5 justify-title">
                        <h1>Difícil escolher a combinação perfeita?</h1>
                    </div>
                    <div class="col-md-7 px-4 py-5 justify-use">
                        <p>Não deixe pra última hora! Cria a seua conta no Clothes Roulette e gerencie combinações de
                            roupas para qualquer ocasião.</p>
                        <p>Esteja pronta(o) em um clique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
