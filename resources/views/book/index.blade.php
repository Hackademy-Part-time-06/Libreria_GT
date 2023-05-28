<x-main>


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
</x-main>