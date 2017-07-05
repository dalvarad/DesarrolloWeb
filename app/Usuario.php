<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = "usuarios";

    protected $fillable = ['nombre_usuario', 'rut_usuario' , 'usuario', 'pass', 'tipo'];

    protected $hidden = ['pass'];

    public function pivotehabit(){
   		return $this->hasOne('App\PivoteHabit');
   }
}
