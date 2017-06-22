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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('jaaren', 'JaarController', ['only' => ['index' , 'show']]);
Route::resource('specialisaties', 'SpecialisatieController', ['only' => ['index' , 'show']]);
Route::resource('specialisatievaken', 'SpecialisatievakController', ['only' => ['index' , 'show']]);
Route::resource('verplichtevakken', 'VerplichtvakController', ['only' => ['index' , 'show']]);
Route::resource('keuzevaken', 'KeuzevakController', ['only' => ['index' , 'show']]);

Route::resource('jaaren.specialisatievakken', 'JaarSpecialisatievakController', ['only' => ['index' , 'show']]);
Route::resource('specialisaties.specialisatievakken', 'SpecialisatieSpecialisatievakController', ['only' => ['index' , 'show']]);

Route::resource('jaaren.verplichtenvakken', 'JaarVerplichtvakController', ['only' => ['index' , 'show']]);

