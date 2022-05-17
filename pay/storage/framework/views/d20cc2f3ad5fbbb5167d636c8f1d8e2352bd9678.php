
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-exchange-alt"></i> Les sous administrateur</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>Numero</th>
            <th>Login</th>
            <th>Password</th>
            <th>Email</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Numero</th>
            <th>Login</th>
            <th>Password</th>
            <th>Email</th>
            <th>Statut</th>
          </tr>
          </tr>
        </tfoot>
        <tbody>
        <?php
          $i = 1;
        ?>
        <?php $__currentLoopData = $sous_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affiches): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($affiches->login); ?></td>
            <td><?php echo e($affiches->password); ?></td>
            <td><?php echo e($affiches->email); ?></td>
            <td>
                <a href="<?php echo e(route('delete_sousadmin',$affiches->id_admin)); ?>" title="supprimer" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="<?php echo e(route('update_sousadmin',$affiches->id_admin)); ?>" title="modifier" class="btn btn-success btn-circle">
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/affchige_sous.blade.php ENDPATH**/ ?>