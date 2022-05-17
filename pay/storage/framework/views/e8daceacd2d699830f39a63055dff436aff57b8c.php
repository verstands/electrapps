
<?php $__env->startSection('content'); ?>    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="Electrapps, https://electrapps.com/">

  <title>Frobill Pay</title>
    <link rel="icon" type="image/x-icon" href="https://electrapps.com/css_pay/assets/img/suc_icon.png">

  <link rel="stylesheet" href="https://electrapps.com/css_pay/assets/css/maicons.css">

  <link rel="stylesheet" href="https://electrapps.com/css_pay/assets/css/bootstrap.css">

  <link rel="stylesheet" href="https://electrapps.com/css_pay/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="https://electrapps.com/css_pay/assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Frobill<span class="text-primary">-Pay</span></a>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">PAIEMENT EFFECTUÉ AVEC SUCCES</h1>
            <p class="text-lg text-grey mb-5">Que Dieu vous bénisse abondamment</p>
            <a href="<?php echo e(route('user',Crypt::encryptString(session('eglise')))); ?>" class="btn btn-primary btn-split">Retour à la page d'accueil<div class="fab"></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="https://electrapps.com/css_pay/assets/img/suc_icon.png" height="200" width="200" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <footer class="page-footer bg-image">
    <div class="container">
      </div>
      <p class="text-center" id="copyright">Copyright &copy; 2020. develop by <a href="https://electrapps.com/" target="_blank">Electrapps</a></p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/user/chargement.blade.php ENDPATH**/ ?>