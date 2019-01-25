<?php

use Illuminate\Http\Request;
use App\Events\NewLogin;

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


Route::post('/client', function (Request $request) {

	$token = $request->token;

	broadcast(new NewLogin($request->all(), $token))->toOthers();

	return response(['success'], 200);

});
