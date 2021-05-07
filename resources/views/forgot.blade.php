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
    @include('layout.nav')

    <main>
        <form action="#" method="POST" class="login-form">
            @csrf
            <div class="auth">
                <div class="form">
                    <div class="inputs">
                        <label class="title">
                            E-MAIL REGISTRADO
                        </label><br>
                        <input placeholder="Digite seu email para enviarmos uma nova senha" type="text" name="email"><br>
                        <button class="enter" type="submit" style="margin-top: 15px">Enviar</button><br>
                        <span>Já tem uma conta? <a style="color: #7289da;" href="{{ url('login') }}"> clique aqui</a></span>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>