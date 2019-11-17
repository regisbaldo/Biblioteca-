<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' =>  $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phrase' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'biography' =>  $faker->text($maxNbChars = 200),
        'birthdate' =>  $faker->date($format = 'Y-m-d', $max = 'now'),
        
    ];
});
