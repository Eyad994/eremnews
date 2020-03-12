<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name,
        'product_price' => $faker->numberBetween(1, 30),
        'product_desc' => $faker->text,
        'category_id' => $faker->numberBetween(1, 5),
        'user_id' => $faker->numberBetween(1, 5),
    ];
});
