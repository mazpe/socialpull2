<?php

use Faker\Generator as Faker;

$factory->define(App\Models\FederalLegislator::class, function (Faker $faker) {
    // if a larger random number is required (32 bit limitation)
    // $facebook_id = substr(str_shuffle(str_repeat("0123456789", 15)), 0, 15);

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'facebook_id' => $faker->unique()->randomNumber(9),
        'twitter_username' => $faker->unique()->userName,
    ];
});
