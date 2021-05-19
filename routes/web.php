<?php

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


Route::get('/livros','App\Http\Controllers\LivroController@index')->name('listar_livros');
Route::get('/livros/criar','App\Http\Controllers\LivroController@create')->name('form_criar_livro');
Route::post('/livros/criar','App\Http\Controllers\LivroController@store');
Route::delete('/livros/{id}','App\Http\Controllers\LivroController@destroy');