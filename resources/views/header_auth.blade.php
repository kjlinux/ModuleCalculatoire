<!doctype html>
<html lang="fr" data-bs-theme="light">
  <head><script src="{{asset('js/color-modes.js')}}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Mon calculateur</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9"> 
    <!-- Custom styles for this template -->
    <link href="{{asset('css/headers.css')}}" rel="stylesheet">
  </head>
  <body>

    <main>

    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('image/logo.png')}}" alt="Logo">
        </a>
        <div class="d-flex align-items-center ms-auto">
          <a class="navbar-brand me-2" href="{{url('/')}}">
            <button type="button" class="btn btn-outline-primary">Me déconnecter</button>
          </a>
          <button type="button" class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
            </svg>
            <span class="visually ">Salut Username</span>
          </button>
        </div>
      </header>      
    </div>

    <div class="b-example-divider"></div>

    <div class="container">
        <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{$IMC}}" aria-current="page">IMC</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{$Convertisseur}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Convertisseur
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/longueur')}}">Longueur</a></li>
                <li><a class="dropdown-item" href="{{url('/poids')}}">Poids</a></li>
                <li><a class="dropdown-item" href="{{url('/devise')}}">Devise</a></li>
                <li><a class="dropdown-item" href="{{url('/temperature')}}">Température</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{$Perimetre}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Périmètre
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/pcarre')}}">Carré</a></li>
                <li><a class="dropdown-item" href="{{url('/prectangle')}}">Rectangle</a></li>
                <li><a class="dropdown-item" href="{{url('/ptriangle')}}">Triangle</a></li>
                <li><a class="dropdown-item" href="{{url('/pparallelogramme')}}">Parallélogramme</a></li>
                <li><a class="dropdown-item" href="{{url('/ptrapeze')}}">Trapèze</a></li>
                <li><a class="dropdown-item" href="{{url('/pcercle')}}">Cercle</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{$Aire}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Aire
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/acarre')}}">Carré</a></li>
                <li><a class="dropdown-item" href="{{url('/arectangle')}}">Rectangle</a></li>
                <li><a class="dropdown-item" href="{{url('/atriangle')}}">Triangle</a></li>
                <li><a class="dropdown-item" href="{{url('/aparallelogramme')}}">Parallélogramme</a></li>
                <li><a class="dropdown-item" href="{{url('/atrapeze')}}">Trapèze</a></li>
                <li><a class="dropdown-item" href="{{url('/adisque')}}">Disque</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{$Arithmetique}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Arithméthique
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/ppcm')}}">PPCM</a></li>
                <li><a class="dropdown-item" href="{{url('/pgcd')}}">PGCD</a></li>
                <li><a class="dropdown-item" href="{{url('/moyenne')}}">Moyenne des nombres</a></li>
                <li><a class="dropdown-item" href="{{url('/facteurpremier')}}">Facteur premier</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{$Denombrement}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dénombrement
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('/factoriel')}}">Factoriel</a></li>
                <li><a class="dropdown-item" href="{{url('/combinaison')}}">Combinaison</a></li>
                <li><a class="dropdown-item" href="{{url('/permutation')}}">Permutation</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{url('/historique')}}" class="nav-link {{$historique}}" aria-current="page">Historique des calculs</a></li>
        </ul>
        </header>
    </div>
    <br>
    </main>
    <div class="md-8">
      @yield('content')
    </div>
    <br>
    <br>
    <br>
    <div class="container d-flex justify-content-center">
      <footer class="fixed-bottom d-flex flex-wrap justify-content-center align-items-center py-1 border-top">
        <div class="col-md-7 align-items-center justify-content-center">
          <a href="{{url('/')}}" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1 d-flex justify-content-center">
            <img src="{{asset('image/logo_footer.png')}}" class="bi" width="30" height="28"/>
          </a>
          <span class="mb-2 mb-md-1 text-body-secondary d-flex justify-content-center">&copy;  2023 - Tous droits réservés</span>
        </div>
      </footer>
    </div>    

    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
  </body>
</html>