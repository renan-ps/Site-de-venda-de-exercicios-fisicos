<?php

$objPass = new Classes\ClassPassword();

if (isset($_POST['nome'])){
    $nome=filter_input(INPUT_POST,'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}else{
    $nome=null;
}

if (isset($_POST['email'])){
    $email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
}else{
    $email=null;
}

if (isset($_POST['dataNascimento'])){
    $dataNascimento=filter_input(INPUT_POST,'dataNascimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}else{
    $dataNascimento=null;
}

if (isset($_POST['telefone'])){
    $telefone=filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}else{
    $telefone=null;
}

if (isset($_POST['endereco'])){
    $endereco=filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}else{
    $endereco=null;
}

if (isset($_POST['senha'])){
    $senha = $_POST['senha'];
    $hashSenha = $objPass->passwordHash($senha);
}else{
    $senha=null;
    $hashSenha = null;
}

if (isset($_POST['senhaConf'])){
    $senhaConf = $_POST['senhaConf'];
}else{
    $senhaConf=null;
}

$dataCreate = date("Y-m-d H:i:s");

$token = bin2hex(random_bytes(64));

$arrVar=[
    "nome"=>$nome,
    "email"=>$email,
    "dataNascimento"=>$dataNascimento,
    "telefone"=>$telefone,
    "endereco"=>$endereco,
    "senha"=>$senha,
    "hashSenha"=>$hashSenha,
    "dataCreate"=>$dataCreate,
    "token"=>$token
];