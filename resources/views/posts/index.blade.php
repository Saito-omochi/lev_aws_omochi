<!DOCTIPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts-->
        <link href = "https://fonts.googleapis.com/css?family=Nunito:200,600" rel = "stylrsheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class = 'posts'>
            @foreach($posts as $p)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$p -> id}}">{{$p -> title}}</a>
                    </h2>
                    <p class = 'body'>{{$p -> body}}</p>
                </div>
            @endforeach
        </div>
        <a href = "/posts/create">投稿作成画面へ</a>
        <div class='paginate'>
            {{$posts -> links()}}
        </div>
    </body>
</html>