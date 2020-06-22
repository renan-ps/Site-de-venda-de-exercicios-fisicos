<?php
namespace Classes;

use Models\ClassLogin;

class ClassPassword{

    private $db;

    public function __construct(){
        $this->db = new ClassLogin();
    }

    #Cria o hash da senha para salvar no banco de dados.
    public function passwordHash($senha){
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    #Verifica se o hash da senha está correto.
    public function verifyHash($email, $senha){
        $hashDb = $this->db->getDataUser($email);
        return 'logado';
       // return password_verify($senha, $hashDb["data"]["senha"]);
    }
}