<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $affichage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $affichages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="Electrapps, https://electrapps.com/">

  <title>Frobill Pay</title>
  <link rel="icon" type="image/x-icon" href="https://electrapps.com/css_pay/assets/img/logo_favicon.png">

  <link rel="stylesheet" href="<?php echo e(asset('travail/assets/css/maicons.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('travail/assets/css/bootstrap.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('travail/assets/vendor/animate/animate.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('travail/assets/css/theme.css')); ?>">

</head>
<body>

  <!-- Back to top button -->
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
            <center>
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-6">
                      <nav aria-label="Breadcrumb">
                      </nav>
                      <br>
                        <img src="/img/image_company/<?php echo e($affichages->logo); ?>" width="100" height="100" alt="">
                        <h1 class="text-center" style="color:black;"><?php echo e($affichages->nom); ?></h1><br>
                        <p><?php echo e($affichages->des); ?></p>
                        <?php $__currentLoopData = $don; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('user2',Crypt::encryptString($dons->id_off))); ?>" class="btn btn-primary btn-block" class="fab" style="border-radius: 10px;"><?php echo e($dons->type_off); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </center>
    </div>
  </header>

  <footer class="page-footer bg-image">
    <div class="container">
      </div>
      <p class="text-center" id="copyright">Copyright &copy; <?php echo e(date('Y')); ?>. develop by <a href="https://electrapps.com/" target="_blank">Electrapps</a></p>
    </div>
  </footer>

<script src="<?php echo e(asset('travail/assets/js/jquery-3.5.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('travail/assets/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('travail/assets/js/google-maps.js')); ?>"></script>

<script src="<?php echo e(asset('travail/assets/vendor/wow/wow.min.js')); ?>"></script>

<script src="<?php echo e(asset('travail/assets/js/theme.js')); ?>"></script>
  
</body>
</html>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\electrapps service\pay\resources\views/user/user.blade.php ENDPATH**/ ?>