<?php
namespace Models;

use Models\ClassCrud;

Class ClassAssinatura extends ClassCrud{

	#Cria nova assinatura
	public function createSignature($user, $plan, $discount){
		$this->insertDB(
			"assinaturas",
			"?,?,?,?,?,?,?",
			array(
				0,
				$user,
				$plan,
				$discount,
				NULL,
				date("Y-m-d"),
				'p'
			)
		);
	}

	#Verifica se o usuário possui alguma assinatura cadastrada
	public function verifySignature($user){
		$query = $this->selectDB(
			"*",
			"assinaturas",
			"where usuario = ?",
			[$user]
		);

		return $query->rowCount();
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

	#Verifica o status da assinatura
	public function getStatusSinature($idUser){
		$lastSignature =  $this->selectDB(
			"status",
			"assinaturas",
			"where usuario = ? order by id desc limit 1",
			array($idUser)
		);

		$return = $lastSignature->fetch(\PDO::FETCH_ASSOC);

		return $return['status'];
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

	//Atualiza o plano na assinatura
	public function setPlanInSignature($user, $plan){
		$this->updateDB(
			"assinaturas",
			"plano = ?",
			"usuario = ?",
			[$plan, $user]
		);
	}


}