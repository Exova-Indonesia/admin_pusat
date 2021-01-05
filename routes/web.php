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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\JasaController::class, 'jasa_orders']);
Route::get('modal-jasa/{id}', [App\Http\Controllers\JasaController::class, 'modals']);
Route::get('modal-inv/{id}', [App\Http\Controllers\JasaController::class, 'modals_inv']);
Route::get('/subscriptions', function() {
    return view('/langganan');
});
Route::get('/users', function() {
    return view('/pengguna');
});