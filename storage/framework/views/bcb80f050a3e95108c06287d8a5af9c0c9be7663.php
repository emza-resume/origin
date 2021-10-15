<?php $__env->startSection('title'); ?>

    فرم درخواست ایجاد وب سایت شخصی

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<style>
<?php echo e($getbases->Styles); ?>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">فرم درخواست ایجاد وب‌سایت</div>
        <div class="panel-body py-4">
        <form action="/send-request-form-website" class="mx-auto" method="post">
        <?php echo csrf_field(); ?>
            <div class="input-group mb-3" style="direction: ltr;">
            <div class="alert alert-primary w-sm-100 alert-100" style="direction:rtl !important;">
                نام وب‌سایت فقط میتواند شامل حروف انگلیسی کوچک و - باشد. مانند <span style="font-family:arial,tahoma !important">reza-ahmadi</span>
            </div>
            <!-- <div class="alert alert-warning w-100" style="direction:rtl !important;">
                هزینه ایجاد وبسایت برای هر رزومه 50 هزار تومان می‌باشد.
            </div> -->
            <input type="hidden" name="cvid" value="<?php echo e($getbases->Baseid); ?>">
            <input type="text" class="form-control" id="website" name="website" style="border-top-left-radius: 3px;border-bottom-left-radius: 3px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;z-index:0">
                <div class="input-group-append" >
                    <span style="border-top-right-radius: 3px;border-bottom-right-radius: 3px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;font-family:arial,tahoma !important" class="input-group-text ">.emza.app</span>
                </div>
            </div>
            <button type="submit" id="submitBtn" class="btn btn-primary">ارسال درخواست</button>
        </form>
        <br>
        <br>
        <a
        class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2 ms"
        style="width:230px !important;display:none" href="/resume-show/<?php echo e($getbases->BaseBatch); ?>">نمایش رزومه</a

        <!-- صفحه رزومه A4 -->
        <div class="bg-white d-black mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
<script>
  $("#website").click(function(){
    $("#websitex").text(".emza.app");
  });
  $("#website").keyup(function(){
    $("#websitex").text($("#website").val()+".emza.app");
  });
  function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };
</script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/form-get-request-site.blade.php ENDPATH**/ ?>