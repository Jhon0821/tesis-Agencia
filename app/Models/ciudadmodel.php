<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudadmodel extends Model
{
    use HasFactory;


    protected $table='ciudadhotel'; 

    protected $fillable=[
    'ciudad', 
    'pais'
    ];

    public function ciudadm(){
       return  $this->belongsTo('App\Models\hotelmodel', 'ciudad_id');
    }
}
