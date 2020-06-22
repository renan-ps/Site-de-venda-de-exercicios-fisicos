<?php echo \Classes\ClassLayout::setHeaderUser('Login', "Faça seu Login", ""); ?>
<!doctype html>
<html lang="pt-br">
<html>

<div id="demo" style="margin-left: 20px; padding-top: 20px;"><i class="fas fa-arrow-left fa-3x"></i></div>

<style type="text/css" media="screen">
	@media (min-width: 1200px) {
	.bg  {
		background-image:  url(<?php echo DIRIMG . '../image/Fundo-Login.svg'; ?>) ;
	}
}
</style>


<body class="bg img-fluid" >
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 0px;">
			<div class="col-md-9 col-lg-12 col-xl-10">
				<div class="card shadow-lg o-hidden border-0 my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6 d-none d-lg-flex">
								<div class="flex-grow-1 bg-login-image" style="background-image: url(<?php echo DIRIMG . '../image/img-carousel-2.jpg'; ?>);"></div>
								<img src="../image/Fundo-Login.svg" alt="">
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h4 class="text-dark mb-4">Olá, Bem-vindo!</h4>
									</div>
									<div style="color: red; margin: 2.5% auto; line-height: 20px;" class="resultadoForm"></div>
									
									<form class="user form-login" method="post" action="<?php echo DIRPAGE . 'controllers/controllerLogin'; ?>" id="formLogin">
										<div class="form-group">
											<input class="form-control form-control-user" type="email"   placeholder="E-mail" id="email" name="email">
										</div>

										<div class="form-group">
											<input class="form-control form-control-user" type="password" placeholder="********" id="senha"  name="senha">
										</div>

										<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
										<div style="color: red; margin: 2.5% auto; line-height: 20px;" class="resultadoForm"></div>
										<div class="form-group">
											<div class="custom-control custom-checkbox small">
												<div class="form-check">
													<input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1">
													<label class="form-check-label custom-control-label" for="formCheck-1">Lembrar-me</label>
												</div>
											</div>
										</div>
										<button class="btn btn-primary btn-block text-white btn-user" type="submit" value="Entrar">Entrar</button>
										<hr>
										<a class="btn btn-primary btn-block text-white btn-google btn-user" role="button">
											<i class="fab fa-google"></i>&nbsp; Entrar com Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button">
												<i class="fab fa-facebook-f"></i>&nbsp; Entrar com Facebook</a>
												<hr>
											</form>

											<div class="text-center">
												<a class="small" href="forgot-password.html">Esqueceu a senha?</a>
											</div>
											<div class="text-center">
												<a class="small" href="register.html">Criar conta!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			
		</body>

		</html>