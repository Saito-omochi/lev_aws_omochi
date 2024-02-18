<!DOCTIPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts-->
        <link href = "https://fonts.googleapis.com/css?family=Nunito:200,600" rel = "stylrsheet">
    </head>
    <body>
        <h1>投稿作成画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <div class="title">
                    <h2>タイトル</h2>
                    <input type="text" maxlength=100 name="post[title]" value="{{old('post.title')}}")></input>
                    <p class="title__error" style="color:red">{{$errors -> first('post.title')}}</p>
                </div>
                <p></p>
                <div class="body">
                    <h2>本文</h2>
                    <textarea maxlength=400 rows=6 cols=20 name="post[body]" value="{{old('post.body')}}"></textarea>
                    <p class="body__error" style="color:red">{{$errors -> first('post.body')}}</p>
                </div>
                <p><input type="submit" value="送信する"></p>
            </div>
        </form>
        <div class="fotter">
            <a href = "/">投稿一覧に戻る</a>
        </div>
    </body>
</html>