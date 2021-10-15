<?php $__env->startSection('title'); ?> ارسال مجدد کد فعال سازی <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(@$errorm == 1): ?>
            <div class="alert alert-danger" role="alert">
                کاربری با این شماره موبایل وجود ندارد.
            </div><?php endif; ?>
            <div class="card bg-primary mb-4">
                <div class="card-header text-white font-weight-bold" style="font-size:15px;"><?php echo e(__('فرم ارسال مجدد کد فعال سازی')); ?></div>

                <div class="card-body bg-image-blue"
                    style="background-image:url(<?php echo e(asset('img/back-1.jpg')); ?>) !important;">
                    <form method="POST" action="check-mobile">
                        <?php echo e(session('mobile')); ?>

                        
                        <?php echo csrf_field(); ?>
                        <p class="text-center font-weight-bold">شماره موبایل خود را برای ارسال مجدد کد فعال سازی در کادر زیر درج کنید.</p>
                        <div class="form-group row">

                            <div style="margin: 0 auto;">
                                <input id="mobile" type="text" maxlength="11"  style="color: black !important;letter-spacing: 2px;"
                                    class="form-control text-font-20 bg-light-yellow border-w" name="mobile"
                                     required

                                    autofocus>

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div style="margin: 0 auto;">
   
                                <button type="submit" id="submit" class="btn btn-primary font-weight-bold">
                                    <?php echo e(__('ارسال کد فعال سازی')); ?>

                                </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    var cle = 0;
    $("#mobile").keyup(function () {
        cle += 1;
        if (cle == 11) {
            cle = 0;
            $("#submit").focus();
        }
    });
</script>
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

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/auth/mobile.blade.php ENDPATH**/ ?>