<?php
$validate = new \Classes\ClassValidate();

$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email, 'r');
$validate->validateData($dataNascimento);
$validate->validateConfSenha($senha, $senhaConf);
$validate->validateForcaSenha($senha);
$validate->validateCaptcha($gRecaptchaResponse);

//var_dump($validate->getErro());

echo $validate->validateFinalCad($arrVar); //$arrVar é da helpers/variables