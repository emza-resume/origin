<?php $__env->startSection('title'); ?>دانلود قالب آبی <?php $__env->stopSection(); ?>
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
.Yekan {
    font-family: Yekan !important;
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
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">واردکردن اطلاعات</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3" style="color:white;">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">انتخاب قالب</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3" style="color:white;">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">پرداخت هزینه</div>
        </div>
        <br>
        <div class="step-blue d-block mx-auto text-center m-3" style="color:white;">
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">دانلود رزومه</div>
        </div>
    </div>
  </div>
    <p class="text-center text-success font-weight-bold my-5 alert alert-success w-25 mx-auto">خرید شما با موفقیت انجام شد</p>
    <a href="/w/<?php echo e($getbases->BaseWebsite); ?>" class="btn btn-dark w-25 d-block mx-auto text-center p-3">نمایش سایت</a>
    <br>
    <br>
    <?php echo $__env->make('blue-template-persian', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <p align="center">
    <a href="download-persian-blue-only" class="btn btn-primary w-25 text-center p-3">دانلود یا چاپ</a>
    <a onclick="history.go(-2)" class="btn btn-danger w-25 text-center p-3 text-white">بازگشت به صفحه انتخاب قالب</a>
    </p>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/download-blue-template-persian.blade.php ENDPATH**/ ?>