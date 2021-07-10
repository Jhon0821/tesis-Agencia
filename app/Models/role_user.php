<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    use HasFactory;

    protected $table ='rol_usuario';
   
    use HasFactory;

    protected $filliable  = [
        "usuario_id", 
        "role_id"
        ];
}
