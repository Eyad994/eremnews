<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Politics',
            ],
            [
                'name' => 'News and Events',
            ],
            [
                'name' => 'Food and Cooking',
            ],
            [
                'name' => 'Cars',
            ],
            [
                'name' => "Animals and Nature",
            ]
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
