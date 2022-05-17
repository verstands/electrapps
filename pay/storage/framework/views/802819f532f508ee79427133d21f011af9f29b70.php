
<?php $__env->startSection('content'); ?>

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
            <th>Action</th>
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
            <td> <a href="<?php echo e(route('update_approuve_retrait', $affiches->id_retrait)); ?>" >Approuver</a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/apporuve.blade.php ENDPATH**/ ?>