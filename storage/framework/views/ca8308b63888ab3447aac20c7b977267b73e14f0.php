<?php $__env->startSection('title'); ?> بازخورد <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;width: 90% !important;"
            class="jumbotron bg-white w-100 p-3 pb-1 p-sm-1 mt-2 mx-3 border border-info rounded-lg">
            
            <h5 class="text-center" style="background: blueviolet;width: 200px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">فرم بازخورد</h5>

            <form action="/save-feedback" method="post" class="needs-validation m-4" novalidate>
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="uname">نام:</label>
                    <input type="text" class="form-control" id="name" placeholder="لطفا نام خود را وارد کنید"
                        name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">آدرس ایمیل:</label>
                    <input type="email" class="form-control text-right" id="email" placeholder="" name="email" required>
                </div>
                <div class="form-group">
                    <label for="bug">نوع مشکل:</label>
                    <select class="form-control" id="bug" name="bug">
                        <option value="به درستی در موبایل نمایش داده نمیشود">به درستی در موبایل نمایش داده نمیشود
                        </option>
                        <option value="در یک مرورگر خاص به درستی نمایش داده نمیشود">در یک مرورگر خاص به درستی نمایش داده
                            نمیشود</option>
                        <option value="در عملیات پرداخت مشکل وجود دارد">در عملیات پرداخت مشکل وجود دارد</option>
                        <option value="رزومه شما به درستی ساخته نشده است">رزومه شما به درستی ساخته نشده است</option>
                        <option value="در هنگام پر کردن اطلاعات رزومه مشکلی برای من پیش آمد">در هنگام پر کردن اطلاعات
                            رزومه مشکلی برای من پیش آمد</option>
                        <option value="سایت کند است و زمان زیادی صرف لود میشود">سایت کند است و زمان زیادی صرف لود میشود
                        </option>
                        <option value="سایر موارد">سایر موارد</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desc">توضیح بیشتر</label>
                    <textarea class="form-control" rows="4" id="desk" placeholder="لطفا توضیحی در مورد این مشکل بنویسید"
                        name="desk" required></textarea>
                </div>
                <div style="transform: scale(0.7);"><?php echo $__env->make('captcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                <button type="submit" id="rec" class="btn btn-primary" disabled>ثبت بازخورد</button>
            </form>
            <?php if(@$save == 1): ?>
                <p class="text-success m-4">بازخورد شما با موفقیت ثبت شد.</p>
            <?php endif; ?>
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
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/feedback.blade.php ENDPATH**/ ?>