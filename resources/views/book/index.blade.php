<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Libreria da Aterg</title>
</head>

<body>


    @if (session('success'))
        Salvato correttamente
    @endif

    <h1>Libri disponibili</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{route('book.show',['book' => $book['id']])}}">


                {{ $book['title'] }} - {{ $book['author'] }} - {{ $book['year'] }} - {{ $book['pages'] }}
            
            </li>
        @endforeach
    </ul>
</body>

</html>
