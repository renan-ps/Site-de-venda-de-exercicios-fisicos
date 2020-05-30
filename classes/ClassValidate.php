<?php

namespace Classes;

Use Models\ClassCadastro;

class ClassValidate{
    private $erro=[];
    private $cadastro;

    public function __construct()
    {
        $this->cadastro=new ClassCadastro();
    }

    #Valida se os campos desejados foram preenchidos.
    public function validateFields($par){
        $i=0;
        foreach ($par as $key => $value){
            if(empty($value)){
                $i++;
            }
        }

        if($i==0){
            return true;
        }else{
            $this->setErro("Preencha todos os dados!");
            return false;
        }
    }

    #Valida se o dado é um e-mail
    public function validateEmail($par){
        if (filter_var($par,FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            $this->setErro("E-mail inválido.");
            return false;
        }
    }

    #Verifica se o e-mail existe no banco de dados.
    #action = r para registrar e action = l para login
    public function validateIssetEmail($email, $action){
        $b=$this->cadastro->getIssetEmail($email);

        if($action == 'r'){
            if($b > 0){
                $this->setErro("E-mail já cadastrado.");
                return false;
            }else{
                return true;
            }
        }elseif($action == 'l'){
            if ($b > 0){
                return true;
            }else{
                $this->setErro("E-mail não cadastrado.");
                return false;
            }
        }
    }

    #Valida se o dado é uma data
    public function validateData($par){
        $data= \DateTime::createFromFormat("d/m/Y",$par);
        if(($data) && ($data->format("d/m/Y") === $par)){
            return true;
        }else{
            $this->setErro("Data inválida.");
            return false;
        }
    }

    public function getErro(){
        return $this->erro;
    }

    public function setErro($erro){
        array_push($this->erro,$erro);
    }

    #validação final do cadastro
    public function validateFinalCad($arrVar){
        $this->cadastro->insertCad($arrVar);
    }


}