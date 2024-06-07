<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/package', function () {
    return view('packages');
});

Route::get('/package',[ PostController::class,'allkebun']);

Route::get('content/{_id}', [PostController::class,'blogdetail']);
Route::get('wisata/{_id}', [PostController::class,'wisatadetail']);

Route::get('/blog', [ PostController ::class,'index']);

Route::get('/', [ PostController ::class,'home']);
Route::get('/map', [ PostController ::class,'map']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/search', [PostController::class, 'search'])->name('search');
