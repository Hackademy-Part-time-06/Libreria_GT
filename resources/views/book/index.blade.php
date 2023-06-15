<x-main>


    @if (session('success'))
        {{session('success')}}
    @endif


<div class="container m-5">
    <h1 class="text-light text-center">Libri disponibili</h1>

    <div class="m-auto mb-3 rounded col-6">
        <form class="d-flex" role="search" action="{{route('book.search')}}" method="POST">
            @method('POST')
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn text-white" style="background-color: rgb(136, 10, 10)" type="submit">Cerca</button>
          </form>
    </div>

    <div class="col-6 m-auto bg-white rounded">
    <ul class="list-group list-group-flush rounded">
        
        @foreach ($books as $book)
            <li class="list-group-item  list-group-item-action">

                <a class="text-decoration-none text-black" href="{{route('book.show',['book' => $book['id']])}}">

                {{ $book['title'] }} - {{ $book->author->name}}  {{ $book->author->surname}}- {{ $book['year'] }} - {{ $book['pages'] }}

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