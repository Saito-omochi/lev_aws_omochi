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
            @foreach($disp as $p)
                <div class='post'>
                    <h2 class='title'>{{$p -> title}}</h2>
                    <p class = 'body'>{{$p -> body}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$disp -> links()}}
        </div>
    </body>
</html>