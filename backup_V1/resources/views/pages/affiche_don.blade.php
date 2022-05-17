@extends('layout.body')
@section('content')
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-shopping-cart"></i> Les Dons</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
             <th>N°</th>
            <th>Date</th>
            <th>Nom</th>
            <th>Company</th>
            <th>Montant</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th>Date</th>
            <th>Nom</th>
            <th>Company</th>
            <th>Montant</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @php
            $i = 1;
          @endphp
          @foreach($don as $dons)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$dons->id_off}}</td>
            <td>{{$dons->type_off}}</td>
            <td>{{$dons->nom}}</td>
            <td>{{$dons->montant}}</td>
            <td>
                <a href="{{route('delete_don',$dons->id_off)}}" title="supprimer" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="{{route('update_don',$dons->id_off)}}" title="modifier" class="btn btn-success btn-circle">
                    <i class="fas fa-exchange-alt"></i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
@endsection 