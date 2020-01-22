<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mjesto;
use Faker\Generator as Faker;

$factory->define(Mjesto::class, function (Faker $faker) {
    return [
        'pbr' => $faker->unique()->numberBetween(10000, 59999),
        'naziv'=>$faker->unique()->city(),
        // 'zupanija_id'=>$faker->numberBetween(1, 21),
        //jednostavniji ali ne i najbolji pristup
        //TODO dohvati stvarne id od zupanija
        'zupanija_id'=>App\Zupanija::all()->random(1)[0]->id,
    ];
});
