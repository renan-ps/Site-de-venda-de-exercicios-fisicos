<?php
namespace Models;
use Models\ClassCrud;

class ClassManager extends ClassCrud{

	private $crud;

	public function __construct()
	{
		$this->crud = new ClassCrud();
	}

	#Retorna o total de usuários registrados
	public function getRegistration(){
		$r = $this->crud->selectDB(
			"*",
			"users",
			"",
			[]
		);

		$total = $r->rowCount();
		return $total;
	}

	#Retorna o total de planos ativos
	public function getActivePlans(){
		$ap = $this->crud->selectDB(
			"*",
			"assinaturas",
			"where status = ?",
			['a']
		);

		$total = $ap->rowCount();
		return $total;
	}

	#Retorna o total de planos não ativos
	public function getNoActivePlans(){
		$ap = $this->crud->selectDB(
			"*",
			"assinaturas",
			"where status != ?",
			['a']
		);

		$total = $ap->rowCount();
		return $total;
	}

	#Retorna as informações de todos os usuários cadastrados
	public function getUsers(){
		$query = $this->crud->selectDB(
			"*",
			"users",
			"ORDER BY idUsuario DESC",
			[]
		);
		return $query->fetchAll();
	}

	#Retorna o plano atual de um usuário
	public function getPlanUser($idUser){
		$buscaAtivo = $this->crud->selectDB(
			"*",
			"assinaturas",
			"where usuario = ?",
			[$idUser]
		);

		if ($buscaAtivo->rowCount() > 0){
			return $buscaAtivo->fetch();
		}else{
			$buscaOutros = $this->crud->selectDB(
				"*",
				"assinaturas",
				"where usuario = ? ORDER BY id DESC",
				[$idUser]
			);
			return $buscaOutros->fetch();
		}
	}

	#Retorna informações do plano
	public function getPlan($id){
		$name = $this->crud->selectDB(
			"*",
			"planos",
			"where id = ?",
			[$id]
		);

		return $name->fetch();
	}

	#Edita o usuário
	public function editUser($idUser, $plan){
		$this->crud->updateDB(
			"assinaturas",
			"plano = ?, status = ?",
			"usuario = ?",
			[$plan, 'a', $idUser]
		);
	}

}