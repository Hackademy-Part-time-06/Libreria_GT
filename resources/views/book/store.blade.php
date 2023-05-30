<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>

    <div class="col-6 opacity-75">
    <h1>Libri disponibili</h1>
    <ul class="list-group list-group-flush">
    @foreach ($books as $book)

    <li class="list-group-item">{{$book['title']}} - {{$book['author']}} - {{$book['year']}} - {{$book['pages']}}</li>

    @endforeach
    </ul>
    </div>
</body>
</html>
