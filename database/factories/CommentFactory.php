<?php

use Faker\Generator as Faker;

$factory->define(App\comment::class, function (Faker $faker) {
    return [
        'commentUser' => $faker->randomElement(['Bigdaddy', 'Timmoosflow', 'Bagdaddy']),
        'commentGig' => rand(1,100),
        'commentText' => $faker->text(28)
    ];
});
