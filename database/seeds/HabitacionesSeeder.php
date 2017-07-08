<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Habitacion::class, 20)->create();
    }
}
