
<?php $__env->startSection('content'); ?>
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme total  en USD</div>
                                
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($approuve_somme); ?>$</div>
                               
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme total  en CDF</div>
                            
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($approuve_sommeCDF); ?> Fc</div>
                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    </div>
    </div>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-exchange-alt"></i> Les Trasanctions du retrait</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>Numero</th>
            <th>Date</th>
            <th>utilisateurs</th>
            <th>Montant</th>
            <th>Devise</th>
            <th>Company</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Numero</th>
            <th>Date</th>
            <th>utilisateurs</th>
            <th>Montant</th>
            <th>Devise</th>
            <th>Company</th>
            <th>Statut</th>
          </tr>
          </tr>
        </tfoot>
        <tbody>
        <?php
          $i = 1;
        ?>
        <?php $__currentLoopData = $approuve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affiches): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($affiches->date_retrait); ?></td>
            <td><?php echo e($affiches->user); ?></td>
            <td><?php echo e($affiches->montant); ?></td>
            <td><?php echo e($affiches->type_d); ?></td>
            <td><?php echo e($affiches->nom); ?></td>
           
            <td><p style="color:green;">Approuvé</p></td>
          
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/approuve.blade.php ENDPATH**/ ?>