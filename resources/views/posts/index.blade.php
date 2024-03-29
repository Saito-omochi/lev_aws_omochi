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
                    <a href = '/posts/{{$p -> id}}/edit'>投稿編集画面へ</a>
                    <form action="/posts/{{$p -> id}}" id="form_{{$p -> id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{$p -> id}})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href = "/posts/create">投稿作成画面へ</a>
        <div class='paginate'>
            {{$posts -> links()}}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                                
                if(confirm('削除すると復元できません \n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>