<?php

use App\Models\Imovel;
use Illuminate\Support\Facades\Route;

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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('imoveis/create', ['uses' => 'App\Http\Controllers\ImovelController@create', 'as' => 'imoveis.create']);

Route::get('home', ['uses' => 'App\Http\Controllers\ImovelController@home', 'as' => 'home']);

Route::post('imoveis/store', ['uses' => 'App\Http\Controllers\ImovelController@store', 'as' => 'imoveis.store']);


Route::get('imoveis/index', ['uses' => 'App\Http\Controllers\ImovelController@index', 'as' => 'imoveis.index']);

Route::get('imoveis/show/{id}', ['uses' => 'App\Http\Controllers\ImovelController@show', 'as' => 'imoveis.show']);
Route::get('imoveis/{id}/edit', ['uses' => 'App\Http\Controllers\ImovelController@edit', 'as' => 'imoveis.edit']);
Route::put('imoveis/update/{id}', ['uses' => 'App\Http\Controllers\ImovelController@update', 'as' => 'imoveis.update']);
Route::get('imoveis/delete/{id}', ['uses' => 'App\Http\Controllers\ImovelController@delete', 'as' => 'imoveis.delete']);
Route::get('imoveis/destroy/{id}', ['uses' => 'App\Http\Controllers\ImovelController@destroy', 'as' => 'imoveis.destroy']);


Route::post('imoveis/buscar', ['uses' => 'App\Http\Controllers\ImovelController@buscar', 'as' => 'imoveis.buscar']);

Route::get('imoveis/apartamento', ['uses' => 'App\Http\Controllers\ImovelController@mostrarApartamento', 'as' => 'imoveis.apartamento']);
Route::get('imoveis/casa', ['uses' => 'App\Http\Controllers\ImovelController@mostrarCasa', 'as' => 'imoveis.casa']);
Route::get('imoveis/kitnet', ['uses' => 'App\Http\Controllers\ImovelController@mostrarKitnet', 'as' => 'imoveis.kitnet']);

