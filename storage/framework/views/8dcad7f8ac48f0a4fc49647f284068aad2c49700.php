<?php $__env->startSection('title'); ?>
عوض کردن تصویر زمینه رزومه
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
            <div class="border d-black mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="w-50 mx-auto mb-5" style="height:220px;position: relative;top: -80px;">
                <img src="<?php echo e(asset('img/background/1.jpg')); ?>" id="img1" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/2.jpg')); ?>" id="img2" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/3.jpg')); ?>" id="img3" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/4.png')); ?>" id="img4" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/5.jpg')); ?>" id="img5" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/6.jpg')); ?>" id="img6" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/7.jpg')); ?>" id="img7" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/8.jpg')); ?>" id="img8" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/9.png')); ?>" id="img9" class="border border-dark float-left m-1" style="height:100px;width:100px;">
                <img src="<?php echo e(asset('img/background/10.png')); ?>" id="img10" class="border border-dark float-left m-1" style="height:100px;width:100px;">
            </div>
            <form method="post" action="/change-background" style="position: relative;top: -80px;">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="select-batch" value="<?php echo e($getbases->BaseBatch); ?>">
                <input type="hidden" name="code-back" id="code-back">
                <button type="submit" class="btn btn-primary text-center d-block mx-auto w-25 p-2 mx-2 mb-2" style="width:230px !important">اعمال تغییرات</button>
            </form>
            <br><br><br><br>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

  $("#img1").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/1.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/1.jpg");
  });
  $("#img2").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/2.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/2.jpg");
  });
  $("#img3").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/3.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/3.jpg");
  });
  $("#img4").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/4.png')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/4.png");
  });
  $("#img5").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/5.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/5.jpg");
  });
  $("#img6").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/6.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/6.jpg");
  });
  $("#img7").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/7.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/7.jpg");
  });
  $("#img8").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/8.jpg')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/8.jpg");
  });
  $("#img9").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/9.png')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/9.png");
  });
  $("#img10").click(function(){
    $("#pageA4").css({"background":"url(<?php echo e(asset('img/background/10.png')); ?>)","background-size":"cover"});
    $("#code-back").val("img/background/10.png");
  });

</script>
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

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/get-with-background.blade.php ENDPATH**/ ?>