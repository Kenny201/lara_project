<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $posts = Post::all();
        $categories = Category::all();
        return view('components.home.index', ['posts' => $posts, 'categories' => $categories]);

    }
    public function show(Post $post)
    {
        return view('components.post.index', ['post' => $post]);
    }
}
