<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', [Authentication::class,"renderWelcome"]);
Route::get('/signin',[Authentication::class,"renderSignin"]);
Route::get('/signup',[Authentication::class,"renderSignup"]);
Route::get('/forgotPassword',[Authentication::class,"renderforgotPassword"]);
Route::get('/resetPassword',[Authentication::class,"renderresetPassword"]);
Route::get('/emailValidation',[Authentication::class,"renderEmailvalidation"])->middleware('auth')->name('verification.notice');
Route::get('home',[Customer::class,"renderHome"])->middleware(['auth', 'verified'])->name('home');

Route::get('/email/status', function () {
    $user = Auth::user();
    return response()->json([
        // If the timestamp exists, they are verified
        'verified' => !is_null($user->email_verified_at) 
    ]);
})->middleware('auth');

