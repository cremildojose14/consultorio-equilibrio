<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home2');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/home2', function () { 
    return view('home');
});


Route::get('/home3', function () { 
    return view('home3');
});
Route::get('/chatbot', function () { 
    return view('chatbot');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
