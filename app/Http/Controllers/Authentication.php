<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authentication extends Controller
{
    function renderWelcome(){
         return view('welcome');
    }

    function renderSignin(){
        return view("Auth/signin");
    }

    function renderSignup(){
        return view("Auth/signup");
    }

}
