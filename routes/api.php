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
Route::middleware('api')->group(function() {
   // Route::post('login', 'API\AuthController@issueToken');
});

Route::group(['middleware' => 'role:admin'], function() {
   //  Route::get('/admin', function() {
   //     return 'Welcome Admin';
   //  });
   Route::apiResources([
      'users' => 'API\UserController',
   ]);
 });