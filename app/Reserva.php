<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";

    protected $fillable = ['id_us', 'id_ha', 'reserva_comienza', 'reserva_termina'];


   public function users(){
   	return $this->belongsTo('App\User');
   }
 
   public function habitacion(){
   	return $this->belongsTo('App\Habitacion');
   }

}
