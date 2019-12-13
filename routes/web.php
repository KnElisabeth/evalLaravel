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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/showAnimals', 'AnimalController@showList')->name('showAnimals');

//le Middleware (vigile) pour protéger les accès
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/showRaces', 'RaceController@showRaces')->name('showRaces');

    //CREATE
    Route::get('/createAnimal', 'AnimalController@createAnimal')->name('createAnimal');
    Route::post('/storeAnimal', 'AnimalController@storeAnimal')->name('storeAnimal');

    Route::get('/createRace', 'RaceController@createRace')->name('createRace');
    Route::post('/storeRace', 'RaceController@storeRace')->name('storeRace');

    //UPDATE
    Route::post('/editAnimal/{id}', 'AnimalController@editAnimal')->name('editAnimal');
    Route::post('/modifyAnimal/{id}', 'AnimalController@modifyAnimal')->name('modifyAnimal');

    Route::post('/editRace/{id}', 'RaceController@editRace')->name('editRace');
    Route::post('/modifyRace/{id}', 'RaceController@modifyRace')->name('modifyRace');

    //DELETE
    Route::post('/deleteAnimal/{id}', 'AnimalController@deleteAnimal')->name('deleteAnimal');

    Route::post('/deleteRace/{id}', 'RaceController@deleteRace')->name('deleteRace');
});

