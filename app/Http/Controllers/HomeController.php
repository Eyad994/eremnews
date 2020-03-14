<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected  $product;

    /**
     * Create a new controller instance.
     *
     * @param ProductRepository $product
     */
    public function __construct(ProductRepository $product)
    {
        //$this->middleware('auth');
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->product->getAllProducts();
        return view('home', compact('products'));
    }
}
