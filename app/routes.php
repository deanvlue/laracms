<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){
  //return View::make('hello');
  return "Inicial";
  //return Redirect::to('/tiendas');
});

Route::get('cafes/', function(){
  //return View::make('hello');
  return "Cafes despliega";
});

Route::get('cafes/{id}', function($id){
  //return View::make('hello');
  return "Cafes despliega #$id";
})->where('id', '[0-9]+');

Route::get('bebidas/', function(){
  //return View::make('hello');
  return "Bebidas despliega";
});

Route::get('alimentos/', function(){
  //return View::make('hello');
  return "Alimentos despliega";
});

Route::get('tiendas/', function(){
  //return View::make('hello');
  return "tiendas despliega";
});

Route::get('xml/tiendas.xml', function(){
  //return View::make('hello');
  return "Este es un XML de tiendas";
});

Route::get('about/', function(){
  //return View::make('hello');
  //return "Este es un XML de tiendas";
  return View::make('about')->with('number_of_cats',9000);
});
