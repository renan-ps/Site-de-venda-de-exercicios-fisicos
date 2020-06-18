<?php

echo \Classes\ClassLayout::setHeaderUser();
echo \Classes\ClassLayout::setNavbarSideUser();
echo \Classes\ClassLayout::setNavbarHighUser();

?>



			<div class="container-fluid">
				<div class="row mb-3">
					<div class="col-lg-4">
						<div class="card mb-3">

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

<?php echo \Classes\ClassLayout::setFooterUser(); ?>