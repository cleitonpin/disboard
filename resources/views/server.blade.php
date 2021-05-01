<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/server.css')}}">

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
                <p>VISÃO GERAL DO SERVIDOR</p>
                <div class="geral">
                    <div class="flex photo">
                        <div class="image">
                            <img src="{{asset('assets/img/default.png')}}" alt="">
                            <button>Remover</button>
                        </div>
                        <div class="text">
                            <div class="content">
                                Recomendamos uma imagem <br>que seja no mínimo 512x512<br> para o servidor
                            </div>
                            <div class="button">
                                <button>Enviar imagem</button>
                            </div>
                        </div>
                    </div>
                    <div class="name-server">
                        <div class="server">
                            <label>NOME DO SERVIDOR</label>
                            <input type="text">
                        </div>
                        <div class="region">
                            <h4>REGIÃO DO SERVIDOR</h4>
                            <div class="help">Regiões, que afetam a qualidade de voz e vídeo, agora estão disponíveis para cada canal de voz e são definidas automaticamente. Caso você precise de ajuda, leia nossa <a href="#">Central de ajuda</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>