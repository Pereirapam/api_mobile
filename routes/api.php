<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('users', function() {
// 	return 'Funcionando!!!';
// });

Route::get('users',['UsersController@index']);


// Route::get('users', [UsersController::class, 'indexs']);

// Route::get('users', function() {
// 	return Users::all();
// });
