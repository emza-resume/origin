 <?php $__env->startSection('title'); ?> Select Template <?php $__env->stopSection(); ?>
 
  <?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<link href="http://emza.local/fonts/vaziren/font.css" rel="stylesheet">

<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>

<br>
<br>
<?php echo $__env->make('template-dynamic-en', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<br>
<div class="d-block mx-auto w-75 text-center">
<a href="/w/en/<?php echo e($getbases->BaseWebsite); ?>" class="btn btn-danger d-inline-block m-1 mx-auto w-25">Website</a>
<a href="/print-template-cv-fast-en/<?php echo e($id); ?>" class="btn btn-primary d-inline-block m-1 mx-auto w-25">Print</a>
<a href="/donate/en" class="btn btn-dark d-inline-block m-1 mx-auto w-25">ِDoante</a>

</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/template-selection-english-home.blade.php ENDPATH**/ ?>