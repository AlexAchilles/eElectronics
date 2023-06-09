<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/inicio", "Web:home");
$route->get("/carrinho", "Web:cart");
$route->get("/checkout","Web:checkout");
$route->get("/produto", "web:product");
$route->get("/faq","Web:faq");
$route->get("/loja","Web:shop");
$route->get("/loja/{categoryName}","Web:shop");
// $route->get("/registro", )

$route->get("/registro","Web:register");
$route->get("/login","Web:login");



$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
