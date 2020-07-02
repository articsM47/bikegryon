<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    $phoneOption=rand(0,1);
    if($phoneOption==1){
        $phonePart1 = "+417";
        $phonePart2 = rand(60000000,99999999);
        $phone = $phonePart1 . $phonePart2;
    }else{
        $phone= null;
    }
    $emailOption= rand(0,1);
    if($emailOption==1){
        $email=$faker->freeEmail;
        $psw= $faker->password;
    }else{
        $email= null;
        $psw= null;
    }
    $birthday = $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-10years', $timezone = null);
    return [
        'name' => $faker->lastName,
        'firstname' => $faker->firstName,
        'birthDay' => $birthday->format('Y-m-d'),
        'phone1' => $phone,
        'email1' => $email,
        'psw' => $psw, //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
        'role' => "client",
        'address_id' => rand(1,20)
    ];
});
