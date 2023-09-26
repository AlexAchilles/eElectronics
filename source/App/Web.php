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
        echo $this->view->render("home");

    }

    public function cart()
    {
        echo $this->view->render("cart");

    }

    public function checkout()
    {
        echo $this->view->render("checkout");
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


    public function apiLogin (): void
    {
        echo $this->view->render("api-login",[]);
    }

    public function apiFaq (array $data)
    {
        echo $this->view->render("api-faqs",[]);
    }

    //     public function products (array $data) {
    //     $products = new Product();

    //     if(!empty($data["products"])){
    //         echo $this->view->render("products",[
    //             "products" => $courses->getProduct($data["products"])
    //         ]);
    //         return;
    //     }
        
    //     echo $this->view->render("products",[
    //     "products" => $products->selectAll(),
    //     "categories" => $this->categories
    // ]);
    // }
    
    public function shop (array $data){
        $products = new Product();

        if(!empty($data["categoryName"])){
            echo $this->view->render("shop", [
                "products" => $products->selectByCategory($data["categoryName"])
            ]);
            return;
        } 
        
        echo $this->view->render("shop", [
            "products" => $products->selectAll()
        ]);
    }

    public function register(array $data)
    {
        if(!empty($data)){
            $response = json_encode($data);
            echo $response;
            return;
        }

        echo $this->view->render("register-clean",[
            // "categories" => $this->categories
        ]);
    }

    public function login (array $data) : void {
        echo $this->view->render("user-auth", []);
    }
}