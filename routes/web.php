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
    return view('login');
});

Route::get('/block',function(){
    return view('block');
});

Route::get('/register','AuthController@getRegister')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest')->name('register');
Route::get('/login','AuthController@getLogin')->middleware('guest');
Route::post('/login','AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/home','HomeController@index')->middleware('auth')->name('home');
// User
Route::get('/user','UserController@index')->middleware('auth');
Route::post('/user/addUser','UserController@addUser');
Route::post('/user/update','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');
// Calon
Route::get('/calon','CalonController@index')->middleware('auth');
Route::post('/calon/addCalon','CalonController@addCalon');
Route::post('/calon/update','CalonController@update');
Route::get('/calon/delete/{id}','CalonController@delete');
// Pemilih
Route::get('/home_pemilih','PemilihController@home')->middleware('auth')->name('home_pemilih');
Route::get('/pemilih','PemilihController@index')->middleware('auth');
Route::get('/pilih/{id}','PemilihController@pilih');
// history
Route::get('/history','HistoryController@index')->middleware('auth');
Route::get('/history/deleteAll','HistoryController@deleteAll');
// Monitoring
Route::get('/monitoring','MonitorController@index')->middleware('auth')->name('monitoring');
