<?php

$signature = new \Models\ClassAssinatura();

use Classes\ClassSessions;
use Classes\ClassPlano;
use PayPal\Api\ChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\Patch;
use PayPal\Api\PatchRequest;
use PayPal\Api\Plan;
use PayPal\Api\Agreement;
use PayPal\Api\Payer;
use PayPal\Common\PayPalModel;

$session = new ClassSessions();

$plano = new ClassPlano();
$p = $plano->getPlan($_POST['idPlano']);

$idUser = $_SESSION['idUser'];
$idPlan = $_POST['idPlano'];
$discount = $_POST['desconto'];
$cost = $_SESSION['totalPlan'];
$planName = $p['titulo'];
$interval = $p['duracao'];

//Verifica se o usuário já possui uma assinatura (ativa ou não)
if ($signature->verifySignature($idUser) > 0){
	$signature->setPlanInSignature($idUser, $idPlan);
	$idSignature = $signature->getLastSignature($idUser);
	if ($signature->getStatusSinature($idUser) === 'a'){
		echo
			"
				<script>
				var alerta = alert('Você já possui um plano ativo.');
				window.location.replace('".DIRPAGE."');
				</script>
			";
	}

}else{
	$userSignature = $signature->createSignature($idUser, $idPlan, $discount);
	$idSignature = $signature->getLastSignature($idUser);
}

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


function createPlan($value, $planName, $config, $idSignature, $interval)
{
	$definition = new PaymentDefinition();
	$definition->setName('Regular Payments')                                //Nome que aparecerá para o cliente
	->setType('REGULAR')                                                   //Tipo de plano
	->setFrequency('Month')                                            //Tipo de frequência de cobrança
	->setFrequencyInterval($interval)                                 				  //Intervalo de frequência
	->setCycles("0")                                                      //Ciclos de cobrança
	->setAmount(new Currency((array('value' => $value, 'currency' => 'BRL'))));   //Valor

	$plan = new Plan();
	$plan->setName($planName)                                             //Nome do plano
	->setDescription("Assinatura Treino do Zé")               //Descrição
	->setType("INFINITE");                                         //Duração do plano: INFINITE ou FIXED

	$plan->setPaymentDefinitions(array($definition));

	$preferences = new MerchantPreferences();
	$preferences->setReturnUrl('https://setaragency.com/TreinoDoZe/return_signature?result=success&idSignature=' . $idSignature)
		->setCancelUrl('https://setaragency.com/TreinoDoZe/return_signature?result=error&idSinature=' . $idSignature)
		->setAutoBillAmount("YES")                             //Cobrança automática ou não
		->setInitialFailAmountAction("CONTINUE")          //Cobrar ou parar após falha no pagamento
		->setMaxFailAttempts("3");                             //Tentativas após primeira falha no pagamento

	$plan->setMerchantPreferences($preferences);

	return $plan->create($config);
}

function activePlan($plan, $config)
{
	$patch = new Patch();

	$value = new PayPalModel('{"state": "ACTIVE"}');

	$patch->setOp('replace')
		->setPath('/')
		->setValue($value);
	$patchRequest = new PatchRequest();
	$patchRequest->addPatch($patch);

	$plan->update($patchRequest, $config);
	return Plan::get($plan->getId(), $config);
}


function createAgreement($config, $createdPlan, $planName)
{
	$data = date("Y-m-d", mktime(0, 0, 0, date("m"), (date("d") + 1), date("Y"))) . "T00:00:00Z";

	$plan = new Plan();
	$plan->setId($createdPlan->getId());

	$payer = new Payer();
	$payer->setPaymentMethod('paypal');                               //Forma de pagamento

	$agreement = new Agreement();
	$agreement->setName($planName)                                                    //Nome da assinatura
	->setDescription("Assinatura Treino do Zé - " . $planName)             //Descrição da assinatura
	->setStartDate($data)                                                          //Data de início da assinatura
	->setPlan($plan)
		->setPayer($payer);

	return $agreement->create($config);                                      //Cliente será redirecionado para o Paypal

}

function redirectUser($url)
{
	header('Location: ' . $url);
}


$userPlan = createPlan($cost, $planName, $config, $idSignature, $interval);

$userPlan = activePlan($userPlan, $config);

$userSubscription = createAgreement($config, $userPlan, $planName);

redirectUser($userSubscription->getApprovalLink());
