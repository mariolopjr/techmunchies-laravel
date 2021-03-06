<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use JavaScript;

class PostController extends Controller
{
    public function index(Request $request, Posts $posts)
    {
        // Get latest posts
        $posts = $posts->latest();
        $posts = $posts->paginate(10);

        return compact('posts');
    }

    public function show(Request $request, Post $post)
    {
        JavaScript::put([
            'post' => $post,
        ]);

        return view('post');
    }
}
