<?php

#Caminhos absolutos
$pastaInterna="personal/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/') ? $barra="" : $barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}"); //Inclusão e requisição de arquivos


#Atalhos
define('DIRIMG', DIRPAGE."img/");
define('DIRCSS', DIRPAGE."lib/css/");
define('DIRJS', DIRPAGE."lib/js/");


#Acesso ao banco de dados
define('HOST', "localhost");
define('BD', "personal");
define('USER', "root");
define('PASS', "");