<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'genre' => $faker->word,
        'summary' => $faker->text($maxNbChars = 200),
        'pages' => $faker->biasedNumberBetween($min = 50, $max = 1000, $function = 'sqrt'),
        'author_id' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
        'publishing_house_id' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),

    ];
});
