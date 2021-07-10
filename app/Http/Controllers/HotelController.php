<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotelmodel;
use App\Models\ciudadmodel;

use DB; 

class HotelController extends Controller
{
   public function index(Request $request){


   $texto=trim($request->get('search'));
    $datos= DB::table('ciudadhotel')
    ->select('pais','hotel.nombre', 'hotel.direccion',
    'hotel.ciudad', 'hotel.telefono')
   ->join('hotel', 'ciudadHotel.id',  'hotel.ciudad_id')
   ->where('pais', 'LIKE' , '%'. $texto.'%')
    ->get();
  return view('principal' , compact('datos', 'texto'));

    
   }

   public function show(Request $request){


      $texto=trim($request->get('search'));
     $datos= DB::table('ciudadhotel')
     ->select('pais','hotel.nombre', 'hotel.direccion',
     'hotel.ciudad', 'hotel.telefono')
    ->join('hotel', 'ciudadHotel.id',  'hotel.ciudad_id')
    ->where('pais', 'LIKE' , '%'. $texto.'%')
     ->get();
   return view('principal' , compact('datos', 'texto'));
 
     
    }


 
}
