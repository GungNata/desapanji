<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

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
Route::get('/' , [PendudukController::class,'index']);
Route::get('/create' , [PendudukController::class,'create']);
Route::post('/simpan' , [PendudukController::class,'store']);
Route::get('/edit/{id}' , [PendudukController::class,'edit']);
Route::post('/update' , [PendudukController::class,'update']);
Route::get('/hapus/{id}' , [PendudukController::class,'destroy']);