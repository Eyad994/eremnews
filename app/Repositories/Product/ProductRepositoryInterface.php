<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function getAllProducts();

    public function getProduct($product_id);
}
