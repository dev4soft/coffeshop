<?php

namespace CoffeShop\Models;

class Product
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function listProducts()
    {
        return $this->db->getList('
            select
                product_id,
                title_name,
                category_id,
                image,
                min(cost) as cost
            from
                product
                join title using (title_id)
            group by
                title_id
            order by
                category_id, title_name
        ');
    }


    public function listCategory()
    {
        return $this->db->getList(
            'select category_id, category_name, link from category order by category_id'
        );
    }
}

