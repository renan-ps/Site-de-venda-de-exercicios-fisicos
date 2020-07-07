<?php

if(!isset($_GET['id']) && !isset($_GET['idT'])){
    header('Location: ' . DIRPAGE);
}

?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name=apple-mobile-web-app-status-bar-style content=#FCC00A>
    <title>Compra Realizada com Sucesso</title>
    <link rel="stylesheet" href="lib/css/reset.css">
    <link rel="stylesheet" href="lib/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="img-compra-efetuada">
        <img src="image/img-compra-efetuada-com-sucesso.png" alt="">
    </div>
    <h1 class="text-center">Assinatura efetuada com sucesso!</h1>
    <p class="text-center">O Zé agradece por confiar em nossos serviços! Sua ID de transação do Paypal:
        <strong><?php echo $_GET['idT'] ?>.</strong></p>
    <p class="text-center">Você será redirecionado em 10 segundos.</p>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function demo() {
        await sleep(10000);
        window.location.href = '/TreinoDoZe/dashboard'
    }

    demo();

</script>
</body>

</html>