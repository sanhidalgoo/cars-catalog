<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

//Route::get('/catalog', 'App\Http\Controllers\CarController@index')->name('cars.index');
// Route::get('/catalog/create', 'CarController@create')->name('cars.create');
// Route::get('/catalog/{car}/edit', 'CarController@edit')->name('cars.edit');
// Route::patch('/catalog/{car}/edit', 'CarController@update')->name('cars.update');
// Route::post('/catalog', 'CarController@store')->name('cars.store');
// Route::get('/catalog/{car}', 'CarController@show')->name('cars.show');
// Route::delete('/catalog/{car}', 'CarController@destroy')->name('cars.destroy');

Route::resource('cars', 'App\Http\Controllers\CarController');