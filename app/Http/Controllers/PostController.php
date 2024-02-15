<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts.index') -> with(['disp'=> $post -> getByLimit()]);
        //viewで渡す先を指定する。withで内容を指定する。getByLimitでModelにDBを操作する指示を出す。
    }
}
