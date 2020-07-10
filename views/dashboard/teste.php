<?php

$numero = "1000,00";
$result = str_replace([','],'.', $numero);
echo $result;