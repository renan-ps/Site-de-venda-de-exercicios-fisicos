<?php

$validate = new \Classes\ClassPaypal();
$signature = new \Models\ClassAssinatura();

$idUser = $_POST['idUsuario'];
$idPlan = $_POST['idPlano'];
$discount = $_POST['desconto'];
$cost = $_POST['valor'];
$planName = $_POST['nomePlano'];

$userSignature = $signature->createSignature($idUser, $idPlan, $discount);
$idSignature = $signature->getLastSignature($idUser);


$userPlan = $validate->createPlan($cost, $planName, $idSignature);

$userPlan = $validate->activePlan($userPlan);

$userSubscription = $validate->createAgreement($userPlan, $planName);

redirectUser($userSubscription->getAprovalLink());
