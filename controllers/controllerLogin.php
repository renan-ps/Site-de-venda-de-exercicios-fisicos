<?php
$validate = new \Classes\ClassValidate();

$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email, 'l');
$validate->validateSenha($email, $senha);
var_dump($validate->getErro());
