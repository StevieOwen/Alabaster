<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Http\Request;

class Customer extends Controller
{
    function renderHome(){
         $publications = Publication::with(['user', 'image'])->latest()->get();

        return view('users/home', compact('publications'));
        
    }

    
}
