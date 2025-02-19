<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[Home::class,'index']) ;