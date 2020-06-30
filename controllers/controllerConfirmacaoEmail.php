<?php
$email = \Traits\TraitParseUrl::parseUrl(2);
$token = \Traits\TraitParseUrl::parseUrl(3);

$confirmation = new \Models\ClassCadastro();

if($confirmation->confirmationCad($email, $token)){
  echo "
    <script>
        alert('E-mail confirmado com sucesso!');
        window.location.href='".DIRPAGE."login'
    </script>
  ";
}else{
  echo "
    <script>
        alert('Não foi possível confirmar seu e-mail!');
        window.location.href='".DIRPAGE."'
    </script>
  ";
}