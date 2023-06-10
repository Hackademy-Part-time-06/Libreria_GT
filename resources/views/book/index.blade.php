<x-main>


    @if (session('success'))
        Salvato correttamente
    @endif


<div class="container m-5">
    <h1 class="text-light text-center">Libri disponibili</h1>

    <div class="col-6 m-auto bg-white">
    <ul class="list-group list-group-flush border-radius">
        
        @foreach ($books as $book)
            <li class="list-group-item  list-group-item-action">

                <a class="text-decoration-none text-black" href="{{route('book.show',['book' => $book['id']])}}">

                {{ $book['title'] }} - {{ $book['author'] }} - {{ $book['year'] }} - {{ $book['pages'] }}

                <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="{{route('book.show',['book' => $book['id']])}}"
                        class="btn btn-primary me-md-2">Visualizza</a>
                    <a href="{{route('book.edit', compact('book'))}}"
                        class="btn btn-warning me-md-2">Modifica</a>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
</div>
</x-main>