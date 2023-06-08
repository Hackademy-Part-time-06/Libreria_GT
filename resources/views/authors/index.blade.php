<x-main>


    @if (session('success'))
        Salvato correttamente
    @endif


<div class="container m-5">
    <h1 class="text-light">Autori disponibili</h1>

    <div class="col-6 opacity-75">
    <ul class="list-group list-group-flush">
        
        @foreach ($authors as $author)
            <li class="list-group-item">
                
                <a class="text-decoration-none text-black" href="{{route('book.show',['book' => $book['id']])}}">

                {{ $author['name'] }} - {{ $author['surname'] }} - {{ $author['birthday']}}

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