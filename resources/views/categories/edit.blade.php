<x-main>
    <h1 class="m-4 text-white text-center">Aggiorna la categoria</h1>

    <div class="container m-auto bg-white opacity-100 rounded col-6 ">
        <form action="{{ Route('categories.update', ['category' => $category['id']]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-4">
                <label class="form-label"></label>
                <input class="form-control" type="text" name="name" value="{{ $category->name}}"
                    placeholder="inserisci il titolo">
                <div id="emailHelp" class="form-text"></div>
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
            
            <form action="{{ route('categories.destroy', ['category' => $category['id']]) }}" method="POST" class="center" id="form_delete">
                    @csrf
                    @method('DELETE')
          </form>
</x-main>
