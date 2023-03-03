<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('technologies')->paginate(12);
        return response()->json([
            'succes' => true,
            'results' => $posts
        ]);
    }

    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id)->with('tecnhologies');
        return response()->json([
            'succes' => true,
            'results' => $post
        ]);
    }
}
