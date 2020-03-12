<?php

namespace App\Repositories\Product;


use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProduct($product_id)
    {
        return Product::where('id', $product_id)->first();
    }
}
