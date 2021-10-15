<?php $__env->startSection('title'); ?> CV File <?php $__env->stopSection(); ?>
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

<?php echo $__env->make('download/template/blue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    $(document).ready(function(){
        window.print();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout-download', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/download/persian-blue.blade.php ENDPATH**/ ?>