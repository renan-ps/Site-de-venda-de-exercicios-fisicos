<?php
$validate = new \Classes\ClassValidate();

$validate->validateFields($_POST);
$validate->validateEmail($_POST['email']);
$validate->validateData($_POST['dataNascimento']);

var_dump($validate->getErro());