<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::with('author')
                 ->latest()
                 ->paginate(10);

    return view('index', compact('posts'));
}

   public function show($id)
   {
       $post = Post::with(['author', 'comments'])->findOrFail($id);
       return view('show', compact('post'));
   }
}
