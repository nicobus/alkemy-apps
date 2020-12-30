<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App;
use Faker\Generator as Faker;

$factory->define(AppClass::class, function (Faker $faker) {
    return [
        "category_id" => $faker->numberBetween(1, 8),
        "developer_id" => $faker->numberBetween(1, 2),
        "name" => $faker->word(),
        "image_path" => rand(1, 1000),
    ];
});
