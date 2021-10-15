 <?php $__env->startSection('title'); ?> اطلاعات رزومه <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<style>
    <?php echo e($getbases->Styles); ?>

    #pageA4{ background:url(<?php echo e(asset($getbases->Background)); ?>); background-size:cover;}
</style>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">تغییر تصویر پس‌زمینه</div>
        <div class="panel-body p-5" style="padding-bottom: 0px !important;">
            <div class="border bg-white d-black mx-auto" id="pageA4" style="border: 1px solid black !important; width: 210mm; height: 279mm;">
                    <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                    
                    <a
                            class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important;display:none" href="/resume-show/<?php echo e($getbases->BaseBatch); ?>">نمایش رزومه</a>
                            <br>
                <div class="text-center">
                    <form  method="post" action="/upload-background" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="custom-file" style="width: 60%;">
                            <input type="hidden" name="batch" value="<?php echo e($batch); ?>">
                            <input type="hidden" name="userid" value="<?php echo e($getbases->BaseUserid); ?>">
                    
                            <input type="file"  name="background" id="customFile">
                            
                            <br>
                            <button type="submit" class="btn btn-primary m-4">آپلود تصویر پس‌زمینه</button>
                        </div>
                    </form>
                    <br>
                    
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
<script>
    // Disable form submissions if there are invalid fields (function (){ 'use strict'; window.addEventListener('load', function (){ // Get the forms we want to add validation styles to var forms=document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission var validation=Array.prototype.filter.call(forms, function (form){ form.addEventListener('submit', function (event){ if (form.checkValidity()===false){ event.preventDefault(); event.stopPropagation();} form.classList.add('was-validated');}, false);});}, false);})();
</script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/get-for-background.blade.php ENDPATH**/ ?>