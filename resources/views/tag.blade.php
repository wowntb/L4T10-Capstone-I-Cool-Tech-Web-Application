<?php
// The URI is exploded into an array so the last word (the tag clicked on by the user) can be used.
$tags = explode('/', $_SERVER['REQUEST_URI']);
// The tag that was clicked on is found at index 2 and will be stored in this variable.
$selected_tag = $tags[2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tag</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <h1>Cool Tech</h1>
    <div>
        <h2>Articles tagged "{{$selected_tag}}":</h2>
        <!-- The table of articles is iterated through. -->
        @foreach ($articles as $article)
        <!-- If the selected tag is found in an articles list of tags, it will be rendered in HTML. -->
        @if(str_contains($article->tags, $selected_tag))
        <a href="/article/{{$article->id}}">
            <p>{{$article->title}}</p>
        </a>
        <p class="preview">{{$article->content}}...</p>
        @endif
        @endforeach
    </div>
</body>

</html>