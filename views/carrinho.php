<?php
session_start();
header('Content-type: text/html; charset=utf-8');
echo \Classes\ClassLayout::setHeaderCarrinho('Carrinho', "Faça seu cadastro", "");

if (!isset($_POST['plano']) && !isset($_SESSION['selectPlan'])) {
	echo "<script>window.location.href = 'http://localhost/personal/#planos';</script>";
}

if (!isset($_SESSION['login'])) {
	$_SESSION['selectPlan'] = $_POST['plano'];
	echo "<script>window.location.href = 'http://localhost/personal/login';</script>";
}

use Classes\ClassPlano;

$dPlano = new ClassPlano;
$p = $dPlano->getPlan($_SESSION['selectPlan']);
?>

<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">


	<!--Section: Content-->
	<section class="dark-grey-text">

		<div class="card">
			<div class="card-body">

				<!--Grid row-->
				<div class="row">

					<div class="col-lg-3 d-none d-md-none d-sm-none d-lg-block">
						<img src="<?php echo DIRIMG . 'cart.jpg' ?>" class="img-fluid">
					</div>

					<!--Grid column-->
					<div class="col-lg-9 mb-12">

						<!--Card-->
						<div class="card z-depth-0 border border-light rounded-0">

							<!--Card content-->
							<div class="card-body">
								<h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Itens no Carrinho</h4>

								<hr>

								<dl class="row">
									<dd class="col-sm-8">
										<?php echo $p['titulo']; ?>
									</dd>
									<dd class="col-sm-4">
										R$ <?php echo number_format($p['preco'], 2, ",", "") ?>
									</dd>
								</dl>

								<hr>

									<form>
										<div class="form-group row">
											<input type="text" class="form-control col-sm-7" id="cupom" placeholder="Cupom de Desconto">
											<div class="col-sm-5">
												<button type="submit" class="col-sm-12 btn btn-primary mb-2">Aplicar</button>
											</div>
										</div>

<!--										<div class="form-group col-sm-7 mb-2">-->
<!--											<label for="cupom" class="sr-only">Cupom de desconto</label>-->
<!--											<input type="text" class="form-control" id="cupom" placeholder="Cupom de Desconto">-->
<!--										</div>-->
<!--										<button type="submit" class=" col-sm-5 btn btn-primary mb-2">Aplicar</button>-->
									</form>



								<div class="card-footer mt-3">
									<form method="post" action="<?php echo DIRPAGE . 'controllers/controllerAssinatura' ?>">
										<button class="btn btn-primary btn-lg btn-block">Realizar Compra</button>
									</form>
								</div>


							</div>

						</div>
						<!--/.Card-->


					</div>
					<!--Grid column-->

				</div>
				<!--Grid row-->

			</div>
		</div>

	</section>
	<!--Section: Content-->


</div>
