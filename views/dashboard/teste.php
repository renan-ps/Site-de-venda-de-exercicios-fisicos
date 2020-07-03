<?php
$signature = new \Models\ClassAssinatura();

$idUser = 13;
//Verifica se o usuário já possui uma assinatura (ativa ou não)
if ($signature->verifySignature($idUser) > 0) {
	echo "
	<script>
		alert('Você já possui uma assinatura');
	</script>
	";
}