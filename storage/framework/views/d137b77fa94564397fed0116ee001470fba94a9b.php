 <?php $__env->startSection('title'); ?> جزئیات رزومه<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-header">جزئیات رزومه</div>

                <div class="card-body">
                    <div class="dcv">
                    <img width="320" height="320" src="<?php echo e(asset($getbases->BaseAvatar)); ?>">
                    </div>
                    <div class="dcv">
                        <span class="spanbold">نام</span> : <?php echo e($getbases->BaseName); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">نام خانوادگی</span> : <?php echo e($getbases->BaseFamily); ?> 
                    </div>
                    <div class="dcv">
                        <span class="spanbold">وضعیت تاهل</span> :   <?php echo e($getbases->BaseMarital); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">وضعیت سربازی</span> :   <?php echo e($getbases->BaseSolider); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">عنوان حرفه</span> :   <?php echo e($getbases->BaseWorkTitle); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">تاریخ تولد</span> :     <?php echo e($getbases->BaseBirthdate); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">ایمیل </span> :     <?php echo e($getbases->BaseEmail); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">شماره موبایل </span> :     <?php echo e($getbases->BaseMobile); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">شماره تلفن </span> :     <?php echo e($getbases->BaseTel); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> وب سایت </span> :     <?php echo e($getbases->BaseWebsite); ?>.emza.app
                    </div>
                    <div class="dcv">
                        <span class="spanbold"> نام زبان </span> :     <?php echo e($getlangs->LangName); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">  مهارت نوشتن </span> :     <?php echo e($getlangs->LangWritingskills); ?> از 5
                    </div>
                    <div class="dcv">
                        <span class="spanbold">  مهارت خواندن </span> :     <?php echo e($getlangs->LangReadingskills); ?> از 5
                    </div>
                    <div class="dcv">
                        <span class="spanbold"> مهارت های تجربی </span> :     <?php echo e($getskills->SkillsName); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">مقطع تحصیلی </span> :     <?php echo e($getedus->EduSection); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> رشته </span> :     <?php echo e($getedus->EduMajor); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> گرایش </span> :     <?php echo e($getedus->EduOrientation); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> نام موسسه </span> :    <?php echo e($getedus->EduLnstitute); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> معدل </span> : <?php echo e($getedus->EduAverage); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> سمت قبلی </span> : <?php echo e($getworks->WorkPost); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> مرکز اشتغال قبلی </span> :  <?php echo e($getworks->WorkCenter); ?>  <?php echo e($getworks->WorkTitleCenter); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> نحوه همکاری </span> : <?php echo e($getworks->WorkCooperation); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> نوع دوره آموزشی </span> : <?php echo e($getcourses->CoursesType); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> نام دوره</span> : <?php echo e($getcourses->CoursesTitle); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">  عنوان موسسه آموزشی  </span> : <?php echo e($getcourses->CoursesInstitute); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold">  عنوان پایان نامه  </span> : <?php echo e($getprojects->ProjectTitle); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> تاریخ دفاع </span> : <?php echo e($getprojects->ProjectDate); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> زمان ایجاد رزومه </span> : <?php echo e($created_at); ?>

                    </div>
                    <div class="dcv">
                        <span class="spanbold"> وضعیت رزومه </span> : خوب
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/details-cv-persian.blade.php ENDPATH**/ ?>