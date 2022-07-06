<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index() {
        return view('posts.post_list', [
            'heading' => 'Статьи',
            'posts' => Post::where('active', 1)->paginate(16)
        ]);
    }

    public function show($slug) {
        $post = Post::where( 'active', 1 )->where('slug', $slug)->first();

        return view('posts.post', [
            'heading' => $post->title,
            'post' => $post
        ]);
    }
}
