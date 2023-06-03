<?php

namespace Source\Models;

use Source\Core\Connect;

class Products
{
    public function selectAll ()
    {
        $query = "SELECT * FROM products";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectByCategory (string $category)
    {
        $query = "SELECT products.name, price, oldprice FROM products";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}