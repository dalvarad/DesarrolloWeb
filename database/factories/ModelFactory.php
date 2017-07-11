<?php

use \Freshwork\ChileanBundle\Rut;
use App\User;
use App\Habitacion;


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


$factory->define(App\User::class, function (Faker\Generator $faker) {
 
    $faker = Faker\Factory::create('es_ES', 'es_PE,', 'es_VE', 'es_AR');

    return [
        'name'      => $faker->name,
        'rut'       => Rut::set(rand(1000000, 25000000))->fix()->format(Rut::FORMAT_WITH_DASH),
        'email'     => $faker->email,
        'password'  => bcrypt(str_random(10)),
        'type'      => $faker->randomElement($array = array ('recepcionista','administrador','cliente'))
    ];

});


$factory->define(App\Habitacion::class, function (Faker\Generator $faker) {
 
    return [
        'valor'                 => $faker->numberBetween($min = 5000, $max = 250000),
        'estado'                => $faker->randomElement($array = array ('ocupada','desocupada')),
        'tipo_de_habitacion'    => $faker->randomElement($array = array ('single','matrimonial','double')) 
    ];

});


$factory->define(App\Reserva::class, function (Faker\Generator $faker) {
 
    return [
        'id_us'                 => User::all()->random()->id,
        'id_ha'                 => Habitacion::all()->random()->id,
        'reserva_comienza'      => $faker->dateTimeBetween('+0 days', '+5 month'),
        'reserva_termina'       => $faker->dateTimeBetween('+0 days', '+5 month')
    ];

});