<!DOCTIPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts-->
        <link href = "https://fonts.googleapis.com/css?family=Nunito:200,600" rel = "stylrsheet">
    </head>
    <body>
        <h1>編集画面</h1>
            <form action="/posts/{{$post -> id}}", method="POST">
                @csrf
                @method('PUT')
            <div class=title>
                <p>タイトル</p>
                <input type="text" maxlength=100 name="post[title]" value="{{$post -> title}}"></input>
                <p class="title__error" style="color:red">{{$errors -> first('post.title')}}</p>
                <p></p>
            </div>
            <div class=body>
                <p>本文</p>
                <input typr"textarea" maxlength=4000 name="post[body]" value="{{$post -> body}}"></input>
                <p class="body__error" style="color:red">{{$errors -> first('post.body')}}</p>
                <p></p>
            </div>
            <div class="fotter">
                <p><input type="submit" value="送信する"></p>
                <a href = "/">投稿一覧に戻る</a>
            </div>
        </form>
    </body>
</html>