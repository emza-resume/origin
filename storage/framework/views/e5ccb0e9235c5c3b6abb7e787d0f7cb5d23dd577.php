 <?php $__env->startSection('title'); ?> ایجاد رزومه حرفه ای فارسی <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(asset('kit/css/uikit-rtl.min.css')); ?> ">
<link rel="stylesheet" href="<?php echo e(asset('kit/css/index.min.css')); ?> ">

<script src="<?php echo e(asset('kit/js/uikit.min.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/uikit-icons.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/index.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<style>

*{
    color:#111 !important;
}
.box-sh{
    border:1px solid;
}
.back-section
{
    background: #f9f9f9
}
.uk-input
{
    border:1px solid #777 !important;
}
.uk-select
{
    border:1px solid #777 !important;
}
.uk-checkbox
{
    border:1px solid #777 !important;
}
textarea
{
    border:1px solid #777 !important;
}
.uk-modal.uk-open
{
    display:black !important;
}
</style>
<link rel="manifest" href="https://cvbuilder.me/site.webmanifest.json">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- form -->
<?php echo $__env->make('pro.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pro.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pro.imageEditor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
 <?php $__env->startSection('script'); ?>
 <script>
        var params = {
            iemessage: 'جهت ساخت رزومه لطفا از مروگر های دیگر استفاده کنید',
            language:'fa',
            underGraduate: 'UnderGraduate',
            diploma:'Diploma',
            culture: 'fa',
            choosePhoto: 'انتخاب عکس',
            photoId: 'Photo',
            changePhoto: 'تغییر عکس',
            cultureVar: 'fa',
            minAverageSalaryId: 'RecI_MAvgS',
            hasUserId: false,
            ConnectionFailedMessage:'اشکال در ارتباط با سرور؛ لطفا از اتصال به اینترنت مطمئن شوید (کد 401)',
            ElseConnectionFailedMessage:'اشکال در ارتباط با سرور؛ لطفا از اتصال به اینترنت مطمئن شوید (کد 402)',
            GetPasswordAgain:'دریافت مجدد رمز عبور',
            PasswordSentViaEmail: 'رمز عبور برای شما ایمیل شد',
            PasswordSentViaSMS: 'رمز عبور برای شما پیامک شد',
            ProblemInSendingPassword:'اشکال در ارسال رمز عبور؛ لطفا بعدا تلاش نمایید',
            Sending: 'در حال ارسال ...',
            whatCanBeImproved: 'نقاط ضعف رزومه‌ساز  چیست؟',
            whatIsStrengths: 'نقاط قوت رزومه‌ساز  چیست؟',
            mobileIsMandatory: 'جهت ذخیره اطلاعات رزومه، موبایل یا ایمیل خود را در بخش اطلاعات پایه وارد کنید',
            isLocal: false,
            reloadButton: 'بارگذاری مجدد',
            errorModalTitle: 'اشکال در ذخیره اطلاعات'
        };
    </script>
 <script src="<?php echo e(asset('kit/js/index.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/city.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/city2.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/city3.js')); ?>"></script>
<script src="<?php echo e(asset('kit/js/function.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/form-pro-persian.blade.php ENDPATH**/ ?>