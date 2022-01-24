<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/', 'middleware' => ['api']], function () {
//Route::group(['prefix' => '/'], function () {
    Route::get('/persons','App\Http\Controllers\PersonController@getAllPerson');
    Route::get('/cars', 'App\Http\Controllers\CarController@getCarByStreetName');
    Route::get('/owners','App\Http\Controllers\PersonController@getOwnersByLicensePlate');
    Route::get('/houses','App\Http\Controllers\HouseController@getFullAddressAndStreetByPersonName');
});
