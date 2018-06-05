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
/*controler auth*/

/*AuthController
*/
Route::get('/home', 'AuthController@index')->name('auth.login');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@create')->name('auth.create');
Route::post('/register', 'AuthController@store');

/*TabunganController*/
Route::get('/tabungan', 'TabunganController@create')->name('tabungan.create');
Route::post('/tabungan', 'TabunganController@store');
Route::get('/tabungan.index','TabunganController@index')->name('tabungan.index');


/*TransaksiController*/
Route::get('/transaksi','TransaksiController@create')->name('transaksi.create');


/*Dashboard*/
Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
// Route::get('/', function () {
//     return view('auth/register');
// });
