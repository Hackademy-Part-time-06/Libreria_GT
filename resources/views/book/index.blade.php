<x-main>


    @if (session('success'))
        Salvato correttamente
    @endif


<div class="container m-5">
    <h1 class="text-light">Libri disponibili</h1>

    <div class="col-6 opacity-75">
    <ul class="list-group list-group-flush">
        @foreach ($books as $book)
            <li class="list-group-item">
                <a class="text-decoration-none text-black" href="{{route('book.show',['book' => $book['id']])}}">


                {{ $book['title'] }} - {{ $book['author'] }} - {{ $book['year'] }} - {{ $book['pages'] }}
            
            </li>
        @endforeach
    </ul>
    </div>
</div>
</x-main>