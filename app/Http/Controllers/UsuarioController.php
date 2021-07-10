<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Usuarios;


use DB; 




class UsuarioController extends Controller
{


  public function index(){
    $user=Auth::user();
    $rol=$user->roles->implode('name',',');
    var_dump($rol);
  }
 
//public function  usuario(){
 // return view('loginU');
//}
   // public function crear(){
        //return view('HomeUsuario');
    //}

//public function ingreso(){
 // return view('principal');
//}


  public function store(Request $request){


    $datos=request()->validate([
      'txtemail'=> 'required',
      'contraseña'=>'required',
      'username'=>'required'
    ],
  [

  
     
    'txtemail.required'=> 'Ingrese Un Email Valido',
    'contraseña.required'=> 'Ingrese una contraseña',
    'username.required'=> 'Ingrese un nombre de Usuario',

   ]);


    $email = $request->input('txtemail');
    $contraseña = $request->input('contraseña');
    $username=$request->input('username');
 
    $data=array('username'=>$username,'email'=>$email,"password"=>$contraseña);
    DB::table('usuarios')->insert($data);

    return view('mensajes/registro');

    //echo "Record inserted successfully.<br/>";

     
  
  }

 //public function destroy($id){

  
 //  $usuario =Usuarios::where('id', $id)->first();
   
  // return \redirect()->route('listar');

 //}

  public function edit($email){

    $data =Usuarios::where('email',$email)->first();
    return view('editdatos', compact('data'));


  }

  public function show($username){

    $username=Usuarios::where('username', $username)->first(); 
    return \view('principal', \compact('username'));
  }
  
}
  





 
 


 

