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


Route::group(['middleware' => 'api'], function(){
   Route::get('contacts', 'ContactController@fatchContact');
   Route::get('contact/{id}', 'ContactController@singleContact');
   Route::post('contact/store', 'ContactController@addContact');
   Route::patch('contact/{id}', 'ContactController@updateContact');
   Route::delete('delete/{id}', 'ContactController@delete');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 
