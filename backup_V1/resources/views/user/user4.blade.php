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
        
              <h1 class="text-center" style="color:black;">Entrez les détails</h1><br>
              <p></p>
              <form action="{{route('user4_action')}}" method="GET">
                 
                <input type="number" class="form-control" name="Nom"  placeholder="Nom Ex: KoKI"><br>
                <input type="number" class="form-control" name="Nom"  placeholder="Prenom Ex: Rabby"><br>
                <input type="number" class="form-control" name="phone"  placeholder="Téléphone Ex: 243xxxxxxxxx"><br>
                <h5><center>Selectionnez ou inserez le montant que vous aimeriez offrir</center></h5>         
                    <a href="#" onclick="cinq();" id="quinze">15</a>
                    <a href="#" onclick="vingtsinque();" id="vingtsinque">25</a>
                    <a href="#" onclick="cinqante();" id="cinqante">50</a>
                    <a href="#" onclick="cent();" id="cent">100</a>
                    <a href="#" onclick="cinqcent();" id="cinqcent">500</a>
                    <a href="#" onclick="mille();" id="mille">1000</a>
                    <a href="#" onclick="autre();"id="autre">Autre</a>
                    <div></div>
                    <br>
                    <div></div>
                <input type="number" class="form-control" id="inputs" disabled value="{{ session('montant_don') }}" name="amount" placeholder="Montant"><br>
                <input type="hidden" class="form-control" value="{{$affichages->id_comp}}-MOB-{{$ref}}" name="reference" placeholder="Montant">
                <select name="devise" id="" class="form-control">
                    @foreach($devise as $devises)
                        <option value="{{$devises->type_d}}">{{$devises->type_d}}</option>
                    @endforeach            
                </select>
                <button type="submit" class="btn btn-primary btn-block mt-2">Payez maintenant</button>
              </form>
            </center>
        </div>
    </div>
  </header>
  <script type="text/javascript">
            function cinq(){
            document.getElementById("inputs").value = "15";
            }
            function vingtsinque(){
            document.getElementById("inputs").value = "25";
            }
            function cinqante(){
            document.getElementById("inputs").value = "50";
            }
            function cent(){
            document.getElementById("inputs").value = "100";
            }
            function cinqcent(){
            document.getElementById("inputs").value = "500";
            }
            function mille(){
            document.getElementById("inputs").value = "1000";
            }
            function autre(){
            document.getElementById("inputs").value = '';
            }
        </script> 
<br>
@endforeach
@endsection
