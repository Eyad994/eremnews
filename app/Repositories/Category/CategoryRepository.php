<?php

namespace App\Repositories\Category;


use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface {

    public function getAllCategories()
    {
        return Category::all();
    }
}