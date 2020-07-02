<?php
echo \Classes\ClassLayout::setHeadRestrito('admin');
echo \Classes\ClassLayout::getHeadDashboard();
echo \Classes\ClassLayout::getSidebarDashboard($_SESSION['permition']);
$manager = new \Models\ClassManager();
$users = $manager->getUsers();
?>
<script>
    $(document).ready(function () {
        $('#clientes').DataTable();
    });
</script>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Lista de Clientes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content container-fluid ">
        <div class="row ml-2 mr-2">
            <div class="card col-12">
                <div class="card-body">
                    <div id="listaClientes"></div>
                    <table id="clientes" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>Data Cadastro</th>
                            <th>Plano</th>
                            <th>Status</th>
                            <th>Mais</th>
                        </tr>
                        </thead>
                        <tbody>
												<?php foreach ($users as $user) {
													$plano = $manager->getPlanUser($user['idUsuario'])
													?>
                            <tr>
                                <td><?php echo $user['nome'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['telefone'] ?></td>
                                <td><?php $date = new DateTime($user['dataCriacao']);
																	echo $date->format('d/m/Y') ?></td>
                                <td><?php
																	switch ($plano['plano']) {
																		case 1:
																			echo 'Plano Básico';
																			break;
																		case 2:
																			echo 'Plano Premium';
																			break;
																		case 3:
																			echo 'Plano Advanced';
																			break;
																		default:
																			echo 'Nunca assinou';
																	}
																	?></td>
                                <td><?php
																	switch ($plano['status']) {
																		case 'p':
																			echo 'Pendente';
																			break;
																		case 'a':
																			echo 'Ativo';
																			break;
																		case 'c':
																			echo 'Cancelado';
																			break;
																		default:
																			echo '';
																	}
																	?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">+</button>
                                </td>
                            </tr>

												<?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>


<?php
echo \Classes\ClassLayout::getFooterDashboard();
?>

