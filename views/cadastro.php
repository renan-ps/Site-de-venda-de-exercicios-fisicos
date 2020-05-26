<?php echo \Classes\ClassLayout::setHeader('Cadastro', 'Realize seu cadastro') ?>



    <form method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>">

    <div class="cadastro text-center" style="margin: 3% auto; padding-top: 5%;">
        <input type="text" id="nome" name="nome" placeholder="Nome"><br>
        <input type="email" id="email" name="email" placeholder="E-mail"><br>
        <input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de nascimento"><br>
        <input type="text" id="telefone" name="telefone" placeholder="Telefone"><br>
        <input type="password" id="senha" name="senha" placeholder="Senha"><br>
        <input type="password" id="confSenha" name="confSenha" placeholder="Confirme sua senha"><br>
        <input type="submit" value="Cadastrar">
    </div>
</form>

<?php echo \Classes\ClassLayout::setFooter(); ?>