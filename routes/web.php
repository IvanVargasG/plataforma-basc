<?php

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
    return view('welcome');
});

Route::get('/usuario', function(){
    return 'usuarioa';
});

Route::get('/usuario/{id}', function($id){
  return view('usuario', [
    "nombre" => "Vargas",
    "apellido" => "Gutierrez"
  ]);
})->where('id', '[0-9]+');

Route::get('/usuario/nuevo', function(){
    return "Crear nuevo usuario";
});


Route::get('/saludo/{name}/{apodo?}', function($name, $apodo =null){
  //Para poner la primera letra en mayuscula
  $name = ucfirst($name);


    if($apodo){
      return "Bienvenido: {$name}, tu apodo es {$apodo}";
    }else {
      return "Bienvenido: {$name}";
    }
});

Route::resource('vehiculo', 'VehiculoController');

Route::resource('conductor', 'ConductorController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('tonelaje', 'TonelajeController');

<<<<<<< HEAD
Route::resource('materiaprima', 'MateriaprimaController');

=======
>>>>>>> fadd4964ae31d235921c3578cc41362bc7e07c99
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
