
<?php $__env->startSection('content'); ?>
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-shopping-cart"></i> Profil</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <center>
                <i class="fa fa-user-circle" style="font-size:100px;"></i>
                </center>
            <form action="<?php echo e(route('Sprofil_active')); ?>" method="GET">
            <?php echo csrf_field(); ?>
              <?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label for="">Ancien mot de passe</label>
                <input type="password" class="form-control" value="" name="apassword" ><br>
                <label for="">Login</label><br>
                <input type="text" class="form-control" value="<?php echo e($profils->login); ?>" name="login" placeholder="Nom"><br>
                <label for="">Password</label><br>
                <input type="text" class="form-control" value="<?php echo e(sha1($profils->password)); ?>" name="password" placeholder="Nom"><br>
                <label for="">Email</label><br>
                <input type="email" class="form-control"  value="<?php echo e($profils->email); ?>" name="email" placeholder="Nom"><br>
                <button class="btn btn-primary">Modifier</button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/profil.blade.php ENDPATH**/ ?>