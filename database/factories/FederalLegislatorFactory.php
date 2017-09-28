<?php

use Faker\Generator as Faker;

$factory->define(App\Models\FederalLegislator::class, function (Faker $faker) {
    // Generate a random 15 character string to be utilize as facebook id
    $i = 0;
    $facebook_id = mt_rand(1,9);
    do {
        $facebook_id .= mt_rand(0, 9);
    } while(++$i < 14);
    //

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'facebook_id' => $facebook_id,
        'twitter_username' => $faker->unique()->userName,
    ];
});
