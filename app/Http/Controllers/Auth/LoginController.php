<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use    Illuminate\Contracts\Auth\Authenticatable;
use DB; 
use App\Models\Role;
use App\Models\Usuarios;


class LoginController extends Controller
{
  
  

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

       protected function login(Request $request)
        {

        

        $datos=request()->validate([
                //'email'=> 'required',
                //'password'=>'required'
              ],
            [

            
               
              'email.required'=> 'Ingrese Un Email Valido',
              'password.required'=> 'Ingrese una contraseña',
          
             ]);
            
    
       
           
            
                $email = $request->input("email");
                
                $password = $request->input("password");
                
                $query= DB::table("usuarios")->where([['email', '=',$email] ,['password', '=', $password]])->count();

                if($query!=0){
                    return view("principal");
                   
                    }else{
                       return \back()->withErrors(['email'=>'Datos Incorrectors']);
                    
               }
                
                   }

                   public function logout(Request $reques, Redirector $redirect){

                    Auth::logout();
  
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
  
                   return redirect()->route('loginU')->with('status',"Tu Sesion ha Caducado");
  
                  }  
              
                  }  
                       
    

