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

// Route::get('/',"HomeController@Home");
// Route::get('/register',"AuthController@Form");
// Route::post('/welcome',"AuthController@Index");

Route::get('/template',function(){
    return view("adminLte.template");
});
Route::get('/',"TableController@Index");
Route::get('/data-table',"TableController@DataTable");
