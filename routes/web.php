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

/*Route::get('contact', function () {
    return 'Contactez-nous';
});*/

/*
Route::get('clients', 'ClientsController@index');

Route::get('clients/create', 'ClientsController@create');
Route::post('clients', 'ClientsController@store');

Route::get('clients/{client}', 'ClientsController@show');

Route::get('clients/{client}/edit', 'ClientsController@edit');
Route::patch('clients/{client}', 'ClientsController@update');

Route::delete('clients/{client}', 'ClientsController@destroy');
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('about', 'about')->middleware('test');

Route::resource('clients', 'ClientsController');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact','ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
