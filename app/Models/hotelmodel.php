<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ciudadmodel;

class hotelmodel extends Model
{

    use HasFactory;
   protected $table='hotel'; 

    protected $fillable=[
    'id',
    'nombre',
    'direccion',
    'ciudad',
    'telefono'

    ];
    
    public function hotelm(){
       return  $this->hasMany('App\Models\ciudadmodel');
    }
   
}
