<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index ($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $this->sortCommentsByRelativeDate($post->comments)->take(10);
        return view('generator', [
            'post' => $post,
            'comments' => $comments,
        ]);
    }

    private function sortCommentsByRelativeDate($comments)
    {

        return $comments->sort(function ($a, $b)  {
            return ($a->hoursAgo()) > ($b->hoursAgo());
        });
    }


}
