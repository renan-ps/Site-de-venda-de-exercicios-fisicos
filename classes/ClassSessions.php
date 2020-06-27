<?php

namespace Classes;

use Models;
use Traits\TraitGetIp;

class ClassSessions{
  private $login;
  private $timeSession = 1200; //20 minutos
  private $timeCanary = 300;

  public function __construct(){
    if(session_id() == ''){
      ini_set("session.save_handler","files");
      ini_set("session.use_cookies",1); //Habilita o uso de cookies
      ini_set("session.use_only_cookies",1); //Só valida as sessões atraves dos cookies
      ini_set("session.cookie_domain", DOMAIN); //Só vai aceitar cookies vindo do domínio do site
      ini_set("session.cookie_httponly",1); //Só aceita protocolo http
      if(DOMAIN != "localhost"){
        ini_set("session.cookie_secure",1);
      } //Caso não esteja no localhost, os cookies terão ssl

      //Criptografia das sessions
      ini_set("session.entropy_length",512); //entropia
      ini_set("session.entropy_file",'/dev/urandom'); //arquivo de entropia
      ini_set("session.hash_function",'sha256');
      ini_set("session.hash_bits_per_character",5);
      session_start();
    }
    $this->login = new Models\ClassLogin();
  }

	#Protege contra roubo de sessão
	public function setSessionCanary($par = null){
		session_regenerate_id(true);
		if($par == null){
			$_SESSION['canary'] = [
				"birth" => time(),
				"IP" => TraitGetIp::getUserIp()
			];
		}else{
			$_SESSION['canary']['birth'] = time();
		}
	}

	#Verifica a integridade da sessão
	public function verifyIdSessions(){
    if(!isset($_SESSION['canary'])){
    	$this->setSessionCanary();
    }

    if($_SESSION['canary']['IP'] !== TraitGetIp::getUserIp()){
    	$this->destructSessions();
    	$this->setSessionCanary();
    }

    if($_SESSION['canary']['birth'] < time() - $this->timeCanary){
    	$this->setSessionCanary("time");
    }

	}

  #Define as sessões do sistema
  public function setSessions($email){
    $this->verifyIdSessions();
    $_SESSION['login'] = true;
    $_SESSION['time'] = time();
    $_SESSION['name'] = $this->login->getDataUser($email)['data']['nome'];
    $_SESSION['email'] = $this->login->getDataUser($email)['data']['email'];
    $_SESSION['permition'] = $this->login->getDataUser($email)['data']['permissoes'];
  }

  #Valida as páginas internas do sistema
  public function verifyInsideSession(){
	  $this->verifyIdSessions();
		if(!isset($_SESSION['login']) || !isset($_SESSION['permition']) || !isset($_SESSION['canary'])){
			$this->destructSessions();
			echo "
				<script>
					window.location.href = '". DIRPAGE ."login';
				</script>
			";
		}else{
			if($_SESSION['time'] >= time() - $this->timeSession){
				$_SESSION['time'] = time();
			}else{
				$this->destructSessions();
				echo "
				<script>
					alert('Sua sessão expirou. Faça login novamente.');
					window.location.href = '". DIRPAGE ."login';
				</script>
			";
			}
		}
  }

  #Destróia as sessions existentes
	public function destructSessions(){
		foreach(array_keys($_SESSION) as $key){
			unset($_SESSION[$key]);
		}
	}
}