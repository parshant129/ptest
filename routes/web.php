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
use App\PasswordReset;

Route::get('/', function () {
    $d = PasswordReset::all();

echo count($d); die;
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
