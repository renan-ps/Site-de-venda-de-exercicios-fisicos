<?php

use Classes\ClassSessions;
use Models\ClassManager;

$session = new ClassSessions();
$manager = new ClassManager();

$idPlano = filter_input(INPUT_POST, 'idPlano', FILTER_SANITIZE_NUMBER_INT);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$subtitulo = filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING);
$descricaoIndex = filter_input(INPUT_POST, 'descricaoIndex', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_NUMBER_INT);

$manager->editPlan($idPlano, $titulo, $subtitulo, $descricaoIndex, $descricao, $duracao, $preco);

if (isset($_FILES['img1']) && $_FILES['img1']['name'] != "") {
	switch ($idPlano){
		case 1:
			$nome = 'img-banner-plano-basico.jpg';
			break;
		case 2:
			$nome = 'img-banner-plano-premium.jpg';
			break;
		case 3:
			$nome = 'img-banner-plano-advanced.jpg';
			break;
	}
	move_uploaded_file($_FILES['img1']['tmp_name'], DIRREQ.'/image/'.$nome);
}

if (isset($_FILES['img2']) && $_FILES['img2']['name'] != "") {
	switch ($idPlano){
		case 1:
			$nome = 'img-plano-basico.jpg';
			break;
		case 2:
			$nome = 'img-plano-premium.jpg';
			break;
		case 3:
			$nome = 'img-plano-advanced.jpg';
			break;
	}
	move_uploaded_file($_FILES['img2']['tmp_name'], DIRREQ.'/image/'.$nome);
}

$_SESSION['msg'] = "
<div class='alert alert-success' role='alert'>
Plano atualizado com sucesso.
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";

header('Location: ' . DIRPAGE . 'dashboard/plans');