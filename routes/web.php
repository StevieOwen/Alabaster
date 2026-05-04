<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;


Route::get('/', [Authentication::class,"renderWelcome"]);
Route::get('/signin',[Authentication::class,"renderSignin"]);
Route::get('signup',[Authentication::class,"renderSignup"]);