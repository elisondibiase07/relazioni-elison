<nav class="navbar navbar-expand-lg bg-dark  ">
  <div class="container-fluid ">
    <a class="navbar-brand logo" href="#">Ciak</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link  " aria-current="page" href="{{route('homepage')}}">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Lavora con noi</a>
        </li>
        @guest
        <li class="nav-item ">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();">Logout</a></li>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('product.category', $category)}}">{{$category->name}}</a></li>
              @endforeach 
            </ul>
          </li>
        </ul>
        @endguest
        @auth
        <ul class="nav-item mx-auto my-auto">
          <a class="nav-link" href="{{route('product.create')}}">Vendi Prodotto</a>
        </ul>
        @endauth
        {{-- <form class="d-flex" role="search">
          <input class="form-control mx-auto" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>