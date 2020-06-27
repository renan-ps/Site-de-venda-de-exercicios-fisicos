<?php
namespace Models;

use Models\ClassCrud;

Class ClassAssinatura extends ClassCrud{

	#Cria nova assinatura
	public function createSignature($user, $plan, $discount){
		$this->insertDB(
			"assinaturas",
			"?,?,?,?",
			array(
				0,
				$user,
				$plan,
				$discount
			)
		);
	}

	#Busca ultima assinatura do usuário
	public function getLastSignature($idUser){
		$lastSignature =  $this->selectDB(
			"id",
			"assinaturas",
			"where usuario = ? order by id desc limit 1",
			array($idUser)
		);

		$return = $lastSignature->fetch(\PDO::FETCH_ASSOC);

		return $return['id'];
	}



}