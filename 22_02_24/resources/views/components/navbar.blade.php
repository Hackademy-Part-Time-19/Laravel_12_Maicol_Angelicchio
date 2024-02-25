<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('category.index')}}">Categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('article.index')}}">Articoli</a>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login')}}">Login</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>