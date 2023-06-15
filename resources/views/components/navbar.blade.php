
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(136, 10, 10)">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">LibrerAterg</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas-body">
        <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <a class="nav-link @if (Route::currentRouteName() == 'book.index') active @endif" aria-current="page" href="{{Route ('book.index')}}">Home</a>
          <a class="nav-link @if (Route::currentRouteName() == 'categories.index') active @endif" aria-current="page" href="{{Route ('categories.index')}}">Lista Categorie</a>
          <a class="nav-link @if (Route::currentRouteName() == 'authors.index') active @endif" aria-current="page" href="{{Route ('authors.index')}}">Lista Autori</a>

          @auth           {{-- qui stiamo aprendo un auth, quindi tutto cio che c'è qui dentro lo vede solo l'utente registrato --}}

          
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao, {{Auth::user()->name}}
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
            </a>
             <ul class="dropdown-menu">
              <li><a class="dropdown-item @if (Route::currentRouteName() == 'book.create') active @endif" href="{{Route ('book.create')}}">Aggiungi Libri</a></li>
              <li><a class="dropdown-item @if (Route::currentRouteName() == 'categories.create') active @endif" href="{{Route ('categories.create')}}">Aggiungi Categorie</a></li>
              <li><a class="dropdown-item @if (Route::currentRouteName() == 'authors.create') active @endif" href="{{Route ('authors.create')}}">Aggiungi Autore</a></li>
              <li><a class="nav-link @if (Route::currentRouteName() == 'book.search') active @endif" href="{{Route ('book.search')}}">Cerca Libro</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-link">
                <form id="form-logout" class="dropdown-item" action="{{ route('logout') }}" method="POST">
                @csrf

                {{-- se l'utente clicca sul pulsante esci, viene bloccato il caricamento normale della pagina, prendimi il form più vicino e--}}
                <button class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
                </form>
             </li>
           </ul>
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

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(136, 10, 10)" aria-label="Offcanvas navbar large">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LibrerAterg</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>


        <div class="dropdown">
          <a class="btn nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
        
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item @if (Route::currentRouteName() == 'book.create') active @endif" href="{{Route ('book.create')}}">Aggiungi Libri</a>
            </li>
            <li>
              <a class="dropdown-item @if (Route::currentRouteName() == 'categories.create') active @endif" href="{{Route ('categories.create')}}">Aggiungi Categorie</a>
            </li>
            <li>
              <a class="dropdown-item @if (Route::currentRouteName() == 'authors.create') active @endif" href="{{Route ('authors.create')}}">Aggiungi Autore</a>
            </li>
            <li>
              <form id="form-logout" class="dropdown-item" action="{{ route('logout') }}" method="POST">
                @csrf

                {{-- se l'utente clicca sul pulsante esci, viene bloccato il caricamento normale della pagina, prendimi il form più vicino e--}}
                <button class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
    