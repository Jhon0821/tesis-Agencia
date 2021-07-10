<?php

namespace App\Models;


use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model 
{

    use HasRoles;
  
    protected $primareyKey= 'id';

    protected $table='usuarios';
    protected $fillable = [
        'username', 'email', 'password', 'tipo',
    ];
       
    protected $hidden =  [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  

}
