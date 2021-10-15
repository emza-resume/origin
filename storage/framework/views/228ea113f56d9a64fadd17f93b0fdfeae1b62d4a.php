<?php $__env->startSection('title'); ?>
صفحه بازیابی کلمه عبور
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-title'); ?>
فرم بازیابی کلمه عبور
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-code'); ?>
<form method="POST" action="/send-password" class="p-5">
    <?php echo csrf_field(); ?>
    <?php if(@$err == 1): ?>
    <div class="alert alert-auth" role="alert">
        .کاربری با این شماره موبایل یافت نشد
    </div>
    <?php endif; ?>
    <?php if(@$suc == 1): ?>
    <div class="alert alert-auth" role="alert">
        .لینک بازنشانی کلمه عبور به موبایل شما ارسال شد
    </div>
    <?php endif; ?>
    <div class="text-center" id="mobile">
        <input id="mobile" type="tel" maxlength="11"
            style="width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:15px;font-weight:bold;color:darkblue;display:inline-block;margin-top: 0px;"
            placeholder="09*********" class="form-control text-font-20 bg-light-yellow border-w" name="mobile"
            required=pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$" autofocus="on">
        &nbsp;
        <span for="email" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold">شماره
            موبایل</span>
    </div>

    <!-- recaptcha -->
    <div class="text-center" id="captcha">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM" data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn" style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;" class="submit-btn" disabled>بازیابی کلمه عبور</button>
    </div>
    <hr>
    <div style="width:100%;height:0.6rem"></div>
    <!-- login link -->
    <a style="float:right;text-decoration:none;font-weight:bold;" href="/login">
        <?php echo e(__('ورود به حساب کاربری')); ?>

    </a>
    <a style="float:left;text-decoration:none;font-weight:bold;" href="/">
        <?php echo e(__('صفحه اصلی')); ?>

    </a>
</form>
<script>
    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>