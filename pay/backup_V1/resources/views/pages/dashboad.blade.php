@extends('layout.body')
@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre de company</div>
                      @foreach($id_eg as $id_egs)
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$id_egs->id_eg}}</div>
                      @endforeach
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example  dollar-sign fa-2x text-gray-300-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre des utilisateurs</div>
                      @foreach($user as $users)
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->user}}</div>
                      @endforeach
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">sommes total de transaction  usd</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sommes_tot}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tout les transactions</div>
                      @foreach($trans as $transs)
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transs->trans}}</div>
                      @endforeach
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row"> 
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">sommes total de transaction  cdf</div>
                        
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sommes_totcdf}}</div>
                        
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Les sous administrateur</div>
                        @foreach($admin as $admins)
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$admins->admin}}</div>
                        @endforeach
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total poucentage USD</div>
                         @foreach($pourcentageUSD as $pourcentageUSDs)
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{($sommes_tot * $pourcentageUSDs->titre) / 100 }}</div>
                         @endforeach
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total pourcentage CDF</div>
                        
                        @foreach($pourcentageCDF as $pourcentageCDFs)
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{($sommes_totcdf * $pourcentageCDFs->titre) / 100 }}</div>
                         @endforeach
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-money-bill fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Les transaction du retrait</div>
                        @foreach($retrait as $paiements)
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$paiements->retrait}} USD</div>
                        @endforeach
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-exchange-alt fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Les transaction du retrait</div>
                        @foreach($retraitCDF as $paiements)
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$paiements->retrait}} CDF</div>
                        @endforeach
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-exchange-alt fa-2x "></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          
          <!-- Content Row -->

          

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Graphique</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div >
                     
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
                 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const labels = [
                      'Janvier',
                      'Fevrier',
                      'Mars',
                      'Avril',
                      'Mai',
                      'Juin',
                      'Juillet',
                      'Aout',
                      'Septembre',
                      'Octobre',
                      'Novembre',
                      'Decembre',
                      
                    ];
                    
                    const janvier = '@foreach($janvier as $janviers){{$janviers->date_t}}@endforeach';
                    const fervier = '@foreach($fervier as $ferviers){{$ferviers->date_t}}@endforeach';
                    const mars = '@foreach($mars as $marss){{$marss->date_t}}@endforeach';
                    const avril = '@foreach($avril as $avrils){{$avrils->date_t}}@endforeach';
                    const mai = '@foreach($mai as $mais){{$mais->date_t}}@endforeach';
                    const juin = '@foreach($juin as $juins){{$juins->date_t}}@endforeach';
                    const juillet = '@foreach($juillet as $juillets){{$juillets->date_t}}@endforeach';
                    const aout = '@foreach($aout as $aouts){{$aouts->date_t}}@endforeach';
                    const septembre = '@foreach($septembre as $septembres){{$septembres->date_t}}@endforeach';
                    const octobre = '@foreach($octobre as $octobres){{$octobres->date_t}}@endforeach';
                    const novembre = '@foreach($novembre as $novembres){{$novembres->date_t}}@endforeach';
                    const decembre = '@foreach($decembre as $decembres){{$decembres->date_t}}@endforeach';
                    const data = {
                      labels: labels,
                      datasets: [{
                        label: '',
                        backgroundColor: '#4066d4 ',
                        borderColor: '#4066d4',
                        data: [
                          janvier,
                          fervier,
                          mars,
                          avril,
                          mai,
                          juin,
                          juillet,
                          aout,
                          septembre,
                          octobre,
                          novembre,
                          decembre
                        ],
                      }]
                    };
                  
                    const config = {
                      type: 'line',
                      data: data,
                      options: {}
                    };
                  </script>
                  <script>
                    const myChart = new Chart(
                      document.getElementById('myChart'),
                      config
                    );
                  </script>
                </div>
              </div>
            </div>
      
          <div class="row">
            <div class="col-lg-12 mb-12">
              <div class="card shadow mb-12">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary">Les Transaction</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Numero</th>
                          <th>Date</th>
                          <th>Numero transaction</th>
                          <th>Company</th>
                          <th>Montant</th>
                          <th>Devise</th>
                          <th>Paiement</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Numero</th>
                          <th>Date</th>
                          <th>Numero transaction</th>
                          <th>Company</th>
                          <th>Montant</th>
                          <th>Devise</th>
                          <th>Paiement</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      @php
                      $i = 1;
                      @endphp
                      @foreach($affiche as $affiches)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$affiches->date_t}}</td>
                          <td>{{$affiches->id_trans}}</td>
                          <td>{{$affiches->nom}}</td>
                          <td>{{$affiches->montant}}</td>
                          <td>{{$affiches->id_devise}}</td>
                          <td>{{$affiches->type_p}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                  </div>
               </div>
              </div>
            </div>  
          </div>
          <div>
            <br>
          <div class="row">
            <div class="col-lg-12 mb-12">
              <div class="card shadow mb-12">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-success"></i> Les sous administrateur  en ligne </h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Email</th>
                          <th>Company</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Email</th>
                          <th>Company</th>
                        </tr>
                        
                      </tfoot>
                      <tbody>
                        @foreach($sous_admin as $sous_admins)
                        <tr>
                          <td><i class="fa fa-circle text-success"></i></td>
                          <td><i class="fa fa-user-circle" style="font-size:25px;"></i></td>
                          <td>{{$sous_admins->email}}</td>
                          <td>{{$sous_admins->nom}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>    
    </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
@endsection