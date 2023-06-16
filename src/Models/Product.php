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


    public function summaCart($user_id)
    {
        return $this->db->getValue('
            select sum(cost * quantity) from product_orders where
                order_id = (select order_id from orders where user_id = :user_id and status_id = :status_id)
            ',
            [
                'user_id' => $user_id,
                'status_id' => 1,
            ]
        );
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
            ) on duplicate key update quantity = quantity + 1
            ',
            [
                'order_id' => $order_id,
                'product_id' => $product_id
            ]
        );
    }


    public function inCart($user_id)
    {
        return $this->db->getList('
            select
                product_order_id,
                product_id,
                title_name,
                trait_name,
                quantity,
                product_orders.cost as cost
            from
                product_orders
                join product using (product_id)
                join title using (title_id)
                join trait using (trait_id)
            where
                order_id = (select order_id from orders where user_id = :user_id and status_id = 1)
            having
                quantity > 0
            ',
            [
                'user_id' => $user_id,
            ]
        );
    }


    public function changeQuantity($user_id, $product_id, $direct)
    {
        $order_id = $this->orderId($user_id);

        return $this->db->updateData('
            update
                product_orders
            set
                quantity = quantity + if(1 = :direct, 1, if(quantity = 0, 0, -1))
            where
                product_id = :product_id
                and
                order_id = :order_id
            ',
            [
                'direct' => $direct,
                'product_id' => $product_id,
                'order_id' => $order_id,
            ]
        );
    }


    public function changeTrait($user_id, $product_order_id, $new_product_id)
    {
        $order_id = $this->orderId($user_id);

        return $this->db->updateData('
            update
                product_orders
            set
                product_id = :new_product_id,
                cost = (select cost from product where product_id = :new_product_id)    
            where
                product_order_id = :product_order_id
                and
                order_id = :order_id
            ',
            [
                'new_product_id' => $new_product_id,
                'product_order_id' => $product_order_id,
                'order_id' => $order_id,
            ]
        );
    }


    public function getTraites($product_id)
    {
        return $this->db->getList('
            select
                product_id, trait_name as name
            from
                product
                join trait using (trait_id)
            where
                title_id = (select title_id from product where product_id = :product_id)
            ',
            [
                'product_id' => $product_id,
            ]
        );
    }
}

