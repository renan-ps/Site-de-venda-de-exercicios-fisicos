<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Perfil</title>
   <link rel="stylesheet" href="../../lib/css/user/bootstrap.min.css?h=504792f7254b7c7ba831bdd93d286139">
   <link rel="stylesheet" href="../../lib/css/user/Profile-Edit-Form-1.css">
   <link rel="stylesheet" href="../../lib/css/user/Profile-Edit-Form.css">
   <link rel="stylesheet" href="../../lib/css/user/styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body id="page-top">
	<div id="wrapper">
		<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
			<div class="container-fluid d-flex flex-column p-0">
				<a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
					<div class="sidebar-brand-icon rotate-n-15">
						<i class="fas fa-laugh-wink fas fa-dumbbell"></i>
					</div>

					<div class="sidebar-brand-text mx-3"><span>treino do zé</span></div>
				</a>
				<hr class="sidebar-divider my-0">
				<ul class="nav navbar-nav text-light" id="accordionSidebar">
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="Planos.php">
							<i class="far fa-user-circle"></i>
								<span>Gerenciar Plano</span>
						</a>
					</li>

					<li class="nav-item" role="presentation"><a class="nav-link active" href="Perfil_user.php"><i class="fas fa-user-circle"></i><span>Minhas Informaçoes</span></a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="time_line_user.php"><i class="fas fa-key"></i><span>TimeLine</span></a></li>
					<li class="nav-item" role="presentation"></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-window-maximize"></i><span>Gerenciar Pagamentos</span></a></li>
					
				</ul>
				<div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
			</div>
		</nav>
		<div class="d-flex flex-column" id="content-wrapper">
			<div id="content">
				<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
					<div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
						<form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
							<div class="input-group">
								<div class="input-group-append"></div>
							</div>
						</form>
						<ul class="nav navbar-nav flex-nowrap ml-auto">
							<li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
								<div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
									<form class="form-inline mr-auto navbar-search w-100">
										<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
											<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
										</div>
									</form>
								</div>
							</li>
							<li class="nav-item dropdown no-arrow mx-1" role="presentation">
								<div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></button>
									<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
										role="menu">
										<h6 class="dropdown-header">alerts center</h6>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 12, 2019</span>
												<p>A new monthly report is ready to download!</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 7, 2019</span>
												<p>$290.29 has been deposited into your account!</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 2, 2019</span>
												<p>Spending Alert: We've noticed unusually high spending for your account.</p>
											</div>
										</a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
								</div>
							</li>
							<li class="nav-item dropdown no-arrow mx-1" role="presentation">
								<div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></button>
									<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
										role="menu">
										<h6 class="dropdown-header">alerts center</h6>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../../image/avatars/avatar4.jpeg?h=fefb30b61c8459a66bd338b7d790c3d5">
												<div class="bg-success status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
												<p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../../image/avatars/avatar2.jpeg?h=5d142be9441885f0935b84cf739d4112">
												<div class="status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
												<p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../../image/avatars/avatar3.jpeg?h=c5166867f10a4e454b5b2ae8d63268b3">
												<div class="bg-warning status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
												<p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../../image/avatars/avatar5.jpeg?h=35dc45edbcda6b3fc752dab2b0f082ea">
												<div class="bg-success status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
												<p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
											</div>
										</a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
								</div>
								<div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
							</li>
							<div class="d-none d-sm-block topbar-divider"></div>
							<li class="nav-item dropdown no-arrow" role="presentation">
								<div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(62,100,211);"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"></button>
									<div
										class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
										<a
											class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
											<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
					</div>
					</li>
					</ul>
			</div>
			</nav>
			<div class="container-fluid">
				<div class="row mb-3">
					<div class="col-lg-4">
						<div class="card mb-3 card">
							<div class="card-header py-3">
								<p class="text-primary m-0 font-weight-bold">Alterar Foto</p>
							</div>

							<div class="card-body text-center shadow" style="height: 318px;">
									
									<div class="">
					<div class="avatar">
						<div class="avatar-bg center container"></div>
					</div><input type="file" class="form-control btn btn-primary btn-sm" name="avatar-file"></div>

							  
									

								<div class="mb-3 mt-1">
									<button class="btn btn-primary btn-sm" type="submit">Salvar Alterações</button>
									
								</div>
							</div>

						</div>
						<div class="card shadow">
							<div class="card-header py-3">
								<p class="text-primary m-0 font-weight-bold">Mudar Senha</p>
							</div>
							<div class="card-body">
								<form>
									<div class="form-group"><label for="address"><strong>Senha Atual</strong><br></label><input class="form-control" type="text" placeholder="Digite a senha atual"></div>
									<div class="form-row">
										<div class="col">
											<div class="form-group"><label for="country"><strong>Nova Senha</strong><br></label><input class="form-control" type="text" name="nova_senha"></div>
											<div class="form-group"><label for="country"><strong>Re-escreva a Nova Senha</strong><br></label><input class="form-control" type="text" name="country"></div>
										</div>
									</div>
									<div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Salvar Alterações</button></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row mb-3 d-none">
							<div class="col">
								<div class="card text-white bg-primary shadow">
									<div class="card-body">
										<div class="row mb-2">
											<div class="col">
												<p class="m-0">Peformance</p>
												<p class="m-0"><strong>65.2%</strong></p>
											</div>
											<div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
										</div>
										<p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card text-white bg-success shadow">
									<div class="card-body">
										<div class="row mb-2">
											<div class="col">
												<p class="m-0">Peformance</p>
												<p class="m-0"><strong>65.2%</strong></p>
											</div>
											<div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
										</div>
										<p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="card shadow mb-3">
									<div class="card-header py-3">
										<p class="text-primary m-0 font-weight-bold">Gerenciar Perfil</p>
									</div>
									<div class="card-body">
										<form>
											<div class="form-row">
												<div class="col">
													<div class="form-group"><label for="username"><strong>Usuario</strong></label><input class="form-control" type="text" name="username"></div>
												</div>
												<div class="col">
													<div class="form-group"><label for="email"><strong>Email&nbsp;</strong></label><input class="form-control" type="email" name="email"></div>
												</div>
											</div>
											<div class="form-row">
												<div class="col">
													<div class="form-group"><label for="first_name"><strong>Nome</strong></label><input class="form-control" type="text" name="first_name"></div>
												</div>
												<div class="col">
													<div class="form-group"><label for="last_name"><strong>Ultimo Nome</strong><br></label><input class="form-control" type="text" name="last_name"></div>
												</div>
											</div>
											<div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Salvar Alterações</button></div>
										</form>
									</div>
								</div>
								<div class="card shadow" style="height: 404px;">
									<div class="card-header py-3">
										<p class="text-primary m-0 font-weight-bold">Gerenciar Endereço</p>
									</div>
									<div class="card-body">
										<form>
											<div class="form-group"><label for="address"><strong>Endereço:</strong><br></label><input class="form-control" type="text" name="address"></div>
											<div class="form-row">
												<div class="col">
													<div class="form-group"><label for="city"><strong>Cidade</strong></label><input class="form-control" type="text" name="city"></div>
												</div>
												<div class="col">
													<div class="form-group"><label for="country"><strong>País</strong><br></label><input class="form-control" type="text" name="country"></div>
												</div>
											</div>
											<div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Salvar Alterações</button></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card shadow mb-5"></div>
			</div>
		</div>
	</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
   <script src="../../lib/js/theme.js" type="text/javascript" charset="utf-8"></script>
   <script src="../../lib/js/Profile-Edit-Form.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>