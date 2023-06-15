<x-main>


    @if (session('success'))
        Salvato correttamente
    @endif


    <div class="container m-5">
        <h1 class="text-light text-center">Categorie disponibili</h1>
    
        <div class="col-6 m-auto bg-white rounded">
        <ul class="list-group list-group-flush border-radius rounded">

        @foreach ($categories as $category)
            <li class="list-group-item">

                <a class="text-decoration-none text-black" href="{{route('categories.show',['category' => $category['id']])}}">
                    {{ $category['name'] }}
            

                    <div class="d-grid d-md-flex justify-content-md-end">
                        <a href="{{route('categories.show', compact('category'))}}"
                            class="btn btn-primary me-md-2">Visualizza</a>
                        <a href="{{route('categories.edit', compact('category'))}}"
                            class="btn btn-warning me-md-2">Modifica</a>
                    </div>
            </li>
        @endforeach
    </ul>
    </div>
</div>
</x-main>