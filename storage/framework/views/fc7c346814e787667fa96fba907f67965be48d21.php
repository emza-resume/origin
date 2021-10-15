<?php $__env->startSection('title'); ?>
عوض کردن فونت رزومه
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
        <div class="panel-heading">عوض کردن تم رزومه</div>
        <div class="panel-body p-5">

            <!-- صفحه رزومه A4 -->
            <div class="border bg-white d-black mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form method="post" action="/change-font">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="select-batch" value="<?php echo e($getbases->BaseBatch); ?>">
            <select name="select-font" id="select-font" style="width:230px !important" class="form-control text-center d-block mx-auto w-25 p-2 mx-2 mb-2">
                <option value="1">یکان</option>
                <option value="2">نازنین</option>
                <option value="3">وزیر</option>
            </select>
            <button type="submit" style="width:230px !important" class="btn btn-primary text-center d-block mx-auto w-25 p-2 mx-2 mb-2">اعمال تغییرات</button>
            </form>
            <br><br><br><br>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">حذف رزومه</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p class="text-center"> آیا از اینکه می‌خواهید این رزومه را حذف کنید اطمینان دارید؟</p>
        <div class="d-block mx-auto text-center">
        <a href="/delete-resume/<?php echo e($getbases->BaseBatch); ?>" class="btn btn-danger text-center d-inline-block mx-auto w-25 p-2 mx-2 mb-2">بله</a>
            <button type="button" class="btn btn-success text-center  mx-auto w-25 p-2 mx-2 mb-2 d-inline-block" data-dismiss="modal">خیر</button>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
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

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/get-with-font.blade.php ENDPATH**/ ?>