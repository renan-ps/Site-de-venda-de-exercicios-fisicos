<?php

use PayPal\Api\Agreement;
use Models\ClassAssinatura;


$config = new PayPal\Rest\ApiContext(
	new PayPal\Auth\OAuthTokenCredential(
		'AVFHmmLqRUJGwV0ykqznh7Vdq5uNZEOErZLDB_bwXKh3VODyNUAJm312kPKWPMDz6EAUnZvVx0bw3j9D',//Client ID;
		'EG4h9bTj0ocYLz0JsJDzw1BfUYRX5L4SjKrLfhWOxbn9YNk7rZ3PEMhwggh3HZmb555KExdmPwilzRI6'//Client Secret;
	)
);

$config->setConfig(array(
	'mode' => 'sandbox',
	'http.ConnectionTimeOut' => 30,
));

if (isset($_GET['result'])) {
	switch ($_GET['result']) {
		case "success":
			$token = $_GET['token'];
			$agreement = new Agreement();
			try {
				$agreement->execute($token, $config);
			} catch (Exception $e) {
				exit(1);
			}
			$agreement = Agreement::get($agreement->getId(), $config);
			$assinatura = new ClassAssinatura();
			$assinatura->setIdTransacao($_GET['idSignature'], $agreement->getId());
			header('Location:' . DIRPAGE . 'compra-efetuada?id=' . $_GET['idSignature'] . '&idT=' . $agreement->getId());
			//echo "<br><br>Obrigado! <br>";
			//echo "ID da compra: " . $agreement->getId();

			break; //END CASE SUCCESS

		case "error":
			//echo "Erro ao comprar";
			header('Location: ' . DIRPAGE . 'compra-nao-efetuada');
			break; //END CASE ERROR

		default:
			header('Location: ' . DIRPAGE);
	}
} else {
	header('Location: ' . DIRPAGE);
}