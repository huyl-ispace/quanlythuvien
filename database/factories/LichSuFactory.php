<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\lichSu;
use Faker\Generator as Faker;

$factory->define(lichSu::class, function (Faker $faker) {
    return [
        'ten'=>$faker->name
    ];
});
