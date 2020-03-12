<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $products;

    /**
     * HomeController constructor.
     * @param ProductRepository $products
     */
    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        return $this->products->getAllProducts();
    }
}
