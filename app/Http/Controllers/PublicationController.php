<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    function createPublication(Request $request){
        $validated=$request->validate(
            [
                'img'=>[ 'image', 'mimes:jpg,jpeg,png', 'max:8048'],
                'pub_caption'=>['required', 'string'],
                'pub_category'=>['required', 'string', 'max:255'],
            ]
        );

         //generating publiaction id       
        $pub_id="pub_". random_int('100000',999999);

        //storing image
        if ($request->hasFile('img')) {
            // Stores in storage/app/public/publications
            $imagePath = $request->file('img')->store('publications', 'public');
        }

        //create publication
        Publication::create([
            'pub_id'       => $pub_id,
            'pub_caption'  => $validated['pub_caption'],
            'pub_category' => $validated['pub_category'],
            'publisher'    => Auth::user()->user_id, // Automatically gets the logged-in user's ID
            
        ]);

        //generating img id
        $img_id="img_". random_int(100000,999999);

        //create img
        Image::create([
            'img_id'=>$img_id,
            'img'    => $imagePath ?? null,
            'publication'=>$pub_id

        ]);

        return redirect()->back()->with('status', 'Publication posted successfully!');
    }

    


}
