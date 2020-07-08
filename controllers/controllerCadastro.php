<?php
$validate = new \Classes\ClassValidate();



if(!$validate->validateFields($_POST)){
	echo $validate->validateFinalCad($arrVar);
}else if(!$validate->validateEmail($email)){
	echo $validate->validateFinalCad($arrVar);
}else if(!$validate->validateIssetEmail($email, 'r')) {
	echo $validate->validateFinalCad($arrVar);
}else if(!$validate->validateData($dataNascimento)) {
	echo $validate->validateFinalCad($arrVar);
}	else if(!$validate->validateConfSenha($senha, $senhaConf)){
	echo $validate->validateFinalCad($arrVar);
}else if(!$validate->validateForcaSenha($senha)){
	echo $validate->validateFinalCad($arrVar);
}else if(!$validate->validateCaptcha($gRecaptchaResponse)){
	echo $validate->validateFinalCad($arrVar);
}else{
	//var_dump($validate->getErro());
	echo $validate->validateFinalCad($arrVar); //$arrVar é da helpers/variables
}


