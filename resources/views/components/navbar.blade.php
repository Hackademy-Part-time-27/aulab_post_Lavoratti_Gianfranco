<nav class="navbar navbar-expand-lg navBgCustomColor navbarAlign">
  <div class="container-fluid">
    <a class="navbar-brand linkCustom" href="{{route('homepage')}}">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon toggleIconCustom"></span>
    </button>
    <div class="collapse navbar-collapse navbarAlign" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 elementAlignCustom">
        <li class="nav-item linkCustom">
          <a class="nav-link  linkCustom" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link  linkCustom" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  linkCustom" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        @auth          
          <li class="nav-item dropdown"><li class="nav-item">
            <a class="nav-link linkCustom" href="{{route('article.create')}}">Inserisci un articolo</a>
          </li>
          <li class="nav-item dropdown linkCustom">
            <a class="nav-link dropdown-toggle linkCustom username" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">
              Ciao {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdownMenuCustom">
              @if (Auth::user()->is_admin)
                <li><a href="{{route('admin.dashboard')}}" class="dropdown-item">Dashboard Admin</a></li>
              @endif
              @if (Auth::user()->is_revisor)
                <li><a href="{{route('revisor.dashboard')}}" class="dropdown-item">Dashboard Revisor</a></li>
              @endif
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
              <form action="{{ route('logout') }}" method="POST" id="form-logout">
                @csrf
              </form>
            </ul>
          </li>          
        @endauth
        @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle linkCustom" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Ospite
            </a>
            <ul class="dropdown-menu ddMenuCustom">
              <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
            </ul>
          </li>
        @endguest 
      </ul>
      <form action="{{route('article.search')}}" method="GET" class="d-flex searchBarCustom" role="search">
        <input type="search" class="form-control me-2" name="query" placeholder="Cerca tra gli articoli.." aria-label="Search">
        <button type="submit" class="btn btn-otline-secondary searchBtnCustom">Cerca</button>
      </form>      
    </div>
  </div>
</nav>