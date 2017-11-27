<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Record;

$factory->define(Record::class, function (Faker\Generator $faker) {
    return [
        'original' => $faker->randomFloat(2),
        'sale'     => $faker->randomFloat(2),
        'cc'       => 'US',
        'language' => 'english',
    ];
});
