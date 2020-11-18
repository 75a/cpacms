<?php

namespace App\Http\Controllers;

use App\Models\DownloadPost;
use App\Models\GeneratorPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $downloadPosts = DownloadPost::all();
        $generatorPosts = GeneratorPost::all();
        return view("home", [
            'downloadPosts' => $downloadPosts,
            'generatorPosts' => $generatorPosts
        ]);
    }
}
