<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
use App\Models\Pasajeromodel;
use App\Models\Reservamodel;
use App\Models\Habitacionmodel;
use App\Models\Temporadamodel;


use Illuminate\Support\Facades\Request;


class PasajeroController extends Controller
{

   
    public function reservacion(Request $request){

      

     
      
        
    }

    public function guardar(Request $request){

     

        $pasajero= new Pasajeromodel;
   
        $pasajero->primer_nombre= Request::input('primer_nombre');
        $pasajero->segundo_nombre= Request::input('segundo_nombre');
        $pasajero->primer_apellido= Request::input('primer_apellido');
        $pasajero->segundo_apelldo= Request::input('segundo_apellido');
        $pasajero->direccion=Request::input('direccion');
        $pasajero->telefono=  Request::input('telefono');
        $pasajero->save();


        $habitacion =new Habitacionmodel;
        $habitacion->tipo_habitacion= Request::input('tipo_habitacion');
        $habitacion->pasajero_id=$pasajero->id;
        $habitacion->save();


        $reserva=new Reservamodel; 
       
        $reserva->fecha_ingreso= Request::input('vuelta');
        $reserva->fecha_salida= Request::input('ida');
        $reserva->num_personas= Request::input('num_personas');
        $reserva->pasajero_id=$pasajero->id;
        $reserva->habitacion_id=$habitacion->id;
        $reserva->save();

        $temporada=new Temporadamodel;
        $temporada->precio=Request::input('precio');
        $temporada->reserva_id=$reserva->id;
        $temporada->save();

        return redirect()->back()->withSuccess('Reserva Registrada');


    
        return response()->json(['message' => 'Success']);
    }

        //return view('principal');
    

   
}
