<?php
//$ php artisan db:seed --class=NastavnikSeeder
//  Database seeding completed successfully.
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nastavnik;
use Faker\Generator as Faker;

$factory->define(Nastavnik::class, function (Faker $faker) {
    return [
        'ime' => $faker->firstName,
        'prezime' => $faker->lastName,
        'pbrstan' => App\Mjesto::all()->random(1)->first()->pbr,
        'orgjed_id'=>1, //TODO spoji sa pravom orgjed  -> App\Orgjed::all()->random(1)->first()->id,
        'koef'=> $faker->numberBetween(100, 999)/100,
    ];
});
