<?php

/* namespace Model; */

class RegisterModel
{
    /**
     * Variables for register model
     */
    private $name;
    private $cpf;
    private $email;
    private $password;

    public function getName()
    {
        return $this->name;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }
}

interface RegisterInterface {
    public function create(RegisterModel $registerModel);
}