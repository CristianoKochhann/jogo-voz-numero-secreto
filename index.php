<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/app/css/style.css">
    <title>Número Secreto</title>
</head>

<body>
    <h1>Acerte o Número Secreto</h1>
    <h3>O número secreto está entre <span id="menor-valor">0</span> e <span id="maior-valor">100</span></h3>

    <div id="chute" class="mensagem">
        <!-- <div>Você Disse:</div>
        <span class="box">20</span>
        <div>O Número Secreto é Maior <i class="fa-sharp fa-solid fa-arrow-up fa-bounce"></i></div> -->
    </div>
    <script src="/app/js/main.js"></script>
    <script src="/app/js/reconhecimentoVoz.js"></script>
    <script src="/app/js/validacao.js"></script>
</body>

</html>