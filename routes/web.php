<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('contact', function () {
    return 'Contactez-nous';
});*/

Route::view('about', 'about');

Route::view('contact', 'contact');

/*
Route::get('clients', 'ClientsController@index');
Route::get('clients/create', 'ClientsController@create');
Route::post('clients', 'ClientsController@store');
Route::get('clients/{client}', 'ClientsController@show');
Route::get('clients/{client}/edit', 'ClientsController@edit');
Route::patch('clients/{client}', 'ClientsController@update');
Route::delete('clients/{client}', 'ClientsController@destroy');
*/

Route::resource('clients', 'ClientsController');

