 <?php $__env->startSection('title'); ?> درباره این سامانه <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;" class="jumbotron bg-white w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <br>
            <br>
            <h5 class="text-center" style="background: blueviolet;width: 300px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">درباره این سامانه</h5>
            <br>
            <p class="text-justfy px-4 py-2 mx-3" style="font-size:15px !important;line-height: 30px;">
                در این دوره و زمانه میزان فارغ التحصیلان دانشگاه ها زیاد شده و برای استخدام در هر شرکت هر کس باید رزومه خود را ایجاد کند. دستی تهیه کردن رزومه سخت و زمان بر است و به همین دلیل اکثر افراد برای ایجاد رزومه از سامانه های رزومه ساز استفاده میکنند تا به راحتی و با سرعت رزومه خود را ایجاد کنند.
            </p>
            <p class="text-justfy px-4 py-2 mx-3" style="font-size:15px !important;line-height: 30px;">
                امضا سامانه رزومه ساز آنلاین است که امکان تهیه رایگان و راحت رزومه را فراهم میکند.
            </p>

            <br>
            <br>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
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

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/about-this-system.blade.php ENDPATH**/ ?>