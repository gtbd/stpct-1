<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
	return [
		'email' => $faker->unique()->safeEmail,
		// 'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'account_type' => $faker->randomElement($array = array ('Admin','Student'))
        // 'remember_token' => Str::random(10),
    ];
});
