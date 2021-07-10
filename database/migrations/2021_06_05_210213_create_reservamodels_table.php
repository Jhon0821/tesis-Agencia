<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservamodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            
 $table->id();
 $table->dateTime('fecha_ingreso');
 $table->dateTime('fecha_salida');
 $table->integer('num_habitacion');
 $table->integer('num_personas');
 $table->string('pagar_reserva');

 $table->unsignedBigInteger('habitacion_id');
 $table->unsignedBigInteger('usuario_id');
 $table->unsignedBigInteger('pasajero_id');



 $table->foreign('habitacion_id')->references('id')->on('habitacion')->onDelete('cascade');
 $table->foreign('pasajero_id')->references('id')->on('pasajero')->onDelete('cascade');
 

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
        Schema::dropIfExists('reserva');
    }
}
