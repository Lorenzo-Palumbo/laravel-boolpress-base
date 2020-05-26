<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="">
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="Inserisci il titolo" value="{{$post->title}}">
            </div>
            <div class="">
                <label for="title">Immagine</label>
                <input type="text" name="image" placeholder="Inserisci il path" value="{{$post->image}}">
            </div>
            <div class="">
                <label for="title">Testo</label>
                <textarea name="body" rows="8" cols="80">{{$post->body}}</textarea>
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" name="author" placeholder="Inserisci il nome dell'autore" value="{{$post->author}}">
            </div>
            <div class="">
                <label for="title">Posizione</label>
                <input type="text" name="location" placeholder="Inserisci la tua posizione" value="{{$post->location}}">
            </div>
            <div class="">
                <label for="not-published">Non Pubblicato</label>
                <input type="radio" name="published" value="0" id="not-published" {{($post->published == 0) ? 'checked' : ''}}>
                <label for="published">Pubblicato</label>
                <input type="radio" name="published" value="1" id="published" {{($post->published == 1) ? 'checked' : ''}}>
            </div>
            <div class="">
                <input type="submit" name="" value="Salva">
            </div>
        </form>
    </body>
</html>
