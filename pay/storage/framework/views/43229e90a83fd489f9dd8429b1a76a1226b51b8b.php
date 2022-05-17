
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="col-xl-12 col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Somme total  en USD</div>
                                <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($sommes->sommeusd); ?> $</div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $somme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sommes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($sommes->sommecdf); ?> Fc</div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-circle"></i> Retrait</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="<?php echo e(route('retrait_active')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="number" class="form-control" name="montant" placeholder="montant"><br>
                <select name="devise" class="form-control">
                    <?php $__currentLoopData = $devise; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devises): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($devises->id_devise); ?>"><?php echo e($devises->type_d); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br>
                <button class="btn btn-primary">Effectuer</button>
            </form>
        </div>
    </div>
</div> 

</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/page_admin/retrait.blade.php ENDPATH**/ ?>