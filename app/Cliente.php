<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['nombre_cliente','rut_cliente','hora_termino_real_cl'];

    public function pivoteHabit(){
    	return $this->hasMany('App\pivoteHabit');
    }


}
