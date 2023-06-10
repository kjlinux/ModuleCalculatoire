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

        <a class="navbar-brand" href="#">
            <img src="{{asset('image/logo.png')}}"  alt="Logo">
        </a>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Se connecter</button>
        <button type="button" class="btn btn-primary">S'inscrire</button>
      </div>
    </header>
  </div>

  <div class="b-example-divider"></div>

  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">IMC</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Convertisseur
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Longueur</a></li>
              <li><a class="dropdown-item" href="#">Poids</a></li>
              <li><a class="dropdown-item" href="#">Devise</a></li>
              <li><a class="dropdown-item" href="#">Température</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Périmètre
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Carré</a></li>
              <li><a class="dropdown-item" href="#">Triangle</a></li>
              <li><a class="dropdown-item" href="#">Parallélogramme</a></li>
              <li><a class="dropdown-item" href="#">Trapèze</a></li>
              <li><a class="dropdown-item" href="#">Cercle</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Aire
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Carré</a></li>
              <li><a class="dropdown-item" href="#">Triangle</a></li>
              <li><a class="dropdown-item" href="#">Parallélogramme</a></li>
              <li><a class="dropdown-item" href="#">Trapèze</a></li>
              <li><a class="dropdown-item" href="#">Disque</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Arithméthique
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">PPCM</a></li>
              <li><a class="dropdown-item" href="#">PGCD</a></li>
              <li><a class="dropdown-item" href="#">Moyenne des nombres</a></li>
              <li><a class="dropdown-item" href="#">Facteur premier</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dénombrement
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Factoriel</a></li>
              <li><a class="dropdown-item" href="#">Combinaison</a></li>
              <li><a class="dropdown-item" href="#">Permutation</a></li>
            </ul>
        </li>
      </ul>
    </header>
  </div>
  <br>
</main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Poids</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer poids">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Taille en cm</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Taille">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Résultat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="En surpoids" readonly>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Calculer</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
  </body>
</html>