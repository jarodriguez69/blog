<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {   
        return view('posts.show', compact('post'));

    }

    public function create()
    {
        return view('posts.create');
    }
 
    public function store()
    {
        return "todo ok!";
    }

}
