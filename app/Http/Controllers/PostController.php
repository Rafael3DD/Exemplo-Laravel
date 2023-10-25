<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function show(Post $post){
        //1 -> N e 
        //dd($post->user);
        // $post->load('user');
       return  $post;
    }
}
