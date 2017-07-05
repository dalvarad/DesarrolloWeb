<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
   protected $table = "habitaciones";

   protected $fillable = ['valor','estado','tipo_de_habitacion'];

   public function pivoteHabit(){
   		return $this->hasOne('App\PivoteHabit');
   }
}
