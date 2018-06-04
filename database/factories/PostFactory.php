<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'author'=>$faker->name,
        'title'=>$faker->sentence,
        'content'=>$faker->text,
        'post_date'=>$faker->dateTime
    ];
});
