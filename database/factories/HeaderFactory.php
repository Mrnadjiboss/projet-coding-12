<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Header;
use Faker\Generator as Faker;

$factory->define(Header::class, function (Faker $faker) {
    return [
        "img_path" => $faker -> imageurl(),
        "title" => $faker -> jobTitle() ,
        "description" => $faker ->text()
    ];
});

