<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\ProductController;

Route::get('/', function() {
    return view('pages.main-page.index');
});
Route::resource('/products', ProductController::class);

Route::get('/test', function() {
    return view('test');
});
