<?php $__env->startSection('title'); ?> قالب خاکستری زیبا <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
.tahoma{
    font-family: tahoma;
    font-size:17px;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir.eot');
    src: url('Vazir.eot?#iefix') format('embedded-opentype'), url('Vazir.woff') format('woff'), url('Vazir.ttf') format('truetype');
    font-weight: normal;
}

* {
    font-family: vazir;
    font-size: 15px;
}
.vazir {
    font-family: vazir;
    font-size: 15px;
}
</style>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <?php echo $__env->make('beautiful-gray', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <p align="center">
    <a href="/download-persian-gray-home-only/<?php echo e($id); ?>" class="btn btn-primary w-25 text-center p-3">دانلود یا چاپ</a>
    <a onclick="history.go(-2)" class="btn btn-danger w-25 text-center p-3 text-white">بازگشت به صفحه انتخاب قالب</a>
    </p>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/download-beautiful-gray-template-home.blade.php ENDPATH**/ ?>