<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Login</title>
    <link rel="stylesheet" href="lib/css/style.css">
</head>

<body class="body-login">

    <div class="wrapper fadeInDown">
        <div class="container-login"> 
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="text-center fadeIn first titulo-login">
                    <h2>Entre com seu login</h2>
                </div>

               
                <form method="post" action="<?php echo DIRPAGE . 'controllers/controllerLogin'; ?>" id="formLogin" class="form-login">
                    <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail">
                    <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
                    <input type="submit" class="fadeIn fourth" value="Entrar">
                </form>

                <div id="formFooter" class="formulario-login-footer">
                    <a class="underlineHover" href="#">Esqueceu sua senha?</a>
                </div>

            </div>
        </div>
    </div>

    <script src='lib/js/zepto.min.js'></script>
    <script src='lib/js/javascript.js'></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm"></script>

</body>

</html>