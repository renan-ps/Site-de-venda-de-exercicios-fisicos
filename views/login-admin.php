<!DOCTYPE html>
<html lang="pt-pt">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Login-admin</title>

        <link rel="stylesheet" href="css/reset.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="lib/css/style.css">
    </head>

    <body>

        <div class="container mt-5 ">
           
            <form class="text-center p-5" action="#!">

                <p class="h4 mb-4 mt-5">Login-Administrador</p>

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="style-form form-control mb-4" placeholder="Login">

                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class=" style-form form-control mb-4" placeholder="Senha">

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input style-checkbox" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Lembrar-me</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="">Esqueceu a senha ?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-block my-4 style-button" type="submit">Entrar</button>

            </form>
        </div>    

    
    
    
    
    </body>

</html>