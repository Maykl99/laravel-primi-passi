<nav class="navbar navbar-expand-lg navbar-light text-light bg-dark">
    <a class="navbar-brand" href="#"><img class="img-thumbnail" src="https://www.lamolisana.it/wp-content/uploads/2018/09/marchio-bollino-4.png" alt="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul id="ul" class="navbar-nav">
        <li class="nav-item active">
        <a class="text-light nav-link link {{ (url()->current() == route('index')) ? 'bg-warning' : 'no-active' }}" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="text-light nav-link link {{ (url()->current() == route('prodotti')) ? 'bg-warning' : 'no-active' }}" href="{{ route('prodotti') }}">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="text-light nav-link link {{ (url()->current() == route('contatti')) ? 'bg-warning' : 'no-active' }}" href="{{ route('contatti') }}">Contatti</a>
        </li>
      </ul>
    </div>
  </nav>


