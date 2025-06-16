<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/book',[BookController::class,'books']);
Route::post('/save',[BookController::class,'save'])->name('user.use');

route::get('/select',[BookController::class,'select'])->name('user.select');
route::get('/book{book}/edit',[BookController::class,'edit'])->name('user.edit');
route::put('/book{book}/update',[BookController::class,'update'])->name('book.update');
route::delete('/book{book}/destroy',[BookController::class,'destroy'])->name('book.destroy');
 