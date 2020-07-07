<?php

use Classes\ClassSessions;
use Models\ClassDesconto;

$session = new ClassSessions();
$desconto = new ClassDesconto();

$code = $_POST['cupom'];

switch ($desconto->verifyCoupon($code)) {
	case 'validate':
	case 'cancel':
	case 'nonexistent':
		$_SESSION['msg'] =
			"
<div class='alert alert-danger' role='alert'>
  Cupom de desconto inválido!
</div>
";
		$_SESSION['desconto'] = 0;
		break;

	case 'limit':
		$_SESSION['msg'] =
			"
<div class='alert alert-danger' role='alert'>
  Cupom atingiu o limite de utilizações!
</div>
";
		$_SESSION['desconto'] = 0;
		break;

	default:
		$_SESSION['msg'] =
			"
<div class='alert alert-success' role='alert'>
  Cupom aplicado com sucesso.
</div>
";
		$_SESSION['desconto'] = $desconto->verifyCoupon($code);

}

header('Location: ' . DIRPAGE . 'carrinho');