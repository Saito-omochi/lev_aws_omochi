<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index') -> with(['posts'=> $post -> getPaginateByLimit()]);
        //viewで渡す先を指定する。withで内容を指定する。getByLimitでModelにDBを操作する指示を出す。
    }
    
    public function show(Post $post)
    { #ルートパラメーターを$postで受け取っている
        #show(Post $post)の$postはid=1のPostインスタンス
        return view('posts.show') -> with(['post' => $post]);
    }
    
    public function create()
    {
        $post = "uwa~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        return view('posts.create') -> with(['post' => $post]);
    }
}
