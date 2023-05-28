
<x-main>
    <h1 class="m-4">Inserisci il libro che stai cercando </h1>

    <div class="container m-4">
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
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="author" value="{{ old('author') }}"
                    placeholder="inserisci l'autore">
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
                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
            </div>
        </form>
        <div>
</x-main>