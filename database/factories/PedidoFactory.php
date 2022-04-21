<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use App\User;
use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    $user=User::inRandomOrder()->limit(1)->get();
    $produto=Produto::inRandomOrder()->limit(1)->get();
    return [
        //
        ['user_id'=>$user[0]->id,
        'produto_id'=>$produto[0]->id,
        'qtd'=>rand(1,10)],
    ];
});
