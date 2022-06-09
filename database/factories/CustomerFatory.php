<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustemerModel;
use Faker\Generator as Faker;

$factory->define(CustemerModel::class, function (Faker $faker) {
    return [
        'name_customer' =>$faker->Firstname, 
        'phone_customer' =>$faker->phoneNumber, 
        'email_customer'=> $faker->unique()->safeEmail, 
        'password_customer'=>'Doquangsan', 
        'address_customer' =>$faker->address,
    ];
});
