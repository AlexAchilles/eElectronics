<?php

namespace Source\Models;

use Source\Core\Connect;

class Product
{
    public function selectAll ()
    {
        $query = "SELECT * FROM products";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectByCategory (string $categoryName)
    {
        $query = "SELECT products.* 
        from products 
        join categories on categories.id = products.categories_id 
        where categories.nome like '{$categoryName}'";

        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}
