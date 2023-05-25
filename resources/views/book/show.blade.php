<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h2>Dettagli libro</h2>

        <p>Titolo: {{$book->title}}</p>
        <p>Autore: {{$book->author}}</p>
        <p>Anno: {{$book->year}}</p>
</body>
</html>
