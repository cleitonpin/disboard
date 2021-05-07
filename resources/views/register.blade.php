<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Disboard</title>
</head>
<body>
    <main>
        <form action="{{ route('create') }}" method="POST" class="login-form">
            @csrf
            <div class="auth">
                <div class="form">
                    <div class="h5-title" style="text-align: center;">
                        <span>
                            Criar uma conta
                        </span>
                    </div>
                    <div class="inputs">
                        <div class="fields">
                            <label class="title">E-MAIL</label><br>
                            <input type="text" name="email"><br>
                        </div>
                        <div class="fields">
                            <label class="title">NOME DE USUÁRIO</label><br>
                            <input type="text" name="username"><br>
                        </div>
                        <div class="fields">
                            <label class="title">SENHA</label><br>
                            <input id="pass" name="password" type="password">
                        </div>
                        <div class="fields">
                            <label class="title">DATA DE NASCIMENTO</label>
                            <input type="date" name="date" id="">
                        </div>
                        <button class="enter" type="submit">Continuar</button><br>
                        <span><a style="color: #7289da;" href="{{url('login')}}">Já tem uma conta?</a></span>

                        <div class="terms">
                            <p>Ao se registrar, você concorda com os <a href="#">termos de serviço</a> e a <a href="#">política de privacidade</a>
                                do Disboard.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script src="../js/login.js"></script>
</body>
</html>