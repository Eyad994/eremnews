<?php

namespace App\Repositories\Product;


use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAllProducts()
    {
        return Product::paginate(6);
    }

    public function getProduct($product_id)
    {
        return Product::findOrFail($product_id);
    }

    public function storeProduct($request)
    {
        $imageName = time().'.'.$request->product_image->extension();

        $request->product_image->move(public_path('images'), $imageName);

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $imageName,
            'category_id' => $request->category,
            'user_id' => auth()->id()
        ]);

        return response()->json($product);
    }
}
