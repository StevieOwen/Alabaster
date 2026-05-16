<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request, $pub_id)
    {
        $request->validate([
            'comment_text' => 'required|string|max:1000',
        ]);

        $publication = Publication::where('pub_id', $pub_id)->firstOrFail();
        $comment_id="com_". random_int(100000,999999);

        $comment = Comment::create([
            'comment_id'=>$comment_id,
            'publication' => $pub_id,
            'commentator' => Auth::id(),
            'comment_text' => $request->comment_text,
        ]);

        $publication->increment('pub_comment_num');
        // Load the user relationship to return the name and avatar for the JS
        $comment->load('user');

        return response()->json([
            'success' => true,
            'user_name' => $comment->user->full_name,
            'user_avatar' => $comment->user->profile_picture 
                             ? asset('storage/' . $comment->user->profile_picture) 
                             : asset('storage/profiles/default-profile.jpg'),
            'comment_text' => $comment->comment_text,
            'new_comment_count' => $publication->pub_comment_num,
        ]);
    }
}
