<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonials;
use Faker\Generator as Faker;

$factory->define(Testimonials::class, function (Faker $faker) {
    return [
        "text" => $faker -> text(),
        "img_path" => $faker -> imageurl(),
        "name" => $faker -> name,
        "link" => $faker -> imageurl()


    ];
});
