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
        return view('posts.create');
    }
    
    public function store(Request $request, Post $post)
    {//Requestモデルをインスタンス化して情報を受け取る
        $input = $request["post"];
        $post -> fill($input) -> save();
        return redirect('/posts/' . $post -> id);
        //リクエスト情報として受け取ったタイトル・本文にてpostsテーブルに新規データとして登録
        //登録完了後、/posts/今登録した投稿のid　にリダイレクト
        //Post::create(['name' => "title", 'name' => "body"]);
        //return view("posts.show") -> with(['post']);
        //dd($request -> all()); 
    }
}
