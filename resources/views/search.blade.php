<?php
// DB is used here to render the results on this page.
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <x-alert />

    <h1>Cool Tech</h1>
    <div>
        <h2>Article Search</h2>
        <!-- 3 different forms are created for the search bars. -->
        <form method="get">
            <label for="article_id">Article ID:</label><br>
            <input type="text" id="article_id" name="article_id">
            <button type="submit">Search ID</button>
        </form>

        <form method="get">
            <label for="article_category">Article Category:</label><br>
            <input type="text" id="article_category" name="article_category">
            <button type="submit">Search Category</button>
        </form>

        <form method="get">
            <label for="article_tag">Article Tag:</label><br>
            <input type="text" id="article_tag" name="article_tag">
            <button type="submit">Search Tag</button>
        </form>

        <?php
        // If this $_GET is not empty then the user has searched for a specific ID.
        if (!empty($_GET['article_id'])) {
            // The table will be queried with the article_id value.
            $article = DB::table('articles')->where('id', '=', $_GET['article_id'])->get();
        ?>
            <h2>Search results for ID {{ $_GET['article_id'] }}:</h2>
            <a href="/article/{{$article[0]->id}}">
                <p>{{$article[0]->title}}</p>
            </a>
            <p class="preview">{{$article[0]->content}}...</p>
        <?php } elseif (!empty($_GET['article_category'])) {
            $articles = DB::table('articles')->get();
        ?>
            <h2>Search results for category "{{$_GET['article_category']}}":</h2>
            @foreach ($articles as $article)
            <!-- If stripos() doesn't return false then the searched category is in the article's category. -->
            @if(stripos($article->category, $_GET['article_category']) !== false)
            <a href="/article/{{$article->id}}">
                <p>{{$article->title}}</p>
            </a>
            <p class="preview">{{$article->content}}...</p>
            @endif
            @endforeach
        <?php } elseif (!empty($_GET['article_tag'])) { ?>
            <h2>Search results for tag "{{$_GET['article_tag']}}":</h2>
            @foreach ($articles as $article)
            @if(stripos($article->tags, $_GET['article_tag']) !== false)
            <a href="/article/{{$article->id}}">
                <p>{{$article->title}}</p>
            </a>
            <p class="preview">{{$article->content}}...</p>
            @endif
            @endforeach
        <?php } ?>
    </div>
    @include('footer')
</body>

</html>