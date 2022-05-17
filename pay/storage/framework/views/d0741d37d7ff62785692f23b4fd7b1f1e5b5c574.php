
<?php $__env->startSection('content'); ?>
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-shopping-cart"></i> Ajouter un don</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="" method="POST">
            <?php echo csrf_field(); ?>
                <input type="text" class="form-control" name="nom" placeholder="Nom"><br>
                <label >Company</label>
                <select name="company" id="" class="form-control">
                    <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                    <option value="<?php echo e($companys->id_eg); ?>"><?php echo e($companys->nom); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br>
                <button class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/don.blade.php ENDPATH**/ ?>