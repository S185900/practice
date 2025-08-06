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

// Route::get('/', function () {
//     return view('welcome');
// });


// とりあえずブラウザ表示だけ
Route::view('/', 'contact');
Route::view('/confirm', 'confirm');
Route::view('/thanks', 'thanks');
Route::view('/admin', 'admin');
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');