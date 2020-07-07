<?php
session_start();
header('Content-type: text/html; charset=utf-8');


if (!isset($_POST['plano']) && !isset($_SESSION['selectPlan'])) {
	header("Location: " . DIRPAGE . "#planos");
} else {
	if (!isset($_SESSION['login'])) {
		$_SESSION['selectPlan'] = $_POST['plano'];
		sleep(0.01);
		header("Location: " . DIRPAGE . "login");
	}
	if (isset($_POST['plano'])) {
		$_SESSION['selectPlan'] = $_POST['plano'];
	}
}


use Classes\ClassPlano;

$dPlano = new ClassPlano;
if (isset($_SESSION['selectPlan'])) {
	$p = $dPlano->getPlan($_SESSION['selectPlan']);
} else {
	$_SESSION['selectPlan'] = $_POST['plano'];
	$p = $dPlano->getPlan($_SESSION['selectPlan']);
}

if (isset($_SESSION['desconto'])) {
	$discount = $_SESSION['desconto'];
	$_SESSION['totalPlan'] = $p['preco'] - $discount;
} else {
	$discount = 0;
	$_SESSION['totalPlan'] = $p['preco'] - $discount;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title><?php echo NAME . ' - Carrinho' ?></title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
          integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
</head>
<body>

<div class="container mt-5">


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
                            <h3 class="mb-4 mt-1 text-center font-weight-bold">Carrinho</h3>

                            <hr>

                            <dl class="row">
                                <dd class="col-sm-8">
																	<?php echo $p['titulo']; ?>
                                </dd>
                                <dd class="col-sm-4">
                                    € <?php echo number_format($p['preco'], 2, ",", "") ?>
                                </dd>

                                <dd class="col-sm-8">
                                    Desconto
                                </dd>
                                <dd class="col-sm-4">
                                    € <?php echo number_format($discount, 2, ",", "") ?>
                                </dd>

                                <dd class="col-sm-8">
                                    Total
                                </dd>
                                <hr>
                                <dd class="col-sm-4">
                                    € <?php echo number_format($_SESSION['totalPlan'], 2, ",", "") ?>
                                </dd>


                            </dl>

                            <hr>

                            <form id="form-desconto" method="post"
                                  action="<?php echo DIRPAGE . 'controllers/controllerDesconto' ?>">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="cupom" id="cupom"
                                               placeholder="Cupom de Desconto">
                                    </div>
                                    <div class="col-sm-5">
                                        <button class="col-sm-12 btn btn-primary mb-2" type="submit">Aplicar
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-3">
                            <?php

                            if (isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }

                            ?>
                            </div>


                            <div class=" mt-5">
                                <form method="post" action="<?php echo DIRPAGE . 'controllers/controllerAssinatura' ?>">
                                    <input type="hidden" name="idPlano" value="<?php echo $p['id']; ?>">
                                    <input type="hidden" name="desconto" value="<?php echo $discount; ?>">
                                    <button class="btn btn-primary btn-lg btn-block">Realizar Compra</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>