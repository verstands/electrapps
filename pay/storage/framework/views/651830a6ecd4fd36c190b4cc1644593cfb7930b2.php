
<?php $__env->startSection('content'); ?>
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
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th>Date</th>
            <th>Nom</th>
            <th>Company</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $i = 1;
          ?>
          <?php $__currentLoopData = $don; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($dons->id_off); ?></td>
            <td><?php echo e($dons->type_off); ?></td>
            <td><?php echo e($dons->nom); ?></td>
            <td>
                <a href="<?php echo e(route('delete_don',$dons->id_off)); ?>" title="supprimer" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="<?php echo e(route('update_don',$dons->id_off)); ?>" title="modifier" class="btn btn-success btn-circle">
                    <i class="fas fa-exchange-alt"></i>
                </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/affiche_don.blade.php ENDPATH**/ ?>