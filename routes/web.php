<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/',[Postcontroller::class,'index']);
#Route::get('/posts', [PostController::class,'index']);

Route::post("/posts", [PostController::class, 'store']);
#/posts がPOSTリクエストで飛んできたときにPostControllerのstoreが実行されるように

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);
#/posts/:idでGetリクエストでPostControllerのshowメソッドを使う
#{post}がルートパラメーター。ここでIDが渡せるよ。

