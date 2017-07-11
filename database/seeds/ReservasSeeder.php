<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reserva::class, 20)->create();
    }
}
