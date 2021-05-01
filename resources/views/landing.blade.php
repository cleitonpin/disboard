<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DISBOARD | ❤️</title>
</head>
<body>

    <nav style="padding: 25px" class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse nav-main" id="navbarText">
            <a 
                style="color: #DAE3E5; font-family: 'Open Sans Condensed'; margin-left: 30px;" 
                class="navbar-brand" href="#">
                <img id="eye" style="margin-bottom: 5px;" src="https://img.icons8.com/material-sharp/24/fa314a/source-code.png"> 
                DISBOARD
            </a>
            <ul class="navbar-nav mr-auto nav-my">
                <li class="nav-item">
                    <a style="color: #DAE3E5" class="nav-link" href="#">Baixar</a>
                </li>
                <li class="nav-item">
                    <a style="color: #DAE3E5" class="nav-link" href="{{ url('about') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a style="color: #DAE3E5" class="nav-link" href="#">Suporte</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a style="color: #DAE3E5" class="nav-link" href="{{ url('dashboard') }}">
                            Minha conta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #DAE3E5" class="nav-link" href="{{ url('guilds') }}">
                            Meus servidores
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a style="color: #DAE3E5" class="nav-link" href="#">Por que entrar na Disboard?</a>
                    </li>
                @endif
            </ul>
            @if (Auth::check())
                <a class="btn btn-outline-secondary my-2 my-sm-0" href="{{ url('login') }}">Abrir disboard</a>
            @else
                <a class="btn btn-outline-secondary my-2 my-sm-0" href="{{ route('login') }}">Entrar</a>
            @endif
        </div>
    </nav>

    <main>
        <div class="flex-box container-box">
            <div class="content-box">
                <h1 style="font-size: 56px; font-weight: 700">Seu lugar para conversar</h1>
                <div class="motv">
                    <span style="font-size: 20px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum hendrerit 
                        ou só <br>amigos querendo ficar de boa, o Disboard torna mais fácil conversar todo dia e 
                        se ver com mais <br>frequência.
                    </span>
                </div>
                <div class="buttons">
                    <a style="text-decoration: none;" class="a-first" href="#">
                        <img src="https://img.icons8.com/material-two-tone/24/fa314a/downloading-updates.png"/>
                        Baixar para Windows
                    </a>
                    <a style="text-decoration: none;" href="#">
                        Abra o Disboard no seu computador
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        
    </footer>
</body>
</html>