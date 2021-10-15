<?php $__env->startSection('title'); ?>

    فرم درخواست ایجاد وب سایت شخصی

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="panel panel-primary" style="min-height:400px;">
    <div class="alert alert-success w-75 mx-auto p-5 m-5">
        <strong> عملیات موفق </strong>درخواست شما با موفقیت ثبت شد و به زودی مورد بررسی قرار خواهد گرفت.</a>
    </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
<script>
  $("#website").click(function(){
    $("#websitex").text(".emza.app");
  });
  $("#website").keyup(function(){
    $("#websitex").text($("#website").val()+".emza.app");
  });

</script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/ok-request-website.blade.php ENDPATH**/ ?>