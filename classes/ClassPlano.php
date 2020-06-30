<?php

namespace Classes;


use Models\ClassCrud;

Class ClassPlano extends ClassCrud {

	#Seleciona todos os planos
	public function getAllPlans(){
		$b = $this->selectDB(
			"*",
			"planos",
			"where id > ?",
			array(0)
		);

		$f = $b->fetchAll(\PDO::FETCH_ASSOC);

		return $f;
	}

	#Seleciona um plano específico
  public function getPlan($id){
  	$b = $this->selectDB(
  		"*",
		  "planos",
		  "where id = ?",
		  array(
		  	$id
		  )
	  );

	  $f = $b->fetch(\PDO::FETCH_ASSOC);


	  return $f;
  }
}