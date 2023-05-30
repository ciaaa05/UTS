<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailController;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $highlight = Post::orderBy('like', 'desc')->first();
        $latests = Post::orderBy('date')->paginate(4);
        return view('home', compact('posts', 'highlight', 'latests'));
    }
}
