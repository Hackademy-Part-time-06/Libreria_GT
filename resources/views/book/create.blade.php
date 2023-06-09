<x-main>
    <h1 class="m-4 text-center text-white">Inserisci libro</h1>

    <div class="container m-auto bg-white opacity-100 rounded col-6">
        <form action="{{ Route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="title" value="{{ old('titolo') }}"
                    placeholder="inserisci il titolo">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="pages" value="{{ old('pages') }}"
                    placeholder="inserisci il numero di pagine">
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="year" value="{{ old('year') }}"
                    placeholder="inserisci l'anno">
            </div>


            {{-- select dell'autore --}}
            <div class="form-floating mb-3">
                <select class="form-control" id="author_id" name="author_id">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                    @endforeach
                </select>
                <label for="author_id">Nome Autore</label>
            </div>


            {{-- checkbox categorie --}}
            <div class="form-floating mb-3">

                <div class="form-floating mb-3">
                    @foreach ($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]"
                                value="{{ $category->id }}" id="categories-{{ $category->id }}">
                            <label class="form-check-label" for="categories-{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach

                    @error('category_id')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>



                <!-- in caso di errore-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="pages">Immagine del Libro</label>
                    <input class="form-control" id="image" name="image" type="file">
                    {{-- non mettere l'old value perchè senno ti entrano nel pc --}}
                </div>

                <div class="d-grid gap-3">
                    <button class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)"
                        type="submit">Salva</button>
                </div>
        </form>
        <div>
</x-main>
