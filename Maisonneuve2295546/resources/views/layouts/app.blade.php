<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title> @yield('title')</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid align-content-center">
      <a class="navbar-brand align-content-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-house-door me-2 " viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
      </svg>Maisonneuve 2295546</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Étudiants
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('etudiant.index')}}">Lister</a></li>
              <li><a class="dropdown-item" href="{{ route('etudiant.create') }}">Ajouter</a></li>
            </ul>
            
        </ul>
        <ul class="navbar-nav ml-auto">
          <a class="nav-link{{--  @if($lang == 'fr') text-info @endif--}}"  {{-- href="{{route('lang', 'fr')}}" --}}>Francais<i class='flag flag-france'></i></a>
                    <a class="nav-link {{-- @if($lang == 'en') text-info @endif --}}" {{-- href="{{route('lang', 'en')}}" --}}>Anglais <i class='flag flag-united-states'></i></a>
          <li class="nav-item">
            <a class="nav-link " data-bs-toggle="modal" data-bs-target="#loginModal"  href="{{route('login')}}">Connexion</a>
          </li>
          <li class="nav-item me-3">
             <a class="nav-link" href="{{route('registration')}}">Enregistrer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-6  mt-5">
                   @yield('titleHeader')
                </h1>
            </div>
        </div>

         <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{route('login')}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                          @if($errors->has('email'))
                              <div class="text-danger mt-2">
                                  {{$errors->first('email')}}
                              </div>
                          @endif
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                          @if($errors->has('password'))
                              <div class="text-danger mt-2">
                                  {{$errors->first('password')}}
                              </div>
                          @endif
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-dark">Login</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>