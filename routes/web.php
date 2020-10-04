<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
$url = "App\Http\Controllers";

Route::get('/', function () {
    return view('home');
});

Route::get("product/{product:product_slug}", $url. "\productController@show");
Route::get("product/{product:product_slug}/edit", $url. "\productController@edit");
Route::get("products", $url. "\productController@index");
Route::get('products/edit/{slug}', $url . '\productController@edit');
Route::resource('products', ProductController::class);