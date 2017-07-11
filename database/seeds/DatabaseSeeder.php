<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersSeeders::class);
    	$this->call(HabitacionesSeeder::class);
    	$this->call(ReservasSeeder::class);
    }
}