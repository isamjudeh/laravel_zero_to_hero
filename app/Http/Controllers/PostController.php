<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // index, show, create, store, edit, update, delete
    public function index()
    {
        $posts = Post::all();
        return view('post.index', [
            'posts' => $posts,
        ]);
    }
}
