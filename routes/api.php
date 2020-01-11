<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 // Goat Maintenance
Route::post('/signupGoat',"GoatController@signupGoat");
Route::get('/fetchGoat/{id}',"GoatController@fetchGoatInfo");
Route::post('/submitmate',"GoatController@savemateinfo");
Route::post('/updateMate/{mid}',"GoatController@updateMateinfo");
Route::post('/savemate',"GoatController@saveMateDetails");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
