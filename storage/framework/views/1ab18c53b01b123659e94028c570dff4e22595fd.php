<?php $__env->startSection('title'); ?> Default Template English <?php $__env->stopSection(); ?>
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
<link href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<br>
<?php echo $__env->make('default-english', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<p align="center">
<a href="/download-english-default-home-only/<?php echo e($id); ?>" class="btn btn-primary w-25 text-center p-3">Print | Download</a>
<a onclick="history.go(-1)" class="btn btn-danger w-25 text-center p-3 text-white">Back</a>
</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/download-default-template-english-home.blade.php ENDPATH**/ ?>