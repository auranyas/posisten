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
    return view('landing');
});

Route::get('homes', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menfess/create', 'MenfessController@create')->name('menfess.create');
Route::post('/menfess/store', 'MenfessController@store')->name('menfess.store');

Route::get('/menfesses', 'MenfessController@index')->name('menfesses');
Route::get('/menfess/show/{id}', 'MenfessController@show')->name('menfess.show');
Auth::routes();
