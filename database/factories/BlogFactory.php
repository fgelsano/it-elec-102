<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(),
        'body' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'thumbnail' => $this->faker->image(),
        'user_id' => $this->faker->randomDigit,
    ];
});
