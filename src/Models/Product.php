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


    private function orderId($user_id)
    {
        $order_id = $this->db->getValue(
            'select order_id from orders where user_id = :user_id and status_id = :status_id',
            [
                'user_id' => $user_id,
                'status_id' => 1,
            ]
        );

        if (!$order_id) {
            $order_id = $this->db->insertData(
                'insert into orders (user_id) values (:user_id)',
                [ 'user_id' => $user_id ]
            );
        }

        return $order_id;
    }


    public function addToOrder($product_id, $user_id)
    {
        $order_id = $this->orderId($user_id);

        $this->db->insertData('
            insert into product_orders (order_id, product_id, cost)
            values (
                :order_id,
                :product_id,
                (select cost from product where product_id = :product_id)
            )',
            [
                'order_id' => $order_id,
                'product_id' => $product_id
            ]
        );
    }
}

