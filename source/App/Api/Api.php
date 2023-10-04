<?php

namespace Source\App\Api;

use Firebase\JWT\JWT;
use Source\Core\TokenJWT;
use Source\Models\User;

class Api
{
    /** @var \Source\Models\User|null */
    protected $user;
    protected $headers;
    protected $token;

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');

        $this->headers = getallheaders();

        if(isset($this->headers["email"], $this->headers["password"])){

            $this->user = new User();

            if(!$this->user->auth($this->headers["email"],$this->headers["password"])){
                $response = [
                    "error" => [
                        "code" => 200,
                        "type" => "unauthorized",
                        "message" => "Email e/ou senha inválidos"
                    ]
                ];
                $this->back($response,200);

                return;
            }

            $this->token = (new TokenJWT())->create([
                'idUser' => $this->user->getId(),
                'userEmail' => $this->user->getEmail(),
                'name' => $this->user->getName(),
                'userType' => 'User'
            ]);

            return;
        }

        if (isset($this->headers["token"])){
            $token = new TokenJWT();

            if(!$token->verify($this->headers["token"])){
                $response = [
                    "error" => [
                        "code" => 200,
                        "type" => "unauthorized",
                        "message" => "Token inválido"
                    ]
                ];
                $this->back($response,200);

                return;
            }

            $this->user = (new User())->findById($token->token->data->idUser);
            $this->user->setPassword(NULL);

            return;
        }

        if(!isset($this->headers["token"], $this->headers["email"], $this->headers["password"]) &&
           !isset($_REQUEST["name"],$_REQUEST["email"],$_REQUEST["password"])) {
            $response = [
                "error" => [
                    "code" => 200,
                    "type" => "invalid_data",
                    "message" => "Informe o token ou email e senha"
                ]
            ];
            $this->back($response,200);
        }
    }

    protected function back (array $response, int $code = 200) : void
    {
        http_response_code($code);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

}