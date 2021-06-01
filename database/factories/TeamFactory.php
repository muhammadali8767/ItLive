<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'featured_image' => $faker->image,
    ];
});
