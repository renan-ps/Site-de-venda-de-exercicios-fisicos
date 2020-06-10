<?php echo \Classes\ClassLayout::setHeader('Cadastro', "Faça seu cadastro", ""); ?>

<div class="container-cadastro">
    <form method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE . 'controllers/controllerCadastro'; ?>">
        <h2>Cadastro</h2>
        <p>Todos os campos são obrigatórios.</p>
        <div class="cadastro text-center" style="margin: 3% auto">
            <input type="text" id="nome" name="nome" placeholder="Nome">
            <input type="email" id="email" name="email" placeholder="E-mail">
            <input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de nascimento">
            <input type="text" id="telefone" name="telefone" placeholder="Telefone">
            <input type="text" id="endereco" name="endereco" placeholder="Endereco">
            <input type="password" id="senha" name="senha" placeholder="Senha">
            <input type="password" id="senhaConf" name="senhaConf" placeholder="Confirme sua senha">
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <div class="retornoCad"></div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>

</div>

<!-- Footer -->
<footer class='page-footer font-small style-footer lighten-3 pt-4'>



    <!--Redes sociais-->

    <div class='mb-3 text-center text-md-right rede-social'>


        <a class='fb-ic' href='https://www.facebook.com/ygor.regato.5'>
            <i class='fab fa-facebook-f mr-4'> </i>
        </a>

        <a class='tw-ic'>
            <i class='fab fa-twitter mr-4'> </i>
        </a>

        <a class='li-ic'>
            <i class='fab fa-linkedin-in mr-4'> </i>
        </a>

        <a class='ins-ic'>
            <i class='fab fa-instagram mr-4'> </i>
        </a>

        <a class='ins-ic'>
            <i class='fab fa-youtube'></i> </i>
        </a>

    </div>

    <!--Copyright-->

    <div class=' text-center py-3 copyright-style'>©Copyright 2020 |
        <a class='copyright-style' href='copyright'>Treino do Zé. Todos os Direitos Reservados.
            Criado pela equipe <span class='falcon-tecnol'>CornOut Technology</span></a>
    </div>

</footer>

<script src='lib/js/zepto.min.js'></script>
<script src='lib/js/sweetalert.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>
<script src='lib/js/jquery.js'></script>
<script src='lib/js/index.js'></script>
<script src='lib/js/vanilla-masker.min.js'></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm"></script>
<script src='lib/js/javascript.js'></script>