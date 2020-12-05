<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['slug','name'];

    public function path()
    {
        return route('categories-manager.show', $this);
    }

    public function publicPath()
    {
        return route('category.index', $this->slug);
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

}
