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