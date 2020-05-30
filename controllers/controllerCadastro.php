<?php
$validate = new \Classes\ClassValidate();

$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email, 'r');
$validate->validateData($dataNascimento);

var_dump($validate->getErro());

$validate->validateFinalCad($arrVar);