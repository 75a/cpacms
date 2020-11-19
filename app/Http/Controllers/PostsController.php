<?php

namespace App\Http\Controllers;

use App\Models\DownloadPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('post', [
            'post' => $post
        ]);
    }
}
