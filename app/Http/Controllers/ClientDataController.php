<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientDataController extends Controller
{
    public function index()
    {
        return [
            "ip" => $_SERVER['REMOTE_ADDR']
        ];
    }

}
