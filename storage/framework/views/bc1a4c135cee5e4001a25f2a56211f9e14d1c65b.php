<?php $__env->startSection('title'); ?> Template <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<style>
@font-face {
    font-family: Vaziren;
    src: url(<?php echo e(asset('fonts/vaziren/Vazir.ttf')); ?>);
    font-weight: 400
}

* {
    font-family: vaziren!important;
    font-size: 16px
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<br>
<br>
<?php echo $__env->make('template-dynamic-en', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<br>
<div class="d-block mx-auto w-50 text-center">
<a href="/donate/en" class="btn btn-dark d-inline-block m-1 mx-auto w-20">ِDoante</a>
<a href="/print-template-cv-fast-en" class="btn btn-primary d-inline-block m-1 mx-auto w-20" >Print</a>
<a href="/edit-template-cv-fast-en" class="btn btn-success d-inline-block m-1 mx-auto w-20" >Edit</a>
<a href="/w/en/<?php echo e($getbases->BaseWebsite); ?>" class="btn btn-danger d-inline-block m-1 mx-auto w-20">Website</a>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/template-en.blade.php ENDPATH**/ ?>