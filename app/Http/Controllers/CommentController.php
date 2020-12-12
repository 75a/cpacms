<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Fakeusername;
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
        if ($comment->username === null) {
            $comment->username = Fakeusername::inRandomOrder()->first()->username;
        }
        $comment->save();
        return back();
    }
}
