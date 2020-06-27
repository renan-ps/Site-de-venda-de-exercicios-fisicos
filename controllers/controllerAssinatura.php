<?php

$validate = new Classes\ClassPaypal;

$userPlan = $validate->createPlan();
$userPlan = $validate->activePlan($userPlan);

$userSubscription = $validate->createAgreement($userPlan);

$validate->redirectUser($userSubscription->getApprovalLink());
