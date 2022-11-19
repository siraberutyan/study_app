<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // # 投稿作成
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return response()->json(Post::all());
    }
}
