<x-main>
    <h1 class="m-4 text-white text-center">Aggiorna il libro</h1>

    <div class="container m-auto bg-white opacity-100 rounded col-6 ">
        <form action="{{ Route('book.update', ['book' => $book['id']]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="title" value="{{ $book->title }}"
                    placeholder="inserisci il titolo">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="pages" value="{{ $book->pages }}"
                    placeholder="inserisci il numero di pagine">
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="year" value="{{ $book->year }}"
                    placeholder="inserisci l'anno">
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="author" value="{{ $book->author }}"
                    placeholder="inserisci l'autore">
            </div>
            <div class="mb-3">
                <label for="pages">Inserisci immagine di copertina</label>
                <input class="form-control" id="image" name="image" type="file">
                {{-- non mettere l'old value perchè senno ti entrano nel pc --}}
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
            {{-- invece di un button e basta, dobbiamo creare un form nascosto come bottone --}}
            

                <div class="d-flex justify-content-center">
               
                <button class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)"
                        type="submit">Salva Aggiornamento</button>
                <button class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)" onclick="event.preventDefault();document.querySelector('#form_delete').submit();">Elimina risorsa</button>
                </div>
            </form>
        <div>
            
            <form action="{{ route('book.destroy', ['book' => $book['id']]) }}" method="POST" class="center" id="form_delete">
                    @csrf
                    @method('DELETE')
          </form>
</x-main>