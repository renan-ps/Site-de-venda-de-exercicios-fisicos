<?php
namespace Models;

use Models\ClassCrud;

Class ClassAssinatura extends ClassCrud{

	#Cria nova assinatura
	public function createSignature($user, $plan, $discount){
		$this->insertDB(
			"assinaturas",
			"?,?,?,?,?,?",
			array(
				0,
				$user,
				$plan,
				$discount,
				NULL,
				'p'
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

	public function setIdTransacao($idSignature, $idPaypal){
		$signature = $this->updateDB(
			"assinaturas",
			"idTransacao = ?, status = ?",
			"id = ?",
			array(
				$idPaypal,
				"a",
				$idSignature
				)
		);
	}



}