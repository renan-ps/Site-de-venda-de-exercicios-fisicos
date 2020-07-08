<?php

namespace Models;

class ClassDesconto extends ClassCrud{

	#Verifica se o cupom está valido
	public function verifyCoupon($coupon){
		$query = $this->selectDB(
			"*",
			"descontos",
			"where codigo = ?",
			[$coupon]
		);

		if($query->rowCount() < 1){
			return 'nonexistent';
		}

		$query = $query->fetch();

		if($query['usos'] >= $query['limite']){
			return 'limit';
		}

		if($query['validade'] != NULL && strtotime($query['validade']) < strtotime(date("Y-m-d"))){
			return 'validate';
		}

		if ($query['status'] == 0){
			return 'cancel';
		}

		else{
			return $query['valor'];
		}
	}
}