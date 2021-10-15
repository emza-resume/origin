<?php $__env->startSection('title'); ?>
صفحه ورود کاربر
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-title'); ?>
فرم ورود به حساب کاربری
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form-code'); ?>
<form method="POST" action="<?php echo e(route('login')); ?>" class="p-5">
    <?php if(@$success == 1): ?>
        <div class="alert alert-auth p-3 text-center" role="alert" style="top:-14px;">
            هویت شما تایید شد. وارد حساب خود شده و رزومه سازی را شروع کنید
        </div>
    <?php endif; ?>
    <?php if(@$disabled == 1): ?>
        <div class="alert alert-auth p-3 text-center" role="alert">
           .حساب شما فعال نمی‌باشد. برای ارسال مجدد کلمه عبور
           <a style="text-decoration:none;font-weight:bold;" href="/enter-mobile">اینجا</a> 
           کلیک کنید

        </div>
    <?php endif; ?>
    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
        <div class="alert alert-auth p-3 text-center" role="alert">
            .شماره موبایل یا کلمه عبور اشتباه می‌باشد
        </div>
    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    <?php echo csrf_field(); ?>
    <div class="text-center" id="mobile">
        <input id="email" type="tel" maxlength="11"
            style="color: darkblue;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:14px;display:inline-block;margin-top: 0px;font-weight:bold;"
            placeholder="09*********" class="form-control text-font-20 bg-light-yellow border-w" name="email"
            required=pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$" autofocus="on">
        &nbsp;
        <span for="email" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">شماره
            موبایل</span>
    </div>
    <div class="text-center" id="password">
        <input id="password" type="password" maxlength="30"
            style="color: darkblue;width: 65%;margin: 0px auto 30px auto;background: #f9f7ff;text-align:center;font-size:14px;display:inline-block;font-weight:bold;"
            class="form-control text-font-20 bg-light-yellow border-w" name="password" required>
        &nbsp;
        <span for="email" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">کلمه عبور
            &nbsp;&nbsp;&nbsp;&nbsp;</span>
    </div>
    <!-- recaptcha -->
    <div class="text-center" id="captcha">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM" data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn" style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;" class="submit-btn" disabled>ورود به حساب کاربری</button>
    </div>
    <hr>
    <div style="width:100%;height:0.6rem"></div>
    <!-- forget password -->
    <?php if(Route::has('password.request')): ?>
        <a style="float:right;text-decoration:none;font-weight:bold;"
            href="<?php echo e(route('password.request')); ?>">
            <?php echo e(__('کلمه عبور را فراموش کردید؟')); ?>

        </a>
    <?php endif; ?>
    <!-- register link -->
    <a style="float:left;text-decoration:none;font-weight:bold;" href="/register">
        <?php echo e(__('ثبت نام')); ?>

    </a>
</form>
<script>
function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/auth/login.blade.php ENDPATH**/ ?>