<?php $__env->startSection('title'); ?>
افزودن عکس به رزومه
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<style>
<?php echo e($getbases->Styles); ?>

#pageA4{
  background:url(<?php echo e(asset($getbases->Background)); ?>);
  background-size:cover;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">رزومه ساخته شده</div>
        <div class="panel-body p-3">

            <!-- صفحه رزومه A4 -->
            <a
        class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
        style="width:208px !important;display:none" href="/resume-show/<?php echo e($getbases->BaseBatch); ?>">نمایش رزومه</a>
            
            <div class="bg-white d-block mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="text-center">
                <?php echo $__env->make('cv.upload-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <a href="/get-resume" class="btn btn-danger p-3 m-5 ms">فعلا تصویر مناسبی ندارم، بعداً</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/upload-picture.blade.php ENDPATH**/ ?>