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

// -------------------------------------------------------------- //
// - User
// -------------------------------------------------------------- //
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

// -------------------------------------------------------------- //
// - Client
// -------------------------------------------------------------- //
Route::resource('clients', 'Client\ClientController', ['except' => ['create', 'edit']]);

// -------------------------------------------------------------- //
// - Order
// -------------------------------------------------------------- //
Route::resource('contacts', 'Order\OrderController', ['except' => ['create', 'edit']]);

// -------------------------------------------------------------- //
// - Team
// -------------------------------------------------------------- //
Route::resource('teams', 'Team\TeamController', ['except' => ['create', 'edit']]);

// -------------------------------------------------------------- //
// - Record
// -------------------------------------------------------------- //
Route::resource('records', 'Record\RecordController', ['only' => ['index', 'show']]);
