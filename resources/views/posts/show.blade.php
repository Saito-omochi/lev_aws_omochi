<!DOCTIPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts-->
        <link href = "https://fonts.googleapis.com/css?family=Nunito:200,600" rel = "stylrsheet">
    </head>
    <body>
        <div class = "title">
            <h1>{{$post -> title}}</h1>
        </div>
        <div class = "content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{$post -> body}}</p>
            </div>
        </div>
        <div class = "fotter">
            <a href = '/'>戻る</a>
            <a href = '/posts/{{$post -> id}}/edit'>投稿編集画面へ</a>
        </div>
    </body>
</html>