<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//
//use App\Http\Controllers\DemoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::resource('demo', DemoController::class);
//Route::get('country','Country\CountryController@country');
//Route::get('country', [CountryController::class, 'country']);

Route::get('/country',"App\Http\Controllers\Country\CountryController@country");



