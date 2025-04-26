<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $data = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment'        => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        $post->comments()->create($data);

        return redirect()
            ->route('posts.show', $postId)
            ->with('success', 'Comment added successfully!');
    }
}
