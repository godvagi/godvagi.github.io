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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('/', function () {
    return view('welcome');
});
Route::resource('welcome/price/age/sale','api\labController@index');
// Route::any('welcome','api\labController');
// Route::resource('welcome','api\labController@index');