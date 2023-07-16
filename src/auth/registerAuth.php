<?php

include_once("../database/database.php");
include_once("../DAO/registerDao.php");
//use MyDao\RegisterDao;
//use Model\RegisterModel;

$userRegister = new RegisterDao($conn);

$name = $_POST['full-name'];
$cpf = $_POST['full-cpf'];
$email = $_POST['full-email'];
$password = password_hash($_POST['full-password'], PASSWORD_DEFAULT);

$modelRegister = new RegisterModel();
$modelRegister->setName($name);
$modelRegister->setCpf($cpf);
$modelRegister->setEmail($email);
$modelRegister->setPassword($password);

$userRegister->create($modelRegister);

header("Location: ../../index.php");