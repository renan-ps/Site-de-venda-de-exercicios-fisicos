<?php

namespace Classes;

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

Class ClassPaypal{
	private $config;

	public function __construct(){
		$this->config = new \PayPal\Rest\ApiContext(
			new \PayPal\Auth\OAuthTokenCredential(
				'AVFHmmLqRUJGwV0ykqznh7Vdq5uNZEOErZLDB_bwXKh3VODyNUAJm312kPKWPMDz6EAUnZvVx0bw3j9D',
				'EG4h9bTj0ocYLz0JsJDzw1BfUYRX5L4SjKrLfhWOxbn9YNk7rZ3PEMhwggh3HZmb555KExdmPwilzRI6'
			)
		);

		$this->config->setConfig(array(
			'mode' => 'sandbox',
			'http.ConnectionTimeOut' => 30      //Timeout
		));
	}

	#Cria configurações
	public function setConfig(){

	}

	#Cria o plano do usuário
	public function createPlan($valor, $nomePlano, $idAssinatura){
		$definition = new PaymentDefinition();
		$definition->setName('Regular Payments');           //Nome que aparecerá para o cliente
		$definition->setType('REGULAR');                     //Tipo de plano
		$definition->setFrequency('MONTH');              //Tipo de frequência de cobrança
		$definition->setFrequencyInterval("1");    //Intervalo de frequência
		$definition->setCycles("0");                        //Ciclos de cobrança
		$definition->setAmount(new Currency(                      //Valor
			array(
				'value'=> $valor,
				'currency'=>'BRL'
			)
		));


		$plan = new Plan();
		$plan->setName($nomePlano);                                       //Nome do plano
		$plan->setDescription("Assinatura Treino do Zé");       //Descrição
		$plan->setType("INFINITE");                                 //Duração do plano: INFINITE ou FIXED


		$preferences = new MerchantPreferences();
		$preferences->setReturnUrl('obrigado?id=' . $idAssinatura);
		$preferences->setCancelUrl('erro?id=' . $idAssinatura);
		$preferences->setAutoBillAmount("YES");                       //Cobrança automática ou não
		$preferences->setInitialFailAmountAction('CONTINUE');   //Cobrar ou parar após falha no pagamento
		$preferences->setMaxFailAttempts('3');                       //Tentativas após primeira falha no pagamento

		$plan->setMerchantPreferences($preferences);

		return $plan->create();
	}


	#Ativa o plano do usuário
	public function activePlan($plan){
		$patch = new Patch();
		$value = new PayPalModel("({'state': 'ACTIVE'})");
		$patch->setOp('replace');
		$patch->setOp('/');
		$patch->setValue($value);

		$patchRequest = new PatchRequest();
		$patchRequest->addPatch($patch);

		$plan->update($patchRequest, $this->config);

		return Plan::get($plan->getId(), $this->config);
	}

	#Cria a assinatura
	public function createAgreement($createdPlan, $nomePlano){
		$dataAtual = date("Y-m-d", mktime(0, 0, 0, date("m"), (date("d") + 1), date("Y"))) . "T00:00:00Z";
		$agreement = new Agreement();
		$agreement->setName($nomePlano);                                    //Nome da assinatura
		$agreement->setDescription("Assinatura Treino do Zé");     //Descrição da assinatura
		$agreement->setStartDate($dataAtual);                                //Data de início da assinatura

		$plan = new Plan();
		$plan->setId($createdPlan->getId());

		$agreement->setPlan($plan);

		$payer = new Payer();
		$payer->setPaymentMethod('paypal');                        //Forma de pagamento

		$agreement->setPayer($payer);

		return $agreement->create($this->config);                                //Cliente será redirecionado para o Paypal
	}

	#Redirecionamento do usuário para o pagamento no Paypal
	function redirectUser($url){
		header('Location: ' . $url);
	}




}