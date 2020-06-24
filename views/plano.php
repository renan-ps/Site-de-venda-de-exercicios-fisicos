<?php

use Classes\ClassPlano;

$dPlano = new ClassPlano;

$plano = $_GET['p'];

var_dump($dPlano->getPlano($plano));

?>