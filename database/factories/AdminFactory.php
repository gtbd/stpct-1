<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
    	'account_id' => factory('App\Account')->create()->id,
    	'firstname' => $faker->firstName,
    	'middlename' => $faker->lastName,
    	'lastname' => $faker->lastName,
    	'extension_name' => $faker->suffix,
    	'date_of_birth' => '1999-01-01',
    	'address' => $faker->address,
    	'contact_number' => $faker->phoneNumber,

    ];
});