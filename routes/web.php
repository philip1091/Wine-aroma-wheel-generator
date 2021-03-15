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

// Route::get('/', function () {
//     return view('generator');
// });



Route::get('/','GeneratorController@select');


Route::get('red/create','RedWineController@create');

Route::post('red','RedWineController@store');



Route::get('white/create','WhiteWineController@create');

Route::post('white','WhiteWineController@store');

Route::get('/','GeneratorController@index');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
