<?php
$validate = new \Classes\ClassValidate();

$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email, 'r');
$validate->validateData($dataNascimento);
$validate->validateConfSenha($senha, $senhaConf);
$validate->validateForcaSenha($senha);

var_dump($validate->getErro());

$validate->validateFinalCad($arrVar);