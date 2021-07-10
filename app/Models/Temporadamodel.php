<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporadamodel extends Model



{

   protected $table='temporada';
   protected $fillable=[
       'precio'
   ];


   public function reserva_tem(){
    return $this->hasMany('App\Models\Reservamodel', 'id'); 
  }
    use HasFactory;
}
