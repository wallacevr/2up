<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        //
        ['descricao'=> 'Tinta Cor: '. $faker->safeColorName,
         'valor'=> rand(20,150)],

    ];
});
