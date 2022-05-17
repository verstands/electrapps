@extends('layout.travail')
@section('content')
@foreach($affichage as $affichages)
  <div class="back-to-top"></div>
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
              
           @endforeach
              <h1 class="text-center" style="color:black;">Entrez les détails</h1><br>
              <p></p>
              <form  id="contactForm" action="https://cardpayment.flexpay.cd/v1/pay" method="post">
                <input type="hidden" name="authorization" value="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzAxOTUyMDI1LCJzdWIiOiI3MjNmNjcyNzVkZjM0NThhZDliOTU0MTE1YjgwMDEwMyJ9.imRNblJdZMKNugxruyCI5Yy6zUZLL5rVX-Kcho5nQC0"/>
                <input type="hidden" name="merchant" value="ELECTRAPPS"/>
                <input type="hidden" name="callback_url" value="{{route('callback_url')}}"/>
                <input type="hidden" name="approve_url" value="{{route('approve_url')}}"/>
                <input type="hidden" name="cancel_url" value="{{route('approve_url')}}"/>
                <input type="hidden" name="decline_url" value="{{route('cancel_url')}}"/>
                <input type="hidden" name="description" value="{{$affichages->id_comp}}-CARD-{{$ref}}"/>
                  
                <input type="text" class="form-control" name="phone" value="{{$user}}" placeholder="Telephone">
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
                <input type="text" class="form-control" id="inputs" value="{{$amount}}" name="amount" placeholder="Montant"><br>
                <input type="hidden" class="form-control" value="{{$affichages->id_comp}}-CARD-{{$ref}}" name="reference" placeholder="Montant">
                <select name="currency"  id="" class="form-control">
                    <option value="USD">USD</option>           
                </select>
                <button type="submit" class="btn btn-primary btn-block mt-2">Payez maintenant</button>
              </form>
            </center>
        </div>
    </div>
  </header>
  
  <script type="text/javascript">
     window.addEventListener('load',()=>{
            document.querySelector('#contactForm').submit()
        })
  </script> 

@endsection
