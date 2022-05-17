
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-money-bill-alt"></i> Les Paiement</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>N°</th>
            <th>Numero  de  paiement</th>
            <th>Nom</th>
            <th>Company</th>
            <th>Icon</th>
            <th>Lien</th>
            <th>Type de lien</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>N°</th>
            <th>Numero de paiement</th>
            <th>Nom</th>
            <th>Company</th>
            <th>Icon</th>
            <th>Lien</th>
            <th>Type de lien</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
         <?php
            $i = 1;
          ?>
          <?php $__currentLoopData = $paiement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paiements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($paiements->id_paiement); ?></td>
            <td><?php echo e($paiements->type_p); ?></td>
            <td><?php echo e($paiements->nom); ?></td>
            <td><?php echo e($paiements->icon); ?></td>
            <td><?php echo e($paiements->lien_p); ?></td>
            <td><?php echo e($paiements->type_lien); ?></td>
            <td>
                <a href="<?php echo e(route('delete_paie',$paiements->id_paiement)); ?>" title="supprimer" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="<?php echo e(route('update_paie',$paiements->id_paiement)); ?>" title="modifier" class="btn btn-success btn-circle">
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
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/affiche_paiement.blade.php ENDPATH**/ ?>