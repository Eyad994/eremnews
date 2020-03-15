<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'product_price' => $faker->numberBetween(1, 30),
        'product_desc' => $faker->text,
        'product_image' => $faker->randomElement($array = array ('1','2','3', '4', '5', '6', '7', '8', '9', '10')).'.jpg',
        'category_id' => $faker->numberBetween(1, 5),
        'product_image' => 'photo1.jpg',
        'user_id' => $faker->numberBetween(1, 5),
    ];
});
