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

// Listar todos as comandas
//Route::get('comanda', function()
//{
 //   $comanda = Comanda::get();
  //  return View::make('comanda', compact('comanda'));
//});

Route::get('comanda', 'Comanda@index');

Route::get('/bootstrap', function () {
    return view('firstbootstrap');
});