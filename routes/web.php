<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'dashboard'], function () {
    Route::get('/{user}', 'DashboardController@index')->name('.index');
    Route::get('/{user}/details', 'DashboardController@getMyDetails')->name('.myDetails');
    Route::get('/companySubmissions/{user}', 'DashboardController@getCompanySubmissions')->name('.companySubmissions');
    Route::get('/userSubmissions/{user}', 'DashboardController@getUserSubmissions')->name('.userSubmissions');
    Route::get('/companyPermissions/{user}', 'DashboardController@getCompanyPermissions')->name('.companyPermissions');
    Route::get('/track/permission', 'DashboardController@getTrackPermissions')->name('.trackPermission');
    Route::get('/report/custom', 'DashboardController@getCreateReport')->name('.report.custom');
    Route::post('/report/custom', 'DashboardController@getReportResults')->name('.report.custom');
});

/* Flights routes */
Route::group(['prefix' => 'flights', 'middleware' => ['auth'], 'as' => 'flights'], function () {
    Route::get('/all', 'FlightController@index')->name('.all');
    Route::get('/show/{flight}', 'FlightController@show')->name('.show');
    Route::get('/approve/{flight}', 'FlightController@approve')->name('.approve');
    Route::get('/reject/{flight}', 'FlightController@reject')->name('.reject');
    Route::get('/pend/{flight}', 'FlightController@pend')->name('.pend');
    Route::get('/underReview/{flight}', 'FlightController@underReview')->name('.underReview');
});

/* Flights routes */
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function () {
    Route::get('/admin/userType', 'UserController@selectUserType')->name('.newUser.selectUserType');
    Route::get('/admin/newCAA', 'UserController@registerNewCAA')->name('.newUser.newCAA');
    Route::post('/admin/newCAA', 'UserController@storeNewUser')->name('.newUser.newCAA');
    Route::get('/admin/newAirliner', 'UserController@registerNewAirliner')->name('.newUser.newAirliner');
    Route::post('/admin/newAirliner', 'UserController@storeNewUser')->name('.newUser.newAirliner');
    Route::get('/admin/new/agentOfficer', 'UserController@registerNewAgent')->name('.newUser.newAgent');
    Route::post('/admin/new/agentOfficer', 'UserController@storeNewUser')->name('.newUser.newAgent');
    Route::get('/admin/dashboard/{user}', 'AdminController@getAdminDashboard')->name('.dashboard');
    Route::get('/admin/allusers', 'AdminController@getAllUsers')->name('.allUsers');
    Route::get('/admin/add/newAirline', 'AdminController@getAddNewAirline')->name('.new.airline');
    Route::post('/admin/add/newAirline', 'AdminController@postAddNewAirline')->name('.new.airline');
    Route::post('/admin/updateRole/{user}', 'AdminController@updateRoles')->name('.updateRole');
    Route::get('/admin/newAgent', 'AdminController@getAddNewAgent')->name('.newAgent');
    Route::post('/admin/newAgent', 'AdminController@storeNewAgent');
    Route::get('/dashboard/newUser', 'AdminController@getAddNewUser')->name('.dashboard.newUser');
    Route::get('/dashboard/newCAA', 'AdminController@registerNewCAA')->name('.dash.newUser.CAA');
    Route::get('/dashboard/newAirliner', 'AdminController@registerNewAirliner')->name('.dash.newUser.Airliner');
    Route::get('/dashboard/new/agentOfficer', 'AdminController@registerNewAgent')->name('.dash.newUser.Agent');
});


Route::group(['prefix' => 'permission', 'middleware' => ['auth'], 'as' => 'permissions'], function () {
    Route::get('/{permission}', 'PermissionController@show')->name('.show');
    Route::post('/search', 'PermissionController@search')->name('.search');
});


Route::group(['prefix' => 'amendment', 'middleware' => ['auth'], 'as' => 'amendments'], function () {
    Route::get('/add/{flight}', 'AmendmentController@create')->name('.add');
    Route::post('/add/{flight}', 'AmendmentController@store')->name('.add');
});


Route::group(['prefix' => 'submission', 'middleware' => ['auth'], 'as' => 'requests'], function () {
    Route::get('/all', 'SubmissionController@index')->name('.all');
    Route::get('/{submission}', 'SubmissionController@show')->name('.show');
    Route::get('/submitted', 'SubmissionController@getSubmittedRequests')->name('.submitted');
    Route::get('/new/fresh/step1', 'SubmissionController@startNewRequest')->name('.new.fresh');
    Route::get('/new/step1', 'SubmissionController@getAirlineSection_step1')->name('.new.step1');
    Route::post('/new/step1', 'SubmissionController@postAirlineSection_step1')->name('.new.step1');
    Route::get('/new/step2', 'SubmissionController@getFlightSection_step2')->name('.new.step2');
    Route::get('/new/step3', 'SubmissionController@getAircraftSection_step3')->name('.new.step3');
    Route::get('/new/step4', 'SubmissionController@getDetailsSection_step4')->name('.new.step4');
    Route::post('/search', 'SubmissionController@search')->name('.search');
});
