<?php

use Illuminate\Http\Request;

Route::middleware('api')->group(function() {
   Route::post('login', 'API\AuthController@issueToken');
});

Route::middleware('auth:api')->group( function () {
   Route::post('logout', 'API\AuthController@logout');
   Route::apiResources([
      // 'products' => 'API\ProductController',
      'users' => 'API\UserController',
      'addressbooks' => 'API\AddressBookController',
   ]);
});

// Route::group(['middleware' => 'role:admin'], function() {
//    Route::apiResources([
//       'users' => 'API\UserController',
//    ]);
//  });