<?php

use \Freshwork\ChileanBundle\Rut;

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

$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
 
    return [
        'nombre_usuario' => $faker->name,
        'rut_usuario' => Rut::set(rand(1000000, 25000000))->fix()->format(Rut::FORMAT_WITH_DASH),
        'usuario' => $faker->userName,
        'pass' => bcrypt(str_random(10)),
        'tipo' => 'recepcionista'
    ];

});
