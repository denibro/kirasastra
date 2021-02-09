    
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">KiraSastra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">

              
              @if (auth()->user())
                <a class="nav-item nav-link sorot" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link sorot" href="#">Posting</a>
                <a class="nav-item nav-link sorot" href="#">Policy</a>
                <a class="nav-item nav-link sorot" href="#">Abaout</a>

                <li class="nav-item dropdown tes">
                  <a class="dropdown-toggle akun" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      @if (auth()->user()->role == 'admin')
                        <a class="dropdown-item" href="{{route('dasboardadmin')}}">Dashboard Admin</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>                       
                      @else
                        <a class="dropdown-item" href="{{route('dasboardmember')}}">Profil</a>  
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                      @endif     
                    </div>
                </li>   
              @else
                <a class="nav-item nav-link sorot" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link sorot" href="#">Posting</a>
                <a class="nav-item nav-link sorot" href="#">Policy</a>
                <a class="nav-item nav-link sorot" href="#">Abaout</a>
                <a class="nav-item btn tombol_sign_in" href="{{ route('login') }}">Sign In</a>
              @endif
          </div>
        </div>
      </nav>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">PuJANgGA pUjanggi</h1>
          <h1 class="display-5">Seberapa Puitiskah</h1>
          <h1 class="display-6">Kamu</h1>
        </div>
      </div>

      @yield('content')

