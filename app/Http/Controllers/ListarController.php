<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Reservamodel;
use App\Models\Usuarios;
use App\Models\Habitacionmodel;
use App\Models\Pasajeromodel;
use App\Models\hotelmodel;
class ListarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data= DB::table('pasajero')
        ->select('pasajero.primer_nombre', 'pasajero.segundo_apelldo','pasajero.direccion', 'pasajero.telefono',
        'reserva.fecha_ingreso', 'reserva.fecha_salida', 'reserva.num_habitacion', 'reserva.num_personas', 'habitacion.tipo_habitacion', 'temporada.precio')
       ->join('reserva', 'pasajero.id', 'reserva.pasajero_id')
       ->join('habitacion', 'pasajero.id', 'habitacion.pasajero_id')
       ->join('temporada', 'reserva.id', 'temporada.reserva_id')
        ->get();
      return view('listar' , compact('data'));
    
    }


  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $nombre)
    {
       
        $data =hotelmodel::where('nombre',$nombre)->first();
        return view('Vistahotel', compact('data'));
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fecha_ingreso)

    {
       
        $fecha_ingreso=Reservamodel::where('fecha_ingreso',$fecha_ingreso)->first();
        return \view('editar', \compact('fecha_ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fecha_ingreso)
    {

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fecha_ingreso) //se eliminar la tabla de la reserva del usuario
    {

    //$registros=Reservamodel::where('habitacion_id', $fecha_ingreso)->get()->toArray();
    //$eliminar=Reservamodel::destroy($registros);
    //DB::table('reserva')->where('fecha_ingreso',$fecha_ingreso)->delete();

    DB::table('reserva')->where('fecha_ingreso',$fecha_ingreso)->delete();
    return \redirect('listar');
   
    }
}
