<?php $__env->startSection('title'); ?>
صفحه عضویت کاربر
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-title'); ?>
فرم ثبت نام
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-code'); ?>
<form method="POST" action="<?php echo e(route('register')); ?>" class="p-5">
    <?php echo csrf_field(); ?>
    <div class="form-group row" style="display:none;">
        <label for="name"
            class="col-md-4 col-form-label text-md-right"><?php echo e(__('نام')); ?></label>

        <div class="col-md-6">
            <input id="name" type="hidden" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                value="<?php echo e(old('name')); ?>" autofocus>


        </div>
    </div>
    <div class="text-center" id="mobile">
        <input id="email" type="tel" maxlength="11"
            style="color: darkblue !important;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:14px;display:inline-block;margin-top: 0px;"
            placeholder="09*********" class="form-control text-font-20 bg-light-yellow border-w" name="email"
            required=pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$" autofocus="on">
        &nbsp;
        <span for="email" style="color: black !important;font-weight:bold;width: 50%;text-align: center;font-size: 14px;">شماره
            موبایل &nbsp;&nbsp;</span>
    </div>
    <div class="text-center" id="password">
        <input id="password" name="password" type="password" maxlength="11"
            style="color: darkblue !important;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:14px;display:inline-block;margin-top: 0px;"
            class="form-control text-font-20 bg-light-yellow border-w">
        &nbsp;
        <span for="password" style="color: black !important;font-weight:bold;width: 50%;text-align: center;font-size: 14px;">
            کلمه عبور&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </div>
    <div class="text-center" id="repeat-password">
        <input id="repeat-password" name="password_confirmation" type="password" maxlength="11"
            style="color: darkblue !important;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:17px;display:inline-block;margin-top: 0px;"
            class="form-control text-font-20 bg-light-yellow border-w">
        &nbsp;
        <span for="repeat-password" style="color: black !important;font-weight:bold;width: 50%;text-align: center;font-size: 14px;">
            تکرار کلمه عبور</span>
    </div>
    <!-- recaptcha -->
    <div class="text-center" id="captcha" style="margin-left: 0px;">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM"
            data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn"
            style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;"
            class="submit-btn" disabled>ثبت نام</button>
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
<br>
<br>
<script>
    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/auth/register.blade.php ENDPATH**/ ?>