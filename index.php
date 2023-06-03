<?php

// echo("olá, zé da manga!");

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/home", "Web:home");
$route->get("/cart", "Web:cart");
$route->get("/checkout","Web:checkout");
$route->get("/shop","Web:shop");
$route->get("/product", "web:product");
$route->get("/faq","Web:faq");

$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
