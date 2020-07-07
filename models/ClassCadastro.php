<?php

namespace Models;

class ClassCadastro extends ClassCrud
{

  #Realiza a inserção no banco de dados
  public function insertCad($arrVar)
  {
    $this->insertDB(
      "users",
      "?,?,?,?,?,?,?,?,?,?",
      array(
        0,
        $arrVar['nome'],
        $arrVar['email'],
        $arrVar['hashSenha'],
        $arrVar['dataNascimento'],
        $arrVar['telefone'],
        $arrVar['endereco'],
				date("Y-m-d"),
        'user',
        'confirmation'
      )
    );

    $this->insertDB(
      "confirmation",
      "?, ?, ?",
      array(
        0,
        $arrVar['email'],
        $arrVar['token']
      )
    );
  }

  #Verifica no banco se o e-mail está cadastrado.
  public function getIssetEmail($email)
  {
    $b = $this->selectDB(
      "*",
      "users",
      "where email = ?",
      array(
        $email
      )
    );

    return $r = $b->rowCount();
  }

  #verifica a o token de confirmação de e-mail
  public function confirmationCad($email, $token)
  {
    $b = $this->selectDB(
      "*",
      "confirmation",
      "where email=? and token=?",
      array(
        $email,
        $token
      )
    );

    $r = $b->rowCount();

    if ($r > 0) {
      $this->deleteDB(
        "confirmation",
        "email=?",
        array($email)
      );

      $this->updateDB(
        "user",
        "status=?",
        "email=?",
        array(
          'active',
          $email
        )
      );

      return true;
    }else{
      return false;
    }
  }
}