
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark" style="background-color: rgb(136, 10, 10)">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">LibrerAterg</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link @if (Route::currentRouteName() == 'book.index') active @endif" aria-current="page" href="{{Route ('book.index')}}">Home</a>
          <a class="nav-link @if (Route::currentRouteName() == 'category.index') active @endif" aria-current="page" href="{{Route ('category.index')}}">Lista Categorie</a>
          <a class="nav-link @if (Route::currentRouteName() == 'authors.index') active @endif" aria-current="page" href="{{Route ('authors.index')}}">Lista Autori</a>



          @auth           {{-- qui stiamo aprendo un auth, quindi tutto cio che c'è qui dentro lo vede solo l'utente registrato --}}

          <a class="nav-link @if (Route::currentRouteName() == 'book.create') active @endif" href="{{Route ('book.create')}}">Aggiungi Libri</a>
          <a class="nav-link @if (Route::currentRouteName() == 'category.create') active @endif" href="{{Route ('category.create')}}">Aggiungi Categorie</a>
          <a class="nav-link @if (Route::currentRouteName() == 'authors.create') active @endif" href="{{Route ('authors.create')}}">Aggiungi Autore</a>
          <li>
              <p class="text-white align-baseline m-2">Ciao, {{Auth::user()->email}}</p>
          </li>
          
          <form id="form-logout" action="{{ route('logout') }}" method="POST">
              @csrf

              {{-- se l'utente clicca sul pulsante esci, viene bloccato il caricamento normale della pagina, prendimi il form più vicino e--}}
              <button class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                 
              </button>
          </form>
          </li>
          @else {{-- chi non è loggato vede questo --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Accedi</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registrati</a>
          </li>
          @endauth

        </div>
      </div>
    </div>
  </nav>
