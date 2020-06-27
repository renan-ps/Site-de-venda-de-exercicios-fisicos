<?php echo \Classes\ClassLayout::setHeaderUser('Cadastro', "Faça seu cadastro", ""); ?>

<div id="demo" style="margin-left: 20px; padding-top: 20px;"><a href="personal.php" title=""><i
			class="fas fa-arrow-left fa-3x"></i></a></div>

<style type="text/css" media="screen">
	@media (min-width: 1200px) {
		.bg {
			background-image: url(<?php echo DIRIMG . '../image/Fundo-Login.svg'; ?>);
		}
	}
</style>

<body class="bg">
<div class="container" style="margin-top: -60px;">
	<div class="card shadow-lg o-hidden border-0 my-5">
		<div class="card-body p-0">
			<div class="row">
				<div class="col-lg-5 d-none d-lg-flex">
					<div class="flex-grow-1 bg-register-image"
					     style="background-image: url(<?php echo DIRIMG . '../image/img-carousel-2.jpg'; ?>);"></div>
				</div>
				<div class="col-lg-7">
					<div class="p-5">
						<div class="text-center">
							<h4 class="text-dark mb-4">Crie sua Conta!</h4>
						</div>
						<form class="user" method="post" name="formCadastro" id="formCadastro"
						      action="<?php echo DIRPAGE . 'controllers/controllerCadastro'; ?>">
							<div class="form-group row">

								<div class="col-sm-12 mb-3 mb-sm-0">
									<input class="form-control form-control-user" type="text" id="nome" placeholder="Nome" name="nome"
									       onfocus="">
								</div>


							</div>

							<div class="form-group">
								<input class="form-control form-control-user" type="text" id="email" placeholder="Email " name="email"
								>
							</div>

							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">

									<input class="form-control form-control-user" type="text" id="dataNascimento"
									       placeholder="Data de Nascimento" name="dataNascimento">
								</div>

								<div class="col-sm-6">
									<input class="form-control form-control-user" type="tel" id="telefone" placeholder="Telefone"
									       name="telefone">
								</div>


							</div>
							<div class="form-group">
								<input class="form-control form-control-user" type="text" id="endereco" placeholder="Endereço "
								       name="endereco">
							</div>


							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">

									<input class="form-control form-control-user" type="password" id="senha" placeholder="Senha"
									       name="senha">
								</div>

								<div class="col-sm-6">
									<input class="form-control form-control-user" type="password" id="senhaConf"
									       placeholder="Reescreva a senha" name="senhaConf">
								</div>


							</div>


							<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

							<div style="text-align: center;" class="retornoCad"></div>


							<button class="btn btn-warning btn-block text-white btn-user" type="submit">Criar Conta</button>
							<hr>
							<a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i
									class="fab fa-google"></i>&nbsp; Criar com Google</a><a
								class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i
									class="fab fa-facebook-f"></i>&nbsp; Criar com Facebook</a>
							<hr>
						</form>
						<div class="text-center"><a class="small" href="user/reset_senha_user">Esqueceu a Senha ?</a></div>
						<div class="text-center"><a class="small" href="personal/login">Já tem conta ? Faça Login!</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src='lib/js/zepto.min.js'></script>
<script src='<?php echo DIRJS . 'sweetalert.min.js' ?>'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>
<script src='lib/js/jquery.js'></script>
<script src='lib/js/index.js'></script>
<script src='lib/js/vanilla-masker.min.js'></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm"></script>
<script src='lib/js/javascript.js'></script>
</body>
</html>