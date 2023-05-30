<x-main>


    @if (session('success'))
        Salvato correttamente
    @endif


<div class="container m-5">
    <h1 class="text-light">Categorie disponibili</h1>

    <div class="col-6 opacity-75">
    <ul class="list-group list-group-flush">

        @foreach ($categories as $category)
            <li class="list-group-item">

                <a class="text-decoration-none text-black" href="{{route('category.show',['category' => $category['id']])}}">
                    {{ $category['name'] }}
            
            </li>
        @endforeach
    </ul>
    </div>
</div>
</x-main>