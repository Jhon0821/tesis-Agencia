<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacionmodel extends Model
{
    use HasFactory;
    protected $table="habitacion";

    protected $fillable=[
      'id',
      'tipo_habitacion'

    ];

    public function habitacion(){
      //  return $this->belongsToMany('App\Models\Pasajeromodel','pasajero_id');
      return $this->belongsTo('App\Models\Pasajeromodel','pasajero_id');
    }
    //Hacemos la relacion uno a muchos en la tabla 
    public function reservahab(){
        return $this->hasMany('App\Models\Reservamodel','id');
    }
}
