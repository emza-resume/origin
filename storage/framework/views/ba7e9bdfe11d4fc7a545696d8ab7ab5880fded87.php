<?php $__env->startSection('title'); ?> ایجاد رزومه حرفه ای انگلیسی <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<img class="img-fluid mx-auto d-block" src="<?php echo e(asset('img/under.png')); ?>" alt="این صفحه در دست ساخت میباشد">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/form-pro-english.blade.php ENDPATH**/ ?>