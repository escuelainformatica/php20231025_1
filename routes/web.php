<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SoporteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'index'])->name("login");
Route::post('/login',[LoginController::class,'indexPost']);
Route::controller(SoporteController::class)->prefix("/soporte") ->group(function () {
    Route::middleware('auth')->get('/insertar','create');  
    Route::middleware('auth')->post('/insertar','store');  
    Route::middleware('auth')->get('/','index'); 
    Route::middleware('auth')->get('/edit/{id}','edit');  
    Route::middleware('auth')->post('/edit/{id}','update');  
});