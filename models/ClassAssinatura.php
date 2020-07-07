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

	#Retorna o idTransacao da assinatura
	public function getIdPaypal($idUser){
		$query =  $this->selectDB(
			"idTransacao",
			"assinaturas",
			"where usuario = ?",
			array($idUser)
		);

		$return = $query->fetch(\PDO::FETCH_ASSOC);

		return $return['idTransacao'];
	}

	//Cancela uma assinatura
	public function cancelSignature($idTransacao){
		$query = $this->updateDB(
			"assinaturas",
			"status = ?",
			"idTransacao = ?",
			['c', $idTransacao]
		);
	}

	public function setIdTransacao($idSignature, $idPaypal, $discount){
		$signature = $this->updateDB(
			"assinaturas",
			"idTransacao = ?, desconto = ?, status = ?",
			"id = ?",
			array(
				$idPaypal,
				$discount,
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