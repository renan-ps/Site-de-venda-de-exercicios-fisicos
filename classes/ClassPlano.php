<?php

namespace Classes;


use Models\ClassCrud;

Class ClassPlano extends ClassCrud {

  public function getPlano($id){
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