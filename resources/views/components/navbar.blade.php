
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark" style="background-color: rgb(136, 10, 10)">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">LibrerAterg</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{Route ('book.index')}}">Home</a>
          <a class="nav-link" href="{{Route ('book.create')}}">Aggiungi Libri</a>
          <a class="nav-link" href="{{Route ('category.create')}}">Aggiungi Categorie</a>
        </div>
      </div>
    </div>
  </nav>
