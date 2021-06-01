<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'text' => $faker->text,
        'featured_image' => $faker->image,
        'user_id' => $faker->randomDigit
    ];
});