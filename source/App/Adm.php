<?php

namespace Source\App;

use League\Plates\Engine;

class Adm
{
    private $view;

    public function __construct ()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/admin","php");
    }

    public function home()
    {
        echo "Olá, eu sou o Adm!";
        echo $this->view->render("home");
    }

}