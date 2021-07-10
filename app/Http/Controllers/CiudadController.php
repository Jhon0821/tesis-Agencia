<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ciudadmodel; 
use DB;

class CiudadController extends Controller
{
    public function index(Request $request){



    $term =$request->get('term');
      $data= ciudadmodel::where('pais', 'LIKE', '%'  .$term. '%')->get();
       
       return view('Vistahotel')->with('data', $data);
    
        
    

       $datos=[];

        foreach($data as $item){
            $datos[]=[
                'label'=>$item->pais
            ];


        }
         
      
        return $data;
        
     }
}
