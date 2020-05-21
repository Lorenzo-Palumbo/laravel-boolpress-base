<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <h2>{{$post->title}}</h2>
        <img src="{{$post->image}}" alt="{{$post->title}}">
        <div class="">
            {{$post->body}}
        </div>
        <small>Scritto da {{$post->author}}</small>
    </body>
</html>
