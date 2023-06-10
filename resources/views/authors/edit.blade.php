<x-main>
    <h1 class="m-4 text-center text-white">Modifica autore</h1>

    <div class="container m-auto bg-white opacity-100 rounded col-6">
        <form action="{{ Route('authors.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="name" value="{{ old('name')}}"
                    placeholder="inserisci l'autore">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="surname" value="{{ old('surname') }}"
                    placeholder="inserisci il cognome">
            </div>
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="date" name="birthday" value="{{ old('birthday') }}"
                    placeholder="inserisci la data di nascita">
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

            <div class="d-flex justify-content-center">
               
                <button class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)"
                        type="submit">Salva Aggiornamento</button>
                <button class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)" onclick="event.preventDefault();document.querySelector('#form_delete').submit();">Elimina risorsa</button>
                </div>
            </form>
        <div>
            
            <form action="{{ route('authors.destroy', ['author' => $author['id']]) }}" method="POST" class="center" id="form_delete">
                    @csrf
                    @method('DELETE')
          </form>
</x-main>