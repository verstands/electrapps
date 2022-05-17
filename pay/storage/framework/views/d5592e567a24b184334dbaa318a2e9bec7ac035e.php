
<?php $__env->startSection('content'); ?>
<div class="container">
    <br>    
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-circle"></i> Retrait</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="<?php echo e(route('Sousadmin_active')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <select name="eglise" class="form-control">
                    <?php $__currentLoopData = $eglise; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eglises): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($eglises->id_eg); ?>"><?php echo e($eglises->nom); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br>
                <input type="text" class="form-control" name="Login" placeholder="Login"><br>
                <input type="email" class="form-control" name="email" placeholder="email"><br>
                <input type="text" class="form-control" name="password" placeholder="password"><br>
                <button class="btn btn-primary">Effectuer</button>
            </form>
        </div>
    </div>
</div> 

</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/utilisateur.blade.php ENDPATH**/ ?>