<?php

use Faker\Generator as Faker;
$factory->define(App\gig::class, function (Faker $faker) {
    return [
        'gigDate' => $faker->date($format= 'Y-m-d', $max = 'now'),
        'gigTime' => $faker->time('H:i'),
        'gigName' => $faker->text(8),
        'gigVenue' => $faker->randomElement(['Stroomhuis', 'Dynamo', 'Klokgbouw', 'Effenaar', 'Cafe Wilhelmina', 'Het Ketelhuis']),
        'gigColor' => $faker->randomElement(['green', 'orange', 'red']),
        'gigGenre' => $faker->randomElement(['Grunge', 'Metal', 'Noise', 'Rock', 'Instrumental', 'Drone', 'Country']),
        'gigAct1'  => $faker->name,
        'gigAct2'  => $faker->name,
        'gigAct3'  => $faker->name,
        'gigAct4'  => $faker->name,
        'gigAct5'  => $faker->name,
        'gigAct6'  => $faker->name,
        'gigAct7'  => $faker->name,
        'gigAct8'  => $faker->name,
        'gigFace'  => 'www.facebook.com',
        'gigTick'  => 'www.tickets.nl',
        'gigUser'  => $faker->randomElement(['bigdaddy', 'bagdaddy', 'bugdaddy'])
    ];
});
