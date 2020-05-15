<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Avantages;
use Faker\Generator as Faker;

$factory->define(Avantages::class, function (Faker $faker) {
    return [
        "title" =>$faker ->realText($maxNbChars = 200, $indexSize = 2),
        
    ];
});
