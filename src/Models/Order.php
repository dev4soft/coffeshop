<?php

namespace CoffeShop\Models;

class Order
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function listOrders($user_id)
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
}

