<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivotehabit extends Model
{
    protected $table = "pivotehabits";

    protected $fillable = ['id_us', 'id_ha' , 'hora_inicio', 'hora_termino'];

    public function cliente(){
   		return $this->belongsTo('App\Cliente');
   }

   public function usuario(){
   	return $this->belongsTo('App\Usuario');
   }

   public function Habitacion(){
   	return $this->belongsTo('App\Habitacion');
   }

   public function Cliente(){
   	return $this->belongsTo('App\Cliente');
   }
}
