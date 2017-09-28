<?php

use Faker\Generator as Faker;
use App\Models\FederalLegislator;


$factory->define(App\Models\SocialPost::class, function (Faker $faker)  {
    // Pick 10 records from Federal Legistrators table.
    $owner_ids = FederalLegislator::all()->take(10)->pluck('id')->toArray();

    // FOR THE PURPOSE OF SIMULATING A REAL POST
    // Types of social media posts.
    $types = array('link', 'status', 'photo', 'video');
    // Sources of social media outlets
    $sources = array('facebook', 'twitter');
    // Get a random source for our post
    $source = $sources[array_rand($sources)];
    // Define the url link based on the source
    if ( $source == "facebook" ) {
        $link = "http://facebook.com/";
    } else if ( $source == "twitter" ) {
        $link = "http://twitter.com/";
    }
    // Generate a postid and append to the source url
    // $post_id = substr(str_shuffle(str_repeat("0123456789", 15)), 0, 15);
    $post_id = $faker->unique()->randomNumber(9);
    $link = $link . $post_id;

    return [
        'owner_id' => $owner_ids[array_rand($owner_ids)],
        'reference_table' => 'federal_legislators',
        'source' => $source,
        'post_id' => $post_id,
        'type' => $types[array_rand($types)],
        'link' => $link,
        'caption' => $faker->realText(200),
        'created_time' => $faker->dateTimeThisMOnth($max = 'now'),
    ];
});
