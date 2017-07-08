<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cliente::class, 20)->create();
    }
}
