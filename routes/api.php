<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('auth/login', 'Api\\AuthController@login');
Route::get('movimentacao','Api\\MovimentacaoController@index');
Route::get('movimentacao/{movimentacao}','Api\\MovimentacaoController@show');
Route::post('movimentacao','Api\\MovimentacaoController@store');


Route::group(['middleware' => ['apiJwt']], function () {
	Route::get('users', 'Api\\UserController@index');

	Route::get('agencias','Api\\AgenciasController@index');
	Route::post('agencias','Api\\AgenciasController@store');

	Route::get('contas','Api\\ContasController@index');
	Route::post('contas','Api\\ContasController@store');


});
