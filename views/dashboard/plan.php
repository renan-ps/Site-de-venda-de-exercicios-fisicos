<?php
echo \Classes\ClassLayout::setHeadRestrito('user');
echo \Classes\ClassLayout::getHeadDashboard();
echo \Classes\ClassLayout::getSidebarDashboard($_SESSION['permition']);
$manager = new \Models\ClassManager();

$assinatura = $manager->getPlanUser($_SESSION['idUser']);

if ($assinatura['status'] == 'a') {
	$plano = $manager->getPlan($assinatura['plano']);
	$nomePlano = $plano[1];
} else {
	$nomePlano = 'Sem assinatura';
}

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Seu plano</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo DIRPAGE . 'dashboard' ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Seu plano</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-4">


                    <div class="card card-primary">
                        <div class="card-header">
                            <strong>Perfil</strong>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?php echo DIRIMG . 'no-photo.jpg' ?>"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $_SESSION['name']; ?></h3>

                            <p class="text-muted text-center"><?php echo $nomePlano; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Membro desde</b>
                                    <a class="float-right">
									<?php
									$date = new DateTime($_SESSION['dataCriacao']);
									echo $date->format('d/m/Y'); ?>
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>


                <!-- INFORMAÇÕES DO PLANO -->
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <strong>Sobre o plano</strong>
                        </div>

                        <?php
                        if($assinatura['status'] === 'a'){?>
                            <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="">
                                <?php echo $plano['possui'] ?>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <span class="align-middle">Deseja cancelar?</span>
                                <form class="float-right" method="post" action="<?php echo DIRPAGE . 'controllers/controllerCancelarAssinatura' ?>" >
                                    <input type="hidden" name="form" value="1">
                                    <button class="btn btn-danger btn-sm">Cancelar assinatura</button>
                                </form>
                        </div>
                        <?php }else{ ?>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p class="text-center">Você não possui um plano ativo.</p>
                                <p class="text-center"><a href="<?php echo DIRPAGE .'#planos' ?>">Clique aqui</a> para visualizar nossos planos.</p>
                            </div>

                        <?php } ?>


                    </div>
                    <!-- /.card -->
                </div>

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
