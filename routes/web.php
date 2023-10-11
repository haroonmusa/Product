<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
// // Route::get('/', function(){
//     return view('welcome');
//     });

Route::get('/', [ProductController::class, 'index']);

Route::get('/product/create', [ProductController::class, ' create'])->name('product.create');

Route::post('/product', [ProductController::class, 'store'])->name('store.data');

Route::get('/delete/{id}', [ProductController::class, 'delete']);

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editing');

Route::put('/update/{id}', [ProductController::class, 'update']);
