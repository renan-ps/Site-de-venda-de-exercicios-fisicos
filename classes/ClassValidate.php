<?php

namespace Classes;

use Models\ClassCadastro;
use Models\ClassLogin;
use ZxcvbnPhp\Zxcvbn;
use Classes\ClassPassword;
use Classes\ClassMail;

class ClassValidate
{
	private $erro = [];
	private $cadastro;
	private $password;
	private $login;
	private $tentativas;
	private $sessions;
	private $mail;

	public function __construct()
	{
		$this->cadastro = new ClassCadastro();
		$this->password = new ClassPassword();
		$this->login = new ClassLogin();
		$this->sessions = new ClassSessions();
		$this->mail = new ClassMail();
	}

	#Valida se os campos desejados foram preenchidos.
	public function validateFields($par)
	{
		$i = 0;
		foreach ($par as $key => $value) {
			if (empty($value)) {
				$i++;
			}
		}

		if ($i == 0) {
			return true;
		} else {
			$this->setErro("Preencha todos os dados!");
			return false;
		}
	}

	#Valida se o dado é um e-mail
	public function validateEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			$this->setErro("E-mail inválido.");
			return false;
		}
	}

	#Verifica se o e-mail existe no banco de dados.
	#action = r para registrar e action = l para login
	public function validateIssetEmail($email, $action)
	{
		$b = $this->cadastro->getIssetEmail($email);

		if ($action == 'r') {
			if ($b > 0) {
				$this->setErro("E-mail já cadastrado.");
				return false;
			} else {
				return true;
			}
		} elseif ($action == 'l') {
			if ($b > 0) {
				return true;
			} else {

				//$this->setErro("E-mail não cadastrado.");

				return false;
			}
		}
	}

	#Valida se o dado é uma data
	public function validateData($par)
	{
		$data = \DateTime::createFromFormat("d/m/Y", $par);
		if (($data) && ($data->format("d/m/Y") === $par)) {
			return true;
		} else {
			$this->setErro("Data de nascimento inválida.");
			return false;
		}
	}

	#Verifica se as senhas digitadas estão iguais.
	public function validateConfSenha($senha, $senhaConf)
	{
		if ($senha === $senhaConf) {
			return true;
		} else {
			$this->setErro("As senhas não combinam.");
			return false;
		}
	}

	#Verifica a força da senha.
	public function validateForcaSenha($senha, $par = null)
	{
		$zx = new Zxcvbn();
		$forca = $zx->passwordStrength($senha);

		if ($par == null) {
			#Cadastro
			if ($forca['score'] >= 2) {
				return true;
			} else {
				$this->setErro("Utilize uma senha mais forte.");
				return false;
			}

		} else {
			#login
		}
	}

	#Verifica se o hash da senha digitada é o mesmo cadastrado no banco de dados.
	public function validateSenha($email, $senha)
	{
		if ($this->password->verifyHash($email, $senha)) {
			return true;
		} else {
			$this->setErro("E-mail e/ou senha inválido(s).");
			return false;
		}
	}


	#Verifica se o captcha está correto.
	public function validateCaptcha($captcha, $score = 0.5)
	{
		$return = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SECRETKEY . "&response={$captcha}");
		$response = json_decode($return);

		if ($response->success == true && $response->score >= 0.4) {
			return true;
		} else {
			$this->setErro("Captcha inválido. Atualize a página.");
			return false;
		}
	}

	public function getErro()
	{
		return $this->erro;
	}

	public function setErro($erro)
	{
		array_push($this->erro, $erro);
	}

	#validação final do cadastro
	public function validateFinalCad($arrVar)
	{
		if (count($this->getErro()) > 0) {
			$arrResponse = [
				"retorno" => "erro",
				"erros" => $this->getErro()
			];
		} else {
			$arrResponse=[
				"retorno"=>"success",
				"erros"=>null
			];
			$this->cadastro->insertCad($arrVar);
		}
		return json_encode($arrResponse);
	}

	#validação das tentativas de login
	public function validateAttemptLogin()
	{
		if ($this->login->countAttempt() >= 5) {
			$this->setErro("Você realizou muitas tentativas de login inválidas. Por favor, espere 20 minutos antes de tentar novamente.");
			$this->tentativas = true;
			return false;
		} else {
			$this->tentativas = false;
			return true;
		}
	}

	#Validação final do login
	public function validateFinalLogin($email)
	{
		if (count($this->getErro()) > 0) {
			$this->login->insertAttempt();
			$arrResponse = [
				"retorno" => "erro",
				"erros" => $this->getErro(),
				"tentativas" => $this->tentativas
			];
		} else {
			$this->login->deleteAttempt();
			$this->sessions->setSessions($email);
			if (isset($_SESSION['selectPlan'])){
				$page = DIRPAGE . 'carrinho';
			}else{
				$page = DIRPAGE . 'user/';
			}
			$arrResponse = [
				"retorno" => "success",
				"page" => $page,
				"tentativas" => $this->tentativas
			];
		}

		return json_encode($arrResponse);
	}


}