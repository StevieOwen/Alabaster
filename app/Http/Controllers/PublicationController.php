<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

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
        $imagePath=null;

        //storing image
        if ($request->hasFile('img')) {
            // Stores in storage/app/public/publications
            // $imagePath = $request->file('img')->store('publications', 'public');

            // 1. Configure Cloudinary
                Configuration::instance([
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                        'api_key'    => env('CLOUDINARY_API_KEY'),
                        'api_secret' => env('CLOUDINARY_API_SECRET'),
                    ],
                    'url' => ['secure' => true]
                ]);

                // 2. Upload to Cloudinary using the file's temporary path
                // We use $input['profile_picture'] directly as it's an UploadedFile object
                $upload = (new UploadApi())->upload(request()->file('profile_picture')->getRealPath(), [
                    'folder' => 'alabaster/publication',
                    'transformation' => [
                        'width' => 500, 
                        'height' => 500, 
                        'crop' => 'thumb', 
                        'gravity' => 'face' // Centers the crop on the user's face
                    ]
                ]);

                $imagePath=$upload['secure_url'];

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

    public function destroy($pub_id)
    {
        $user_id = Auth::id();
        $publication = Publication::where('pub_id', $pub_id)
                        ->where('publisher', $user_id) // Security: Only owner can delete
                        ->firstOrFail();

        // To manually delete the file from storage:
        if ($publication->image) {
            Storage::disk('public')->delete($publication->image->img);
            $publication->image->delete();
        }

        $publication->delete();

        return response()->json(['success' => true]);
    }
   
    public function update(Request $request, $pub_id)
    {
        $request->validate([
        'pub_category' => 'required|string|in:Travel,Work,Event,Personal',
        'pub_caption'  => 'required|string|max:500',
        ]);

        $publication = Publication::where('pub_id', $pub_id)
                                    ->where('publisher', auth()->id())
                                    ->firstOrFail();

        $publication->update([
            'pub_category' => $request->pub_category,
            'pub_caption' => $request->pub_caption
        ]);

        return response()->json(['success' => true]);
    }


}
