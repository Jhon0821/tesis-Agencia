<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model



{

    protected $table ='roles';
    public function users(){
        return $this->belongsToMany('App\Models\Usuarios');
   }
    use HasFactory;

    protected $filliable  = [
        "name", 
        "decription"
        ];
}
