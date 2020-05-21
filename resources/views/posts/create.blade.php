<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="">
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="Inserisci il titolo">
            </div>
            <div class="">
                <label for="title">Immagine</label>
                <input type="text" name="image" placeholder="Inserisci il path">
            </div>
            <div class="">
                <label for="title">Testo</label>
                <textarea name="body" rows="8" cols="80">Inserisci il testo</textarea>
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" name="author" placeholder="Inserisci il nome dell'autore">
            </div>
            <div class="">
                <label for="title">Posizione</label>
                <input type="text" name="location" placeholder="Inserisci la tua posizione">
            </div>
            <div class="">
                <label for="not-published">Non Pubblicato</label>
                <input type="radio" name="published" value="0" id="not-published">
                <label for="published">Pubblicato</label>
                <input type="radio" name="published" value="1" id="published">
            </div>
            <div class="">
                <input type="submit" name="" value="Salva">
            </div>
        </form>
    </body>
</html>
