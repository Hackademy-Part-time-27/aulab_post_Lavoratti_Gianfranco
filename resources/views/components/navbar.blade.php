<nav class="navbar navbar-expand-lg navBgCustomColor">
  <div class="container-fluid">
    <a class="navbar-brand linkCustom" href="{{route('homepage')}}">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
            <a class="nav-link dropdown-toggle linkCustom" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">
              Ciao {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
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
    </div>
  </div>
</nav>