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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'doau\publicController@index')->name('index');

// Route::get('/register', 'doau\publicController@register')->name('index');

Auth::routes();
Route::get('/login', function () {
        return redirect('/');
})->name('login');

Route::get('/register', function () {
        return redirect('/');
})->name('register');

Route::get('/home', 'doau\adminHomeController@index')->name('home')->middleware('auth');
Route::get('/productos', 'doau\adminProductController@index')->name('productos')->middleware('auth');
Route::get('/completar-perfil', 'doau\adminComplitPerfilController@index')->name('complitPerfil')->middleware('auth');
Route::get('/productos/crear', 'doau\adminProductController@createProduct')->name('createProduct')->middleware('auth');
// Route::get('/home', 'HomeController@index')->name('home');
