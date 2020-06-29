<?php

use App\Http\Middleware\ChackAdmin;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;
Route::get('/usuarios', 'UserController@show')->name('usuarios.show')->middleware('verified', ChackAdmin::class);;
Route::get('/editar/{Id}', 'UserController@editar')->name('editar')->middleware('verified');;
Route::patch('/actualizar/{Id}', 'UserController@actualizar')->name('actualizar')->middleware('verified');;
