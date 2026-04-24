<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:2000',
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        Comment::create([
            'comment' => $request->comment,
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);

        return back();
    }
}
