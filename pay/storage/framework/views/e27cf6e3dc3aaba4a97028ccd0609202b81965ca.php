
<?php $__env->startSection('content'); ?>
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-money-bill-alt"></i> Ajouter un paiement</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action=""  method="POST">
            <?php echo csrf_field(); ?>
                <input type="text" class="form-control" name="nom" placeholder="Nom"><br>
                <input type="text" class="form-control" name="icon" placeholder="Icon font-awesome"><br>
                <input type="text" class="form-control" name="lien" placeholder="Lien"><br>
                <label for="">Company</label><br>
                <select name="company" class="form-control">
                    <label for="">Company</label>
                    <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                    <option value="<?php echo e($companys->id_eg); ?>"><?php echo e($companys->nom); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select><br>
                <label for="">Lien vers le un site : 0</label><br>
                <label for="">Lien vers le une page : 1</label>
                <select name="tlien" id="" class="form-control">
                    <label >Company</label>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select><br>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/paiement.blade.php ENDPATH**/ ?>