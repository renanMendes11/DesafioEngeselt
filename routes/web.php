<?php

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

Route::get('/', 'ContatoController@index', function () {
    return view('contacts');})->name('contacts');


Route::get('/cadastro', function (){ return view('cadastro'); })->name('cadastro');
Route::post('/cadastro', 'ContatoController@cadastro')->name('cadastro.store');

Route::get('/edit', function (){ return view('edit'); })->name('edit');
Route::post('/edit', 'ContatoController@edit')->name('edit.store');

Route::post('/pesquisa', 'ContatoController@pesquisa')->name('pesquisa');

Route::post('/remove' , 'ContatoController@remove')->name('remove');
Route::post('/edit', 'ContatoController@edit')->name('edit');

