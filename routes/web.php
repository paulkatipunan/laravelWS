<?php
use App\Events\NewLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(Request $request){

	$message = "Paul Adrian";

	broadcast(new NewLogin($message))->toOthers();

	return response(['success'], 200);
})->name('test');


Route::get('create/clients', 'Admin\ClientController@create');

Route::post('/save/client', 'Admin\ClientController@save');