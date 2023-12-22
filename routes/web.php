<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StartController;
use App\Http\Controllers\AdminController;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Admin routes
Route::get('/product', [AdminController::class, 'product']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
Route::get('/showproduct', [AdminController::class, 'showproduct']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/updateview/{id}', [AdminController::class, 'updateview']);
Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::get('/showorder', [AdminController::class, 'showorder']);
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

//home routes
Route::get('/redirect', [StartController::class, 'redirect']);
Route::get('/', [StartController::class, 'index'])->name('home.index');
Route::get('/search', [StartController::class, 'search']);
Route::post('/addcart/{id}', [StartController::class, 'addcart']);
Route::get('/showcart', [StartController::class, 'showcart'])->name('showcart');
Route::get('/deletecart/{id}', [StartController::class, 'deletecart']);
Route::post('/order', [StartController::class, 'confirmorder']);