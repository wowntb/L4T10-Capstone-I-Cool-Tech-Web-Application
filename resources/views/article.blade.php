<!-- This page must render everything related to the article id passed through the URL. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <x-alert />

    <h1>Cool Tech</h1>
    <div>
        <h2>{{$article[0]->title}}</h2>
        <!-- The content of the article from the table is rendered alongside random text. -->
        <p>{{$article[0]->content}} Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Viverra maecenas accumsan lacus vel facilisis volutpat. In est ante in nibh.
            Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Commodo viverra
            maecenas accumsan lacus vel facilisis. Augue eget arcu dictum varius duis at
            consectetur lorem. Sit amet volutpat consequat mauris nunc congue nisi vitae.
            Eu nisl nunc mi ipsum faucibus vitae aliquet. Odio morbi quis commodo odio
            aenean sed. Curabitur gravida arcu ac tortor.<br>
            <!-- The tags of the article are rendered using a subscript tag. -->
            <sub>Tags:
                <?php
                // the string of tags of the article are exploded into an array.
                $tags_array = explode(", ", $article[0]->tags);
                ?>

                @foreach ($tags_array as $tag)
                <a href="/tag/{{$tag}}">{{$tag}}</a>
                @endforeach
            </sub>
        </p>
        <h3>Category: {{$article[0]->category}}</h3>
        <h4>Date posted: {{$article[0]->creation_date}}</h4>
    </div>
    @include('footer')
</body>

</html>