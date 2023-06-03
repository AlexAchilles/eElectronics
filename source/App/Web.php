<?php

namespace Source\App;
use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Product;

class Web
{

    private $view;

    public function __construct(){
        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");
        
    }
    public function home()
    {
        //echo "Olá, Mundo! Home";
        echo $this->view->render("home");

    }

    public function cart()
    {
        //echo "Olá, Mundo! Sobre";
        echo $this->view->render("cart");

    }

    public function checkout()
    {
        echo $this->view->render("checkout");
    }

    public function shop (){
        echo $this->view->render("shop");
    }

    public function product (){
        echo $this->view->render("product");
    }

    public function faq (){
        $faqs = new Faq();
        echo $this->view->render("faq",[
            "faqs" => $faqs->selectAll()
        ]);
    }

        public function products (array $data) {
        $products = new Product();

        if(!empty($data["products"])){
            echo $this->view->render("products",[
                "products" => $courses->getProduct($data["products"])
            ]);
            return;
        }
        echo $this->view->render("products",["products" => $products->selectAll()]);
    }


}