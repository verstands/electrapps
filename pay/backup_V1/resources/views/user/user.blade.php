@extends('layout.user')
@section('content')
@foreach($affichage as $affichages)

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="Electrapps, https://electrapps.com/">

  <title>Frobill Pay</title>
  <link rel="icon" type="image/x-icon" href="https://electrapps.com/css_pay/assets/img/logo_favicon.png">

  <link rel="stylesheet" href="{{asset('travail/assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('travail/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('travail/assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('travail/assets/css/theme.css')}}">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Frobill<span class="text-primary">-Pay</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item Disabled">
              <a class="nav-link" href="about.html">À propos</a>
            </li>

            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
            <center>
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-6">
                      <nav aria-label="Breadcrumb">
                      </nav>
                      <br>
                        <img src="/img/image_company/{{$affichages->logo}}" width="100" height="100" alt="">
                        <h1 class="text-center" style="color:black;">{{$affichages->nom}}</h1><br>
                        <p>{{$affichages->des}}</p>
                        @foreach($don as $dons)
                        <a href="{{route('user2',Crypt::encryptString($dons->id_off))}}" class="btn btn-primary btn-block" class="fab" style="border-radius: 10px;">{{$dons->type_off}}</a>
                        @endforeach
                  </div>
              </div>
          </center>
    </div>
  </header>

  <footer class="page-footer bg-image">
    <div class="container">
      </div>
      <p class="text-center" id="copyright">Copyright &copy; {{ date('Y')}}. develop by <a href="https://electrapps.com/" target="_blank">Electrapps</a></p>
    </div>
  </footer>

<script src="{{asset('travail/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('travail/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('travail/assets/js/google-maps.js')}}"></script>

<script src="{{asset('travail/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('travail/assets/js/theme.js')}}"></script>
  
</body>
</html>
@endforeach
@endsection