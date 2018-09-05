<?php

use Faker\Generator as Faker;

$factory->define(\App\ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => random_int(1, config('seeder.articles_count')),
        'tag_id'     => random_int(1, config('seeder.tags_count')),
    ];
});
