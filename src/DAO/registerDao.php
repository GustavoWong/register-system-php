<?php
include_once("../model/registerModel.php");
/* namespace MyDao;

use \Model\RegisterModel;
use \Model\RegisterInterface; */

class RegisterDao implements RegisterInterface
{

    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function create(RegisterModel $registerModel)
    {
        $stmt = $this->conn->prepare("INSERT INTO cadastros (nome, cpf, email, senha) VALUES (:nome, :cpf, :email, :senha)");

        $stmt->bindParam(":nome", $registerModel->getName());
        $stmt->bindParam(":cpf", $registerModel->getCpf());
        $stmt->bindParam(":email", $registerModel->getEmail());
        $stmt->bindParam(":senha", $registerModel->getPassword());

        $stmt->execute();
    }
}
