<?php

include_once("../database/database.php");
use Dao\RegisterDao;
use Model\RegisterModel;

$userRegister = new RegisterDao($conn);

$name = $_POST['full-name'];
$cpf = $_POST['full-cpf'];
$email = $_POST['full-email'];
$password = $_POST['full-password'];

$modelRegister = new RegisterModel();
$modelRegister->setName($name);
$modelRegister->setCpf($cpf);
$modelRegister->setEmail($email);
$modelRegister->setPassword($password);

$userRegister->create($modelRegister);

header("Location: index.php");

echo "<h1>POST</h1>";