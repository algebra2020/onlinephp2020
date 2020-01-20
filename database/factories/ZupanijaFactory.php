<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Zupanija;
use Faker\Generator as Faker;

$factory->define(Zupanija::class, function (Faker $faker) {
    return [
        'naziv' => $faker->state,
    ];
});
