<?php $__env->startSection('title'); ?>Download Blue Template <?php $__env->stopSection(); ?>
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
    color: white;

}
.vazir {
    font-family: vazir;
    font-size: 15px;
}
</style>
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
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-1)">Free download
                <br> or payment</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle text-white" onclick="history.go(-2)">Template selection</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-3)">Enter information</div>
        </div>
        <br>
    </div>
</div>
    <br>
    <p class="text-center text-success font-weight-bold my-5 alert alert-success w-25 mx-auto">Your purchase was successful</p>
    <a href="/w/en/<?php echo e($getbases->BaseWebsite); ?>" class="btn btn-dark w-25 d-block mx-auto text-center p-3">Show site</a>
    <br>
    <br>
    <?php echo $__env->make('blue-template-english', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <p align="center">
    <a href="download-english-blue-only" class="btn btn-primary w-25 text-center p-3">Print | Download</a>
    <a onclick="history.go(-2)" class="btn btn-danger w-25 text-center p-3 text-white">Back</a>
    </p>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/download-blue-template.blade.php ENDPATH**/ ?>