<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Disboard</title>
</head>
<body>
    <div class="container">
        <div class="scroll">
            <div class="my-account tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>MINHA CONTA</p>
                <div>
                    <div class="email">
                        <img src="{{asset('assets/img/aviso.svg')}}" alt="">
                        <div class="header-aviso">
                            <h3>E-MAIL NÃO VERIFICADO</h3>
                            <span>Dê uma conferida no seu e-mail e siga as instruções para verificá-lo. Se você não recebeu um e-mail ou se ele já expirou, você pode reenviá-lo.</span>
                            <button>
                                <span>
                                    Reenviar email de verificação
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="user">
                        <div class="user-avatar">
                            <div class="icon">
                                <img src="{{asset('assets/img/default.png')}}" alt="">
                            </div>
                            <div class="name">
                                <span>{{ $name }} </span>
                                <span>#3062</span>
                            </div>
                            <div class="send-avatar">
                                <button>
                                    <span>
                                        Enviar Avatar
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="box">
                            <div class="field">
                                <div class="name-user">
                                    <h5>NOME DE USUÁRIO</h5>
                                    <div class="span-user">
                                        <span>{{ $name }} </span>
                                        <span>#3062</span>
                                    </div>
                                </div>
                                <button>
                                    <span>
                                        Editar
                                    </span>
                                </button>
                            </div>
                            <div class="field field-spaced">
                                <div class="name-user">
                                    <h5>E-MAIL</h5>
                                    <div class="span-user">
                                        <span>{{ $email }} </span>
                                        <a href="#">Mostrar</a>
                                    </div>
                                </div>
                                <button>
                                    <span>
                                        Editar
                                    </span>
                                </button>
                            </div>
                            <div class="field field-spaced">
                                <div class="name-user">
                                    <h5>TELEFONE</h5>
                                    <div class="span-user">
                                        <span>{{ $telefone }} </span>
                                        <span></span>
                                    </div>
                                </div>
                                <button>
                                    <span>
                                        Adicionar
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom"></div>
                    <div class="password">
                        <h2>SENHA E AUTENTICAÇÃO</h2>
                        <div class="verification-two-steps">
                            <button>
                                <span>
                                    Mudar senha
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>