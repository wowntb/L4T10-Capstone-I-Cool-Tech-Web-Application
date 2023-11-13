<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <h1>Cool Tech</h1>
    <div>
        <h2>Recent articles:</h2>
        <!-- This for loop used to print the latest 5 articles on the home page. -->
        @for ($i = 0; $i < 5; $i++) <a href="/article/{{$articles[$i]->id}}">
            <p>{{$articles[$i]->title}}</p>
            </a>
            <!-- The content of the article is displayed like this to make it look like a preview. -->
            <p class="preview">{{$articles[$i]->content}}...</p>
            @endfor
    </div>
</body>

</html>