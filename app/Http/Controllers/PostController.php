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
        return view('posts.list', [
            'posts' => Post::where('active', 1)->paginate(16)
        ]);
    }

    public function show(Request $request) {
        return view('posts.show', [
            'post' => Post::where('active', 1)->findOrFail($request->slug)
        ]);
    }
}
