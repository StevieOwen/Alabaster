<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  

class Customer extends Controller
{
    function renderHome(){
        $user_id = Auth::id();

        $publications = Publication::with(['user', 'image'])->latest()->get();

        $myActivities = Publication::where('publisher', $user_id) 
                    ->with(['image', 'user'])
                    ->latest()
                    ->get();

        return view('users/home', compact('publications','myActivities'));
        
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->user_id . ',user_id',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            // Delete old photo if it exists
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $path = $request->file('profile_picture')->store('profiles', 'public');
            $user->profile_picture = $path;
        }

        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->save();

        return back()->with('status', 'Profile updated successfully!');
    }

    
}
