<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/login.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Disboard</title>
</head>
<body>
    <nav style="padding: 25px" class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse nav-main" id="navbarText">
            <a 
                style="color: #DAE3E5; font-family: 'Open Sans Condensed'; margin-left: 30px;" 
                class="navbar-brand" href="#">
                <img style="margin-bottom: 5px;" src="https://img.icons8.com/material-sharp/24/fa314a/source-code.png"> 
                DISBOARD
            </a>
        </div>
    </nav>

    <main>
        <form action="{{ route('logar') }}" method="POST" class="login-form">
            @csrf
            <div class="auth">
                <div class="form">
                    <div class="h5-title" style="text-align: center;">
                        <!-- <<div class="h5-title"> -->
                            <span>
                                <a href="{{ url('landing') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                                Boas-vindas de volta!
                            </span>
                            <p>Estamos muito animados em te ver novamente</p>
                        <!-- </div> -->
                    </div>
                    <div class="inputs">
                        <label class="title">
                            E-MAIL OU NÚMERO DE TELEFONE
                            @if (session('email'))
                                <span class="errorMessage" style="
                                font-size: 12px;
                                font-weight: 500;
                                font-style: italic;
                                color: #f04747;
                                text-transform: none">
                                    <span class="error" style="padding-left: 4px;
                                    padding-right: 4px;">-</span>
                                    Login ou senha inválidos    
                                </span>
                            @endif
                        </label><br>
                        <input type="text" name="email"><br>
                        <label class="title">SENHA
                            @if (session('email'))
                            <span class="errorMessage" style="
                            font-size: 12px;
                            font-weight: 500;
                            font-style: italic;
                            color: #f04747;
                            text-transform: none">
                                <span class="error" style="padding-left: 4px;
                                padding-right: 4px;">-</span>
                                Login ou senha inválidos    
                            </span>
                        @endif
                        </label><br>
                        <input id="pass" name="password" type="password">
                        <p onclick="showPassword()" id="eye" class="eye">
                            <i id="fa-icon" class="fa fa-eye-slash" aria-hidden="true"></i>
                        </p>
                        <a class="forget">Esqueceu a senha?</a><br>
                        <button class="enter" type="submit">Entrar</button><br>
                        <span>Precisando de uma conta? <a style="color: #7289da;" href="{{ url('register') }}">Registre-se</a></span>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script src="../js/login.js"></script>
</body>
</html>