<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\zh_TW\Text($faker));

    return [
        'user_id'     => random_int(1, config('seeder.users_count')),
        'category_id' => random_int(1, config('seeder.categories_count')),
        'title'       => $faker->realText(20),
        'content'     => $faker->realText(1000),
        'cover'       => $faker->imageUrl(),
        'stars'       => random_int(0, 1000),
        'views'       => random_int(0, 1000),
        'status'      => 1,
    ];
});
