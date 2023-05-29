<?php

namespace CoffeShop\Models;

class Product
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function dt()
    {
        return $this->db->getValue('select now()');
    }
}

