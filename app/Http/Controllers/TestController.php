<?php

namespace App\Http\Controllers;

use App\Post;

class TestController extends Controller
{
    public function index()
    {
        $allPost = Post::with('comments')->get();
    }
}
