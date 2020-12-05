<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
        $comment = new Comment(request([
            'post_id',
            'text',
            'username',
            'day',
            'hour',
            'avatar'
        ]));
        $comment->save();
        return back();
    }
}
