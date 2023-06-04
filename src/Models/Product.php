<?php

namespace CoffeShop\Models;

class Product
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function listCategory()
    {
        return $this->db->getList(
            'select category_id, category_name, link from category order by category_id'
        );
    }
}

