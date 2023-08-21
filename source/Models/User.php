<?php

namespace Source\Models;

use Source\Core\Connect;
use PDO;
use PDOException;

class User {

    private $id;
    private $name;
    private $email;
    private $password;
    private $address; // Atributo novo
    private $message;

    public function __construct (
        $name = null,
        $email = null,
        $password = null,
        // Address $address = null // Parametro novo
    ){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        // $this->address = $address; // Atribuição nova
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): mixed
    {
        return $this->password;
    }

    public function setPassword(mixed $password): void
    {
        $this->password = $password;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function insert () : bool
    {
        $query = "INSERT INTO users VALUES (NULL,:name,:email,:password)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $stmt->bindParam(":password",$this->password);
        try {
            $stmt->execute();
            if($stmt->rowCount()){
                $this->message = "Usuário cadastrado com sucesso!";
                return true;
            }
            $this->message = "Erro ao inserir usuário, verifique os dados!";
            return false;
        } catch (PDOException $e) {
            $this->message = "Erro: {$e->getMessage()}";
            return false;
        }
    }

    public function auth (string $email, string $password) : bool
    {
        $query = "SELECT * 
        FROM users 
        WHERE users_email LIKE :email";

        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if($stmt->rowCount() == 0) {
            $this->message = "Usuário não encontrado!";
            return false;
        }

        $user = $stmt->fetch();

        if(!password_verify($password, $user->password)) {
            $this->message = "Senha incorreta!";
            return false;
        }

        $this->id = $user->id;
        $this->name = $user->name;
        $this->message = "Usuário autenticado com sucesso!";
        return true;

    }

}