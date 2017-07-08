<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['nombre_cliente','rut_cliente','direccion', 'telefono', 'usuario', 'pass'];

    protected $hidden = [
        'pass', 'remember_token',
    ];    


    public function reserva(){
     return $this->hasMany('App\Reserva');
    }
}
