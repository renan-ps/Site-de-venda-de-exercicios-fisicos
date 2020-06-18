<?php

namespace Classes;

use Models;

class ClassSessions{
    private $login;
    private $timeSession = 1200;
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

    }

    #Verifica a integridade da sessão
    public function verifyIdSessions(){

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

    }
}