<?php
$uri_array = explode('/', $_SERVER['REQUEST_URI']);
// The category's slug is stored in $slug.
$slug = $uri_array[2];

// First the slug's hyphens are replaced with white space.
$unslug = str_replace('-', ' ', $slug);
// ucwords() is then used to apply title case to the slug which is no longer a slug now.
$unslug = ucwords($unslug);

// This boolean is set up to determine what HTML will be rendered.
$category_exists = false;
// The articles are iterated through.
foreach ($articles as $article) {
    if ($article->category  === $unslug) {
        // If an article's category is an exact match to $unslug then the boolean is set to true.
        $category_exists = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <x-alert />

    <h1>Cool Tech</h1>
    <div>
        <?php
        if ($category_exists) { ?>
            <h2>Articles in the category "{{$unslug}}":</h2>
            <!-- The table of articles is iterated through. -->
            @foreach ($articles as $article)
            <!-- If the selected category exactly matches the $unslug, it will be rendered in HTML. -->
            @if($article->category === $unslug)
            <a href="/article/{{$article->id}}">
                <p>{{$article->title}}</p>
            </a>
            <p class="preview">{{$article->content}}...</p>
            @endif
            @endforeach
        <?php } else { ?>
            <h2>Sorry, there are no articles under the category "{{$unslug}}".</h2>
        <?php } ?>
    </div>
    @include('footer')
</body>

</html>