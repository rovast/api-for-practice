<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\zh_TW\Text($faker));

    return [
        'user_id' => random_int(1, config('seeder.users_count')),
        'title'   => $faker->realText(20),
        'content' => $faker->realText(1000),
        'cover'   => $faker->imageUrl(),
        'status'  => 1,
    ];
});
