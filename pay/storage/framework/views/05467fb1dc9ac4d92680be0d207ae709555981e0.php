<?php $__env->startSection('content'); ?>
  
    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme total  en USD</div>
                      <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(($totudss - $totPourUSD)); ?>$</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme total en CDF</div>
                      <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(($totcdff - $totPourCDF)); ?> CDF</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme restant  en USD</div>
                      <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div style="color:red;font-size:20px; font-weight: bold;"><?php echo e($sommes->sommeusd); ?> $</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme restant en CFD </div>
                      <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($sommes->sommecdf); ?> Fc</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Somme retiré en USD</div>
                      <?php $__currentLoopData = $retraitUSD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $retraitUSDs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($retraitUSDs->usd); ?> $</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill-alt fa-2x "></i>
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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Somme retiré en CDF</div>
                      <?php $__currentLoopData = $retraitCDF; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $retraitCDFs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($retraitCDFs->cdf); ?> Fc</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill-alt fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre des utilisateurs</div>
                      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($users->user); ?></div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x "></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Les transanction d'aujourdhui</div>
                      <?php $__currentLoopData = $trans_today; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans_todays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($trans_todays->today); ?></div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Les transanctions </div>
                      <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($transs->trans); ?></div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Les transanctions retrait</div>
                      <?php $__currentLoopData = $retrait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($transs->retrait); ?></div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Les  sous administrateur</div>
                      <?php $__currentLoopData = $enligne_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($transs->enligne); ?></div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x"></i>
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
                    
                    const janvier = '<?php $__currentLoopData = $janvier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $janviers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($janviers->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const fervier = '<?php $__currentLoopData = $fervier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ferviers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($ferviers->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const mars = '<?php $__currentLoopData = $mars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($marss->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const avril = '<?php $__currentLoopData = $avril; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $avrils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($avrils->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const mai = '<?php $__currentLoopData = $mai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($mais->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const juin = '<?php $__currentLoopData = $juin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($juins->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const juillet = '<?php $__currentLoopData = $juillet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juillets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($juillets->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const aout = '<?php $__currentLoopData = $aout; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aouts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($aouts->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const septembre = '<?php $__currentLoopData = $septembre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $septembres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($septembres->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const octobre = '<?php $__currentLoopData = $octobre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $octobres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($octobres->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const novembre = '<?php $__currentLoopData = $novembre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novembres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($novembres->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
                    const decembre = '<?php $__currentLoopData = $decembre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $decembres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($decembres->date_t); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
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
            </div>
      
          <div class="row">
            <div class="col-lg-12 mb-12">
              <div class="card shadow mb-12">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary">Les Transactions</h6>
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
                      <?php
                        $i = 1;
                      ?>
                        <?php $__currentLoopData = $affiche_dashboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affiche_dashboards): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                        <tr>
                          <td><?php echo e($i++); ?></td>
                          <td><?php echo e($affiche_dashboards->date_t); ?></td>
                          <td><?php echo e($affiche_dashboards->id_trans); ?></td>
                          <td><?php echo e($affiche_dashboards->nom); ?></td>
                          <td>
              <?php
                 $v = ($affiche_dashboards->montant * 7)/100; 
              ?>
              <?php echo e($affiche_dashboards->montant - $v); ?>

            </td>
                          <td><?php echo e($affiche_dashboards->id_devise); ?></td>
                          <td><?php echo e($affiche_dashboards->type_p); ?></td>
                        </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                   </table>
                  </div>
               </div>
              </div>
            </div>  
          </div>
          <div>
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
                        <?php $__currentLoopData = $enligne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sous_admins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><i class="fa fa-circle text-success"></i></td>
                          <td><i class="fa fa-user-circle" style="font-size:25px;"></i></td>
                          <td><?php echo e($sous_admins->email); ?></td>
                          <td><?php echo e($sous_admins->nom); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/index.blade.php ENDPATH**/ ?>