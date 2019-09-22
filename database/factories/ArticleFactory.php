<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->text(50),//text of 50 chars
        'body'=> $faker->text(200)
    ];
});
