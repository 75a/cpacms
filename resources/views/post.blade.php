<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <article>
            <header>
                <h2>Download type posts:</h2>
            </header>
            <main>
                @foreach ($downloadPosts as $downloadPost)
                    <p>Title: {{$downloadPost->title}}</p>
                    <p>Description: {{$downloadPost->description}}</p>
                @endforeach
            </main>
        </article>
        <article>
            <header>
                <h2>Generator type posts:</h2>
            </header>
            <main>
                @foreach ($generatorPosts as $generatorPost)
                    <p>Title: {{$generatorPost->title}}</p>
                    <p>Description: {{$generatorPost->description}}</p>
                @endforeach
            </main>
        </article>

    </body>
</html>
