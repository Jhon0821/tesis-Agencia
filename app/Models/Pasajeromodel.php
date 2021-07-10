<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasajeromodel extends Model
{

  protected $table='pasajero';

  protected $fillable=[
    'id',
    'primer_nombre',
    'segundo_apelldo',
    'direccion', 
    'telefono',

  ];
  

    public function pasajero(){
        return $this->belongsTo('App\Models\Habitacionmodel', 'id');
        var_dum($item);
   
      }
      public function pasajero_u(){
        return $this->hasMany('App\Models\Reservamodel','id');

    }

    public function ingresopaj(){
      return $this->hasMany('App\Models\Reservamodel'); 
    }
  
    use HasFactory;
}
