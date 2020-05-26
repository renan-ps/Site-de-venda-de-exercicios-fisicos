<?php

namespace Classes;

class ClassValidate{
    private $erro=[];

    //Validar se os campos desejados foram preenchidos.
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

    public function getErro(): array{
        return $this->erro;
    }

    public function setErro($erro){
        array_push($this->erro,$erro);
    }
}