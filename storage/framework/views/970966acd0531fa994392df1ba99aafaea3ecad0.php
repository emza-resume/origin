<?php $__env->startSection('title'); ?> فرصت شغلی <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;" class="jumbotron bg-white w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <br><br>
            <h5 class="text-center" style="background: blueviolet;width: 200px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">فرصت شغلی</h5>
            <br>
            <p class="px-4 py-2 mx-3 text-left" style="font-size: 17px;text-align: justify !important;">شما می‌توانید با ساخت رزومه کسب درآمد داشته باشید. به این صورت که برای ساخت هر رزومه از هر فردی مبلغ 10000 تومان دریافت کنید. اگر روزی 10 عدد رزومه بسازید می‌توانید ماهی 3 میلیون تومان درآمد داشته باشید.</p>
            <p class="px-4 py-2 mx-3 text-left" style="font-size: 17px;text-align: justify !important;">ساخت رزومه در این سایت رایگان است و شما می‌توانید با یک حساب بی‌نهایت رزومه بسازید.</p>
            <p class="px-4 py-2 mx-3 text-left" style="font-size: 17px;text-align: justify !important;">ساخت هر رزومه حداکثر ده دقیقه وقت نیاز دارد. یعنی شما میتوانید فقط با 2 ساعت کار در روز به درآمد ماهی 3 میلیون تومان برسید.</p>

            <br>
            <br>
        </div>
    </div>
</div>
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

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/job.blade.php ENDPATH**/ ?>