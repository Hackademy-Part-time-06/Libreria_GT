
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark" style="background-color: rgb(136, 10, 10)">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">LibrerAterg</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link @if (Route::currentRouteName() == 'book.index') active @endif" aria-current="page" href="{{Route ('book.index')}}">Home</a>
          <a class="nav-link @if (Route::currentRouteName() == 'categories.index') active @endif" aria-current="page" href="{{Route ('categories.index')}}">Lista Categorie</a>
          <a class="nav-link @if (Route::currentRouteName() == 'authors.index') active @endif" aria-current="page" href="{{Route ('authors.index')}}">Lista Autori</a>



          @auth           {{-- qui stiamo aprendo un auth, quindi tutto cio che c'è qui dentro lo vede solo l'utente registrato --}}

          

          <a class="nav-link @if (Route::currentRouteName() == 'book.create') active @endif" href="{{Route ('book.create')}}">Aggiungi Libri</a>
          <a class="nav-link @if (Route::currentRouteName() == 'categories.create') active @endif" href="{{Route ('categories.create')}}">Aggiungi Categorie</a>
          <a class="nav-link @if (Route::currentRouteName() == 'authors.create') active @endif" href="{{Route ('authors.create')}}">Aggiungi Autore</a>
          <li>
              <p class="text-white align-baseline m-2 ">Ciao, {{Auth::user()->name}}</p>
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


    {{-- navbar a caso per far vedere che non funziona il dropdown --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Link</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>



  </nav>
