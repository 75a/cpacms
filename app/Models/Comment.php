<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'text',
        'username',
        'day',
        'hour',
        'avatar'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function getRelativeDate()
    {
        $hoursAgo = $this->hoursAgo();
        if ($hoursAgo === 0) {
            return "Less than 1 hour ago";
        }
        if ($hoursAgo === 1) {
            return "1 hour ago";
        }

        if ($hoursAgo > 1 && $hoursAgo < 24) {
            return strval($this->hoursAgo()) . " hours ago";
        }

        if ($hoursAgo >= 24 && $hoursAgo <= 47) {
            return "1 day ago";
        }
        if ($hoursAgo >= 48) {
            return floor($hoursAgo/24) . " days ago";
        }



    }

    public function hoursAgo()
    {
        $currentHour = (date("N")-1)*24+date("G");
        $commentHour = (($this->day)-1) * 24 + $this->hour;
        $hoursAgo = $currentHour - $commentHour;
        if ($hoursAgo < 0) {
            $hoursAgo += 168;
        }
        return $hoursAgo;
    }
}
