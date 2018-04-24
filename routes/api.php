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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('test','TestingController@test');

Route::post('test-laravel-medial-library','AvtarController@store');

Route::get('users/{user}',function(App\User $user){ 
	// Route Model Binding (Implicit Binding)
	// https://laravel.com/docs/5.6/routing#route-model-binding
	dd($user->toArray());
});


// https://laravel.com/docs/5.6/requests#accessing-the-request

Route::post('');