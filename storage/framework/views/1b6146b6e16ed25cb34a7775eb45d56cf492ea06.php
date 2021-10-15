<?php $__env->startSection('title'); ?> تماس با ما <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
    <div style="border-width: 2px !important;" class="jumbotron bg-light w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <br>
            <h5 class="text-center">راهنما</h5>
            <p class="text-justify m-4">
                <h6 class="text-center">راهنمای ساخت رزومه فارسی</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/g-persian-1.png')); ?>" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="site-g" src="<?php echo e(asset('img/g-persian-2.png')); ?>" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
                <br>

                <p class="text-center text-primary">
اطلاعات خود را درج کنید و بر روی گزینه "ذخیره و ادامه" کلیک کنید.
<br>
 در صفحه زیر باید قالب را انتخاب کنید
</p>
<img class="d-block mx-auto img-thumbnail border" id="buy-g" src="<?php echo e(asset('img/g-persian-3.png')); ?>" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
<img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/g-persian-4.png')); ?>" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
<img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/g-persian-5.png')); ?>" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
                <br>
                <br>

                <h6 class="text-center">راهنمای ساخت رزومه انگلیسی</h6>
                <br>
                  <img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/g-english-1.png')); ?>" alt="راهنمای ساخت رزومه سریع انگلیسی" style="width:90%;" >
                <br>
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/g-english-2.png')); ?>" alt="راهنمای ساخت رزومه سریع انگلیسی" style="width:90%;" >
                <br>
                <h6 class="text-center">راهنمای ثبت نام</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="register-g" src="<?php echo e(asset('img/register-g.png')); ?>" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
                <h6 class="text-center">راهنمای ورود به پنل کاربری</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="login-g" src="<?php echo e(asset('img/login-1.png')); ?>" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="<?php echo e(asset('img/login-2.png')); ?>" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
            </p>
    <?php if(@$save == 1): ?>
       <p class="text-success m-4">نظر شما با موفقیت ثبت شد.</p>
    <?php endif; ?>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/guide.blade.php ENDPATH**/ ?>