<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
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

Route::get('/',[RecordController::class, "index"])->name("homepage");

Route::get('/insert',[RecordController::class, "insert"])->name("insert");

Route::post('/insert',[RecordController::class, "store"])->name("store");

Route::get('/delete/{id}',[RecordController::class, "delete"])->name("delete");
