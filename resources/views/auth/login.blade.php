<x-main>

    {{-- siamo dentro la vista di login, quindi l'utente si devesolo autenticare --}}
    <div class="container my-4 ">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 bg-white opacity-100 rounded">
        <form class="p-5" action="{{route('login')}}" method="POST">
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
            <label for="email" class="form-label">Email utente</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>

          {{-- qui ci abbiamo inserito un altro bottone, è una via di uscita per l'utente --}}
          <button type="submit" class="btn btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)">Accedi</button>
          <a href="{{route('register')}}" class="btn btm-outline btn-lg m-5 text-white" style="background-color: rgb(136, 10, 10)">Non sei registrato?</a>
        </form>
      </div>
    </div>
  </div>

</x-main>