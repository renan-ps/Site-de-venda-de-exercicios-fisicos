<?php
echo \Classes\ClassLayout::setHeadRestrito('admin');
echo \Classes\ClassLayout::getHeadDashboard();
echo \Classes\ClassLayout::getSidebarDashboard($_SESSION['permition']);

use Classes\ClassPlano;

$planos = new ClassPlano();
$planos = $planos->getAllPlans();

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Planos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo DIRPAGE . 'dashboard' ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Planos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12 mb-2">
                  <?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>
                </div>

            </div>
            <div class="row">
							<?php
							foreach ($planos as $plano) {
								?>
                  <div class="col-lg-4 col-md-12 mb-4">
                      <div class="card">
                          <img src="<?php echo DIRIMG . $plano['img1']; ?>" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $plano['titulo']; ?></h5>
                              <p class="card-text">€<?php echo number_format($plano['preco'], 2, ",", ""); ?></p>
                              <a class="btn btn-primary" href="edit-plan?id=<?php echo $plano['id'] ?>">Editar</a>
                          </div>
                      </div>
                  </div>
								<?php
							}
							?>

            </div>
            <!-- /.row -->
            <!-- Main row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
echo \Classes\ClassLayout::getFooterDashboard();
?>
