<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;


$factory->define(Address::class, function (Faker $faker) {
    $streetType = ["Rue de", "Route de", "Chemin de", "Impasse de"];
    $streeName = $faker->streetName;
    $street = $streetType[rand(0,count($streetType)-1)] ." " . $streeName;
    return [
        'street1' => $street,
        'streetNo' => $faker->buildingNumber,
        'city_id' => rand(1,2150),
    ];
});
