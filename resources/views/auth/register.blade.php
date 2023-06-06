<x-main>

    {{-- questa vista è la vista di chi si deve registrare --}}
    <div class="container my-4">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 bg-white opacity-100 rounded">
        <form class="p-5" action="{{route('register')}}" method="POST">
          @method('POST')
          @csrf

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif


          <div class="mb-3">
            <label for="email" class="form-label">Nome utente</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email utente</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Conferma Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
          </div>

          {{-- qui ci abbiamo inserito un altro bottone, è una via di uscita per l'utente --}}
          <button type="submit" class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)">Registrati</button>
          <a href="{{route('login')}}" class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)">Sei già registrato?</a>
        </form>
      </div>
    </div>
  </div>

</x-main>