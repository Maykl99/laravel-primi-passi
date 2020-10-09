<nav class="navbar navbar-expand-lg navbar-light text-light bg-dark">
    <a class="navbar-brand" href="#"><img class="img-thumbnail" src="https://www.lamolisana.it/wp-content/uploads/2018/09/marchio-bollino-4.png" alt="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul id="ul" class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}" class="link {{(url()->current() == route('index')) ? 'rosso' : 'no-active'}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('prodotti') }}" class="link {{(url()->current() == route('prodotti')) ? 'rosso' : 'no-active'}}">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contatti') }}" class="link {{(url()->current() == route('contatti')) ? 'rosso' : 'no-active'}}">Contatti</a>
        </li>
      </ul>
    </div>
  </nav>


