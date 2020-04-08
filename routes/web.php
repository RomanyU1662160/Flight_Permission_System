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
    Route::get('/admin/userType', 'UserController@selectUserType')->name('.newUser.selectUserType');

    Route::get('/admin/newCAA', 'UserController@registerNewCAA')->name('.newUser.newCAA');

    Route::post('/admin/newCAA', 'UserController@storeNewUser')->name('.newUser.newCAA');


    Route::get('/admin/newAirliner', 'UserController@registerNewAirliner')->name('.newUser.newAirliner');

    Route::post('/admin/newAirliner', 'UserController@storeNewUser')->name('.newUser.newAirliner');


    Route::get('/admin/newAgent', 'UserController@registerNewAgent')->name('.newUser.newAgent');

    Route::post('/admin/newAgent', 'UserController@storeNewUser')->name('.newUser.newAgent');
});

Route::group(['prefix' => 'permission', 'middleware' => ['auth'], 'as' => 'permissions'], function () {
});

Route::group(['prefix' => 'request', 'middleware' => ['auth'], 'as' => 'requests'], function () {
    Route::get('/submitted', 'SubmissionController@getSubmittedRequests')->name('.submitted');
    Route::get('/new/fresh/step1', 'SubmissionController@startNewRequest')->name('.new.fresh');
    Route::get('/new/step1', 'SubmissionController@getAirlineSection_step1')->name('.new.step1');
    Route::post('/new/step1', 'SubmissionController@postAirlineSection_step1')->name('.new.step1');
    Route::get('/new/step2', 'SubmissionController@getFlightSection_step2')->name('.new.step2');
    Route::get('/new/step3', 'SubmissionController@getAircraftSection_step3')->name('.new.step3');
    Route::get('/new/step4', 'SubmissionController@getDetailsSection_step4')->name('.new.step4');
});
