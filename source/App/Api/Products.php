<?php

namespace Source\App\Api;

use Source\Models\Course;
use Source\Models\Product;

class Courses extends Api
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }

    public function listByCategory (array $data) : void
    {
        $courses = (new Product())->selectByCategory($data["category_id"]);
        $this->back($courses,200);
    }

    public function listCourses (array $data) : void
    {
        $courses = (new Product())->selectAll();
        $this->back($courses,200);
    }

}