<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    //
    public function index($id){
        $post = Post::find($id);
        if (strlen($post->detail->content) <= 900){
            $post->detail->reading_time = 'Quicks Reads';
            $post->detail->save();
        } elseif (strlen($post->detail->content) > 900 && strlen($post->detail->content) < 1300){
            $post->detail->reading_time = 'Medium Reads';
            $post->detail->save();
        } elseif(strlen($post->detail->content) >= 1300) {
            $post->detail->reading_time = 'Long Reads';
            $post->detail->save();
        }
        return view('detail', compact('post'));
    }
}
