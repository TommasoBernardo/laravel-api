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
        $posts = Post::paginate(10);
        return response()->json([
            'succes' => true,
            'results' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return response()->json([
            'succes' => true,
            'results' => $post
        ]);
    }
}
