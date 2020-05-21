<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            @foreach ($posts as $post)
                <li>
                    Titolo: <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                    Immagine: <img src="{{$post->image}}" alt="{{$post->title}}">
                    <p>Testo: {{$post->body}}</p>
                    <small>Autore: {{$post->author}}</small>
                </li>
            @endforeach
        </ul>
    </body>
</html>
