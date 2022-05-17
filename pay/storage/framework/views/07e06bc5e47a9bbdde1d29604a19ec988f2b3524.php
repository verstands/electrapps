<?php $__env->startSection('content'); ?>      
<center>
<div style="text-align: center;">
 <img src="https://electrapps.com/api_pay/assets/img/loading.jpeg" alt="" style="width: 100px;">
<h2>Confirmation de paiement en cours... Vous avez 200 secondes pour confirmer le paiement sur votre téléphone</h2>
 <img src="https://electrapps.com/api_pay/assets/img/phone.png" alt="" style="width: 100px;">
</div>
</center>             
<script>
    const traitement = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://frobill.cloud/api_pay/traitement.ajax.php?phone=<?php echo e($phone ?? ''); ?>&reference=<?php echo e($reference ?? ''); ?>");
    xhr.addEventListener("readystatechange", () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let reponse = xhr.response;
            if (reponse.success === 1) {
                window.location.href="<?php echo e(route('mobile')); ?>";
            }
            if(reponse.success === 2){
                window.location.href="<?php echo e(route('cancel_url')); ?>";
            }
                console.log(reponse);
        }
    });
    xhr.responseType = "json";
    xhr.send();
    

    }
    window.addEventListener("load",()=>{
            setInterval(()=>{
                traitement()
        },1000)
    })
</script>
         
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u333122526/domains/frobill.cloud/public_html/pay/resources/views/user/user6.blade.php ENDPATH**/ ?>