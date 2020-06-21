<!doctype html>
<html lang="pt-br">
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="apple-touch-icon" sizes="57x57" href="../image/mini-icone/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../image/mini-icone/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../image/mini-icone/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../image/mini-icone/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../image/mini-icone/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../image/mini-icone/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../image/mini-icone/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../image/mini-icone/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../image/mini-icone/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../image/mini-icone/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../image/mini-icone/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../image/mini-icone/favicon-16x16.png">
	<link rel="manifest" href="../image/mini-icone/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../image/mini-icone/ms-icon-144x144.png">
	<meta name="theme-color" content="#f6c23e">
	<title>Treino do Zé - Login</title>
	<link rel="stylesheet" href="../lib/css/user/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="../lib/css/style.css">
	
</head>

<body class="bg-gradient-primary" style="background-color: rgb(88,73,146);     background-image: linear-gradient(180deg,#f6c23e 10%,#f6c23e85);">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px;">
			<div class="col-md-9 col-lg-12 col-xl-10">
				<div class="card shadow-lg o-hidden border-0 my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6 d-none d-lg-flex">
								<div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;../image/dogs/image3.jpeg?h=cbc3a40dae521ddee89bf6b026abde71&quot;);"></div>
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h4 class="text-dark mb-4">Olá, Bem-vindo!</h4>
									</div>
									<div style="color: red; margin: 2.5% auto; line-height: 20px;" class="resultadoForm"></div>
									
									<form class="user form-login" method="post" action="<?php echo DIRPAGE . 'controllers/controllerLogin'; ?>" id="formLogin">
										<div class="form-group">
											<input class="form-control form-control-user" type="email"  aria-describedby="emailHelp" placeholder="E-mail" id="email" name="email">
										</div>

										<div class="form-group">
											<input class="form-control form-control-user" type="password" placeholder="********" id="senha"  name="senha">
										</div>

										<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

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

			<script src='../lib/js/zepto.min.js'></script>
			<script src='../lib/js/sweetalert.min.js'></script>
			<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
			<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
			<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
			<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>
			<script src='../lib/js/jquery.js'></script>
			<script src='../lib/js/index.js'></script>
			<script src='../lib/js/vanilla-masker.min.js'></script>
			<script src="https://www.google.com/recaptcha/api.js?render=6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm"></script>
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
			<script src="../lib/js/theme.js"></script>
			<script src='../lib/js/javascript.js'></script>
		</body>

		</html>