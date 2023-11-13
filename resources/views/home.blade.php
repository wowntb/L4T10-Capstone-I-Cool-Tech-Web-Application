<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <h1>Cool Tech</h1>
    <div>
        <h2>Recent articles:</h2>
        @foreach($articles as $article)
        <a href="/article/{{$article->id}}">
            <p>{{ucwords($article->title)}}</p>
        </a>
        @endforeach
    </div>
</body>

</html>