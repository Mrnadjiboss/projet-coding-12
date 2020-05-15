<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacts;
use Faker\Generator as Faker;

$factory->define(Contacts::class, function (Faker $faker) {
    return [
        "address" => $faker ->address,
        "phone_number" => $faker ->phoneNumber, 
        "fax_number" => $faker ->phoneNumber,
        "email"=> $faker->unique()-> safeEmail  
    ];
});
