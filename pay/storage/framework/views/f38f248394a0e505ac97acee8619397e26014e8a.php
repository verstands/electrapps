
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-calendar"></i> Les company desactivées</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Lien</th>
            <th>Description</th>
            <th>Telephone</th>
            <th>ID Company</th>
            <th>Active</th>
            <th>Nom du retrait</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Lien</th>
            <th>Description</th>
            <th>Telephone</th>
            <th>ID Company</th>
            <th>Active</th>
            <th>Nom du retrait</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $i = 1;
          ?>
          <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($companys->nom); ?></td>
            <td><img src="img/image_company/<?php echo e($companys->logo); ?>" alt="" width="100" height="60"></td>
            <td><a href="<?php echo e(route('user',Crypt::encryptString($companys->id_eg))); ?>"><?php echo e(route('user',Crypt::encryptString($companys->id_eg))); ?></a></td>
            <td><?php echo e($companys->des); ?></td>
            <td><?php echo e($companys->tel); ?></td>
            <td><?php echo e($companys->id_comp); ?></td>
            <td><?php echo e($companys->active); ?></td>
            <td><?php echo e($companys->nomre); ?></td>
            <td>
                <a href="<?php echo e(route('delete_company',$companys->id_eg)); ?>" title="supprimer" class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="<?php echo e(route('update_company',$companys->id_eg)); ?>" title="modifier" class="btn btn-success btn-circle">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="<?php echo e(route('active_company',$companys->id_eg)); ?>" title="activer" class="btn btn-success ">
                    Activer
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
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/affiche_company_des.blade.php ENDPATH**/ ?>