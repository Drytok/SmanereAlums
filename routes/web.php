<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\YearbookController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoryController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/tambah', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);
Route::get('/category/cetak', [CategoryController::class, 'cetak']);

Route::get('/yearbook', [YearbookController::class, 'index']);
Route::get('/yearbook/tambah', [YearbookController::class, 'create']);
Route::post('/yearbook/store', [YearbookController::class, 'store']);
Route::get('/yearbook/edit/{id}', [YearbookController::class, 'edit']);
Route::put('/yearbook/update/{id}', [YearbookController::class, 'update']);
Route::get('/yearbook/hapus/{id}', [YearbookController::class, 'delete']);
Route::get('/yearbook/destroy/{id}', [YearbookController::class, 'destroy']);

