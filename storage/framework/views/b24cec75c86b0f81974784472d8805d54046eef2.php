<?php $__env->startSection('title'); ?> دانلود قالب <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<br>
<br>
<?php echo $__env->make('template-dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<br>
<div class="d-block mx-auto w-50 text-center">
<a href="/donate" class="btn btn-dark d-inline-block m-1 mx-auto w-20">حمایت</a>
<a href="/print-template-cv-fast/<?php echo e($id); ?>" class="btn btn-primary d-inline-block m-1 mx-auto w-20">چاپ</a>
<a href="/w/<?php echo e($getbases->BaseWebsite); ?>" class="btn btn-danger d-inline-block m-1 mx-auto w-20">وب سایت</a>
<a href="/edit-template-cv-fast" class="btn btn-success d-inline-block m-1 mx-auto w-20">ویرایش</a>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/template.blade.php ENDPATH**/ ?>