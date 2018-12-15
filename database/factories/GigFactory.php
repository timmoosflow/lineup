<?php

use Faker\Generator as Faker;
$factory->define(App\gig::class, function (Faker $faker) {
    return [
        'gigDate' => $faker->text(6),
        'gigTime' => $faker->text(6),
        'gigName' => $faker->text(8),
        'gigVenue' => $faker->text(6),
        'gigColor' => 'green',
        'gigGenre' => $faker->text(6),
        'gigAct1'  => $faker->text(10),
        'gigAct2'  => $faker->text(10),
        'gigAct3'  => $faker->text(10),
        'gigAct4'  => $faker->text(10),
        'gigAct5'  => $faker->text(10),
        'gigAct6'  => $faker->text(10),
        'gigAct7'  => $faker->text(10),
        'gigAct8'  => $faker->text(10),
        'gigFace'  => $faker->text(10),
        'gigTick'  => $faker->text(10),
        'gigUser'  => $faker->text(10)
    ];
});
