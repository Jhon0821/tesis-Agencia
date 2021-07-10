<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    
    return view('auth.loginU');
});



Route::get('/HomeUsuario', 'HotelController@index');

Route::post('/usersLogin', 'Auth\LoginController@login')->name('principal.login');

Route::get('/usersLogin', [App\Http\Controllers\HotelController::class, 'show'])->name('principal.show');


//Route::get('/listar', 'ListarController@index')->name('principal');

Route::get('formulario', function () {
    return view('formulario');
});


Route::post('formulario', 'UsuarioController@store')
->name('formulario.store');

Route::get('loginU', function (){
    return view('auth.loginU');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::post('/reservacion', 'PasajeroController@guardar')->name('principal.reservacion');



//Route::get('reserva/pasajero', 'PasajeroController@guardar')->name('principal.reservacion');
//En este metodo listamos los datos de la BD

Route::get('/listar', 'ListarController@index');


Route::get('/admin', function () {
    return view('admin'); 
});

Route::post('/admin', 'HomeController@index'); 

Route::get('search/hotel','buscarController@mostrar')->name('search.hotel');


Route::get('/Vistahotel', 'CiudadController@index')->name('ciudad.hotel');

Route::get('/mensajes/mensaje', function () {
    return view('mensajes/mensaje');
});


//Route::get('editdatos/edit/{email}', [App\Http\UsuarioController::class, 'edit'])->name('edit.editdatos');

Route::get('/principal', [App\Http\Controllers\HotelController::class, 'index'])->name('principal.index');

Route::get('Vistahotel/{nombre}', [App\Http\Controllers\ListarController::class, 'show'])->name('Vistahotel.show');

Route::get('editar/{fecha_ingreso}', [App\Http\Controllers\ListarController::class, 'edit'])->name('editar.edit');
Route::put('editar/{fecha_ingreso}', [App\Http\Controllers\ListarController::class, 'update'])->name('editar.update');


Route::get('/delete-reserva/{fecha_ingreso}',[App\Http\Controllers\ListarController::class, 'destroy']);
Route::post('/delete-reserva/{fecha_ingreso}',[App\Http\Controllers\ListarController::class, 'destroy'] )->name('usuario.destroy');


Route::get('/admin', [App\Http\Controllers\UsuarioController::class, 'index'])->name('home.admin');



Route::post('/principal{username}', [App\Htpp\Controllers\UsuarioController::class, 'show'])->name('usuario.show');


//Route::resource('admin', AdminController::class)->name('admin.dashboard');


//route::get('listar/pasajero', 'PasajeroController@index');


//Route::get('/principal', function(){
    //return view('principal');
//});

//Route::get('/login', function(){
   // return view('auth.login');
//});

//Route::get('/principal', function ($id){
    //return view('principal');
//});


//Route::get('/principal', function ($id) {
   // return view('principal');
//});

//Route::post('/reservacion', 'ReservacionController@reservacion')->name('principal.reservacion');


//Route::get('/principal', function ($id) {
   // return view('principal');
//});

//Route::get('/delete-reserva/{fecha_ingreso}',[App\Http\Controllers\ListarController::class, 'destroy']);
//Route::post('/delete-reserva/{fecha_ingreso}',[App\Http\Controllers\ListarController::class, 'destroy'] )->name('usuario.destroy');




//Route::post('/reservacion', 'HabitacionController@reservacion')->name('principal.reservacion');




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
