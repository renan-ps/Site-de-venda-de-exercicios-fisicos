<?php


use Classes\ClassSessions;
use Models\ClassAssinatura;
use PayPal\Api\Agreement;
use PayPal\Api\AgreementStateDescriptor;

$session = new ClassSessions();
$session->verifyInsideSession('user');

$assinatura = new ClassAssinatura();

if (!isset($_POST['form'])){
	header('Location: ' . DIRPAGE);
}

if ($assinatura->verifySignature($_SESSION['idUser']) < 1 || $assinatura->getStatusSinature($_SESSION['idUser']) != 'a') {
	echo "Você não possui uma assinatura ativa.";


} else {
	$idPaypal = $assinatura->getIdPaypal($_SESSION['idUser']);
	$assinatura->cancelSignature($idPaypal);

	$config = new PayPal\Rest\ApiContext(
		new PayPal\Auth\OAuthTokenCredential(
			'AVFHmmLqRUJGwV0ykqznh7Vdq5uNZEOErZLDB_bwXKh3VODyNUAJm312kPKWPMDz6EAUnZvVx0bw3j9D',      //Client ID;
			'EG4h9bTj0ocYLz0JsJDzw1BfUYRX5L4SjKrLfhWOxbn9YNk7rZ3PEMhwggh3HZmb555KExdmPwilzRI6'    //Client Secret;
		)
	);

	$config->setConfig(array(
		'mode' => 'sandbox',
		'http.ConnectionTimeOut' => 30,
	));

	$agreementStateDescriptor = new AgreementStateDescriptor();
	$agreementStateDescriptor->setNote("Usuário suspendeu a assinatura pelo site.");

	$createdAgreement = new Agreement();
	$createdAgreement->setId($idPaypal);
	try{
		$createdAgreement->suspend($agreementStateDescriptor, $config);
		$agreement = Agreement::get($createdAgreement->getId(), $config);

		echo "Assinatura suspensa.";
	}catch (Exception $ex){
		echo "Erro";
		exit(1);
	}

	echo $agreement;
}