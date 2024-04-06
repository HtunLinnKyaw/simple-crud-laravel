<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/home',[ProductController::class,'show_data'] );
Route::get('/product/delete/{id}',[ProductController::class,'delete_data'] );
Route::get('/product/create',[ProductController::class,'create_data'] );
Route::post('/product/create',[ProductController::class,'store_data'] );
Route::get('/product/edit/{id}',[ProductController::class,'edit_data'] );
Route::post('/product/edit/{id}',[ProductController::class,'update_data'] );
