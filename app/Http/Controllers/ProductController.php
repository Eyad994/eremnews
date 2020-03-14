<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{

    protected $product;
    protected $category;

    /**
     * ProductController constructor.
     * @param ProductRepository $product
     * @param CategoryRepository $category
     */
    public function __construct(ProductRepository $product, CategoryRepository $category)
    {
        $this->middleware('auth')->only('store', 'create');
        $this->product = $product;
        $this->category = $category;
    }

    public function show($id)
    {
        $product = $this->product->getProduct($id);

        return view('product/show', compact('product'));
    }

    public function create()
    {
        $categories = $this->category->getAllCategories();
        return view('product/create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
       $this->product->storeProduct($request);
        return redirect('/');
    }
}
