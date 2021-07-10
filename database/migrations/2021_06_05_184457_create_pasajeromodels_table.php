<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajeromodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre' ,45);
            $table->string('segundo_nombre', 45);
            $table->string('primer_apellido',45);
            $table->string('segundo_apelldo',45);
            $table->string('direccion',100);
            $table->string('telefono',45);
            $table->timestamps();
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasajero');
    }
}
