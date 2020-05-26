<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$post->title}}</h2>
                    <img src="{{$post->image}}" alt="{{$post->title}}">
                    <div class="">
                        {{$post->body}}
                    </div>
                    <small>Scritto da {{$post->author}}</small>
                </div>
            </div>
        </div>
    </body>
</html>
