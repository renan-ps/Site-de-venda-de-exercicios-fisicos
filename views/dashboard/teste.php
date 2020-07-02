<?php
$manager = new \Models\ClassManager();
$users = $manager->getUsers();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<title>Hello, world!</title>
</head>
<body>
<div class="container">
	<table id="example" class="table table-bordered table-hover" style="width:100%">
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




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>