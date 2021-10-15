<?php $__env->startSection('title'); ?>Download Default Template <?php $__env->stopSection(); ?>
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
<link href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="step-blue d-block mx-auto text-center m-3 text-white">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle ">Download</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">Free download
                <br> or payment</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle text-white" onclick="history.go(-1)">Template selection</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-2)">Enter information</div>
        </div>
        <br>
    </div>
</div>
    <br>
    <?php echo $__env->make('default-english', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <p align="center">
    <a href="download-english-default-only" class="btn btn-primary w-25 text-center p-3">Print | Download</a>
    <a onclick="history.go(-1)" class="btn btn-danger w-25 text-center p-3 text-white">Back</a>
    </p>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/download-default-en-template.blade.php ENDPATH**/ ?>