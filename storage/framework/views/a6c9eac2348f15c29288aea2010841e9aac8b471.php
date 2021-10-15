<?php $__env->startSection('title'); ?> گزارش پرداخت موفق <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<br>
<br>
<div class="container">
<div class="row">
    <div style="border-width: 2px !important;" class="jumbotron bg-success w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 p-5 text-center text-white border border-success rounded-lg">
       <br>
        پرداخت با موفقیت انجام شد. از حمایت شما بی‌نهایت سپاسگزارم
       <br><br>
    </div>
</div>
</div>
<br>
<br>
<br>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
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
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/ok-donate.blade.php ENDPATH**/ ?>