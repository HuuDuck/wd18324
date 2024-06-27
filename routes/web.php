<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Method 
// GET , POST, PUT, PATCH, DELETE
// Base url : 
Route::get('/test', function(){
    echo 'helo';
});
Route::get('/', function () {
    echo 'trang chủ';
});
//listProduct
Route::get('list-product',[ProductController::class,'showProduct']);
// Slug 
//http://127.0.0.1:8000/get-product/1
Route::get('get-product/{id}',[ProductController::class,'getProduct']);
// Params
//http://127.0.0.1:8000/update-product?id=1&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);
// http://127.0.0.1:8000/thongtinsv
use App\Http\Controllers\DucController;

Route::get('/thongtinsv', [DucController::class, 'show']);
