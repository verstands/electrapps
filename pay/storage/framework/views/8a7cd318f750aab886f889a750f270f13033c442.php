  
  <?php $__env->startSection('login'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <div>
                        <?php if(isset($message)): ?>
                          <div><?php echo e($message); ?></div>
                        <?php endif; ?>
                    </div>
                    <h1 class="h4 text-gray-900 mb-4">Se connecter</h1>
                  </div>
                  <form class="user" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email...">
                    </div>
                    <div class="form-group">
                      <input type="password"  name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password...">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                   
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/pages/login.blade.php ENDPATH**/ ?>