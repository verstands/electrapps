@extends('layout.travail')
@section('content')
@foreach($affichage as $affichages)
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
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
            </nav>
            <br>
            <center>
              <img src="/img/image_company/{{$affichages->logo}}" width="50" height="50" alt="">
              <h1 class="text-center" style="color:black;">Choisissez votre méthode de paiement</h1><br>
              <p></p>
              @foreach($paiement as $paiements) 
                @if($paiements->type_lien == 1)
                <a href="{{route($paiements->lien_p, Crypt::encryptString($paiements->id_paiement))}}" id="submitButton" type="submit" class="btn btn-primary btn-block"><span class="{{$paiements->icon}}">  </span>{{$paiements->type_p}}<div class="fab"></div></a>

                @elseif($paiements->type_lien == 0)

                 <div class="d-grid"><a href="{{($paiements->lien_p)}}" class="btn btn-primary btn-block" id="submitButton" type="submit"><i class="{{$paiements->icon}}">  </i>{{$paiements->type_p}}</a></div>

                @endif
               @endforeach

               <a href="{{route('user',Crypt::encryptString(session('eglise')))}}" class="btn btn-primary btn-split">RETOUR<div class="fab"><span class="mai-return-up-back"></span></div></a>
            </center>
        </div>
    </div>
  </header>
<br>
@endforeach
@endsection