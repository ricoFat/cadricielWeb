<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--CDN mdbootstrap-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title> @yield('title')</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid align-content-center">
      @php $lang = session('locale') @endphp
      <a class="navbar-brand align-content-center" href="#">Maisonneuve 2295546</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"> @lang('lang.text_home')</a>
          </li>
          <!-- Etudiant dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link  active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('lang.text_etudiant')</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('etudiant.index')}}">@lang('lang.text_lister')</a></li>
              <li><a class="dropdown-item" href="{{ route('etudiant.create') }}">@lang('lang.text_ajouter')</a></li>
            </ul>

            <li class="nav-item dropdown">
              <a class="nav-link  active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Forum</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('forum.index')}}">@lang('lang.text_lister')</a></li>
                <li><a class="dropdown-item" href="{{ route('forum.create') }}">@lang('lang.text_ajouter')</a></li>
              </ul>
            
        </ul>
        <ul class="navbar-nav ml-auto">
          <a class="navbar-brand" href="#" > @lang('lang.text_hello')  {{Auth::user() ? Auth::user()->name : 'Guest'}}</a>

          <a class="nav-link @if($lang == 'fr') text-info @endif" href="{{route('lang', 'fr')}}"> <i class='flag flag-france'></i></a>
          <a class="nav-link @if($lang == 'en') text-info @endif" href="{{route('lang', 'en')}}"><i class='flag flag-united-kingdom'></i></a>
          @auth
          <!-- Logout link -->
          <li class="nav-item" ><a class="nav-link "  href="{{ route('logout') }}" >Logout</a></li>
          @else
          <li class="nav-item">
            <a class="nav-link " href="{{route('login')}}">@lang('lang.text_login')</a>
          </li>
          <li class="nav-item me-3">
             <a class="nav-link" href="{{route('registration')}}">@lang('lang.text_registration')</a>
          </li>
          @endauth
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
        <div class="row justify-content-center">
          <div class="col-6">
              @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
              @if(!$errors->isEmpty())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

          </div>
      </div>

@yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

