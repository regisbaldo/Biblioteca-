<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'book_id' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
        'text' => $faker->text($maxNbChars = 200),


    ];
});
