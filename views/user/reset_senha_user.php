<?php echo \Classes\ClassLayout::setHeaderUser('Login', "Faça seu Login", ""); ?>
<!DOCTYPE html>
<html>


<div id="demo" style="margin-left: 20px; padding-top: 20px;"><a href="index" title=""><i class="fas fa-arrow-left fa-3x"></i></a></div>

<style type="text/css" media="screen">
    @media (min-width: 1200px) {
    .bg  {
        background-image:  url(<?php echo DIRIMG . '../image/Fundo-Login.svg'; ?>) ;
    }
}
</style>


<body class="bg img-fluid" >
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 128px;">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-password-image"style="background-image: url(<?php echo DIRIMG . '../image/dogs/image1.jpeg'; ?>);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2">Esqueceu a Senha ?</h4>
                                        <p class="mb-4">Entendemos, é comum acontecer. Basta digitar seu endereço de e-mail abaixo e enviaremos um link para redefinir sua senha!<br></p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Escreva o email cadastrado" name="email"></div><button class="btn btn-primary btn-block text-white btn-user"
                                            type="submit">Redefinir senha</button></form>
                                    <div class="text-center">
                                        <hr><a class="small" href="../cadastro">Criar Conta!</a></div>
                                    <div class="text-center"><a class="small" href="../login">Já tem uma Conta? Faça Login!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30"></script>
</body>

</html>