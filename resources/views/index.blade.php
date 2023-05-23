<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>

    <h1>Libri disponibili</h1>
    <ul>
    @foreach ($books as $book)

    <li>{{$book['title']}} - {{$book['author']}} - {{$book['year']}} - {{$book['pages']}}</li>

    @endforeach
    </ul>
</body>
</html>
