<?php

use App\Http\Controllers\KomentarController;
use App\Http\Controllers\MenfessController;
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


Route::get('/admin', function (){
    return view('admin');
});

Route::get('/komentar', function (){
    return view('komentar');
});

Route::get('landing', [App\Http\Controllers\MenfessController::class, 'index'])->name('landing');

Route::get('/menfess' , [MenfessController::class , 'landing']);
Route::get('/menfess/{id}' , [MenfessController::class , 'show']);
Route::post('/menfess/add' , [MenfessController::class , 'store']);
// Route::post('/komentar/add', [KomentarController::class , 'store']);
Route::post('/menfess/{id}/add-comment', [KomentarController::class , 'store']);

Auth::routes();
