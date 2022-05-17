
<?php $__env->startSection('content'); ?>
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-calendar"></i> Creation d'une entreprise</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="<?php echo e(route('store_company')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="text" class="form-control" name="company" placeholder="Nom de la company"><br>
                <input type="number" class="form-control" name="tel" placeholder="Numero de telephone"><br>
                <input type="text" class="form-control" name="id_comp" placeholder="ID company"><br>
                <input type="text" class="form-control" name="nomre" placeholder="Nom du retrait"><br>
                <textarea name="des" id="" cols="100" rows="" class="form-control">Decription</textarea><br>
                <label for="">Telecharger un Logo</label>
                <input type="file"  name="logo" class="form-control"><br>
                <button class="btn btn-primary">Creer</button>
            </form>
        </div>
    </div>
</div>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/company.blade.php ENDPATH**/ ?>