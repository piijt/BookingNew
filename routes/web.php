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

Route::get('/lokale', 'LokaleController@index')->name('lokale');
/*Route::get('lokale', ['before' => 'auth', function()
{
    return View::make('lokale.index');


}]);*/

/*Route::resource('lokale', 'LokaleController');
Route::resource('person', 'PersonController');
Route::resource('rekvirent', 'RekvirentController');
Route::resource('reservation', 'reservationController');*/

Route::resources([
            'lokale' => 'LokaleController',
            'reservation' => 'reservationController',
            'person' => 'PersonController',
            'rekvirent' => 'RekvirentController',
            'config' => 'ConfigController',

    ]);
