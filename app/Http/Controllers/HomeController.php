<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $posts = Post::all();
        return view('home.index', ['posts' => $posts]);

    }
}
