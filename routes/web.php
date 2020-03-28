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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Flights routes */
Route::group(['prefix' => 'flights', 'middleware' => ['auth'], 'as' => 'flights'], function () {
    Route::get('/all', 'FlightController@index')->name('.all');
});

/* Flights routes */
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function () {
    Route::get('/admin/userType', 'auth\RegisterController@selectUserType')->name('.newUser.selectUserType');
    Route::get('/admin/newCAA', 'auth\RegisterController@registerNewCAA')->name('.newUser.newCAA');
    Route::get('/admin/newAirliner', 'auth\RegisterController@registerNewAirliner')->name('.newUser.newAirliner');
    Route::get('/admin/newAgent', 'auth\RegisterController@registerNewAgent')->name('.newUser.newAgent');
});
