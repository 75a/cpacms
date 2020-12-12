<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Fakecomments;
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
        if ($comment->text === null) {
            $comment->text = Fakecomments::inRandomOrder()->first()->comment;
        }

        $comment->save();
        return back();
    }
}
