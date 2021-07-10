<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservamodel extends Model
{
    use HasFactory;
    protected $table= 'reserva';

    protected $fillable=[
        'id',
        'fecha_ingreso',
        'fecha_salida',
        'num_personas', 
     
    
      ];


    public function reserva(){
        return $this->belongsTo('App\Models\Habitacionmodel','habitacion_id');

    }

    public function pasajero_u(){
        return $this->belongsTo('App\Models\Pasajeromodel','pasajero_id');

    }

    public function ingresopaj(){
        return $this->belongsTo('App\Models\Pasajeromodel', 'pasajero_id'); 
      }


      public function temporada(){
        return $this->belongsTo('App\Models\Temporadamodel', 'reserva_id'); 
      }
}
