<x-main>


    @if (session('success'))
        <p class="--bs-success-bg-subtle"> Salvato correttamente </p>
    @endif



    <div class="container m-5">
        <h1 class="text-light text-center">Autori disponibili</h1>
    
        <div class="col-6 m-auto bg-white">
        <ul class="list-group list-group-flush border-radius">
        
        @foreach ($authors as $author)
            <li class="list-group-item">
                
                <a class="text-decoration-none text-black" href="{{route('authors.index', compact('author'))}}">

                {{ $author['name'] }} - {{ $author['surname'] }} - {{ $author['birthday']}}

                <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="{{route('authors.show', compact('author'))}}"
                        class="btn btn-primary me-md-2">Visualizza</a>
                    <a href="{{route('authors.edit', compact('author'))}}"
                        class="btn btn-warning me-md-2">Modifica</a>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
</div>
</x-main>