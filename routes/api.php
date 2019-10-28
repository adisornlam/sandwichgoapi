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
   Route::post('login', 'API\AuthController@issueToken');
});

Route::middleware('auth:api')->group( function () {
   Route::post('logout', 'API\AuthController@logout');
   Route::apiResources([
      // 'products' => 'API\ProductController',
      'users' => 'API\UserController',
   ]);
});

// Route::group(['middleware' => 'role:admin'], function() {
//    Route::apiResources([
//       'users' => 'API\UserController',
//    ]);
//  });