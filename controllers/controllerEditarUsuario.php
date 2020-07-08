<?php
if(!isset($_POST)){
	header('Location: ' . DIRPAGE);
}
use Models\ClassManager;
$manager = new ClassManager();

$manager->editUser($_POST['idUser'], $_POST['plan']);

header('Location: ' . DIRPAGE . 'dashboard/users');