<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggleLike($pub_id)
    {
        $user_id = Auth::id();
        if (!$user_id) {
                return response()->json(['error' => 'Unauthenticated'], 401);
            }

            $publication = Publication::where('pub_id', $pub_id)->firstOrFail();
            $existingLike = Like::where('user_id', $user_id)
                                ->where('pub_id', $pub_id)
                                ->first();

            if ($existingLike) {
                $existingLike->delete();
                $publication->decrement('pub_like_num');
                $liked = false;
            } else {
                Like::create([
                    'user_id' => $user_id, 
                    'pub_id' => $pub_id
                ]);
                $publication->increment('pub_like_num');
                $liked = true;
            }

            return response()->json([
                'liked' => $liked,
                'new_count' => $publication->pub_like_num
            ]);
    }
}
