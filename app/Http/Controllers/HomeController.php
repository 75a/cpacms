<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => Post::orderBy('updated_at', 'desc')->paginate(5)->onEachSide(2),
            'categories' => Category::all(),

        ]);
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('category', [
            'category' => $category,
            'categories' => Category::all(),
            'posts' => $category->posts()->paginate(5)->onEachSide(2),
        ]);
    }
}
