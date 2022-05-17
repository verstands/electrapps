<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $affichage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affichages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="back-to-top"></div>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Frobill<span class="text-primary">-Pay</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item Disabled">
              <a class="nav-link" href="about.html">À propos</a>
            </li>

            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
            </nav>
            <br>
            <center>
              <img src="/img/image_company/<?php echo e($affichages->logo); ?>" width="50" height="50" alt="">
              <h1 class="text-center" style="color:black;">Choisissez votre méthode de paiement</h1><br>
              <p></p>
              <?php $__currentLoopData = $paiement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paiements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php if($paiements->type_lien == 1): ?>
                <a href="<?php echo e(route($paiements->lien_p, Crypt::encryptString($paiements->id_paiement))); ?>" id="submitButton" type="submit" class="btn btn-primary btn-block"><span class="<?php echo e($paiements->icon); ?>">  </span><?php echo e($paiements->type_p); ?><div class="fab"></div></a>

                <?php elseif($paiements->type_lien == 0): ?>

                 <div class="d-grid"><a href="<?php echo e(($paiements->lien_p)); ?>" class="btn btn-primary btn-block" id="submitButton" type="submit"><i class="<?php echo e($paiements->icon); ?>">  </i><?php echo e($paiements->type_p); ?></a></div>

                <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               <a href="<?php echo e(route('user',Crypt::encryptString(session('eglise')))); ?>" class="btn btn-primary btn-split">RETOUR<div class="fab"><span class="mai-return-up-back"></span></div></a>
            </center>
        </div>
    </div>
  </header>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.travail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/user/user2.blade.php ENDPATH**/ ?>