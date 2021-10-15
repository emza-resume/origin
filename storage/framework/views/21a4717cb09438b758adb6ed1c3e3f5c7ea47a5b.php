<table align="center" class="border border-dark mt-5" style="background-size:cover;width:21cm;height:29cm;background:url('<?php echo e(asset('img/back-default.jpg')); ?>');background-size:cover;">
    <tr>
        <td colspan="4"><h4 class="text-center" ><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></h4></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td class="text-left pl-3"><?php echo e($getbases->BaseWorkTitle); ?></td>
        <td class="text-left pl-3">متولد  <?php echo e($getbases->BaseBirthdate); ?></td>
        <td class="text-left pl-3">وضعیت تاهل: <?php echo e($getbases->BaseMarital); ?></td>
        <td class="text-left pl-3">وضعیت سربازی: <?php echo e($getbases->BaseSolider); ?></td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3 tahoma"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات تماس</span></td>
    </tr>
    <tr>
        <td colspan="2" class="text-left pl-3">آدرس ایمیل: <?php echo e($getbases->BaseEmail); ?></td>
        <td colspan="2" class="text-left pl-3">شماره ثابت: <?php echo e($getbases->BaseTel); ?></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="2" class="text-left pl-3"> تلفن همراه: <?php echo e($getbases->BaseMobile); ?></td>
        <td colspan="2" class="text-left pl-3">وب سایت: <?php echo e($getbases->BaseWebsite); ?>.emza.app</td>
    </tr>
    <tr >
            <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات تحصیلی</span></td>
        </tr>
        <tr class="border border-dark border-bottom-1 border-top-0">
            <td colspan="4" class="text-left pl-3">دارای مدرک <?php echo e($getedus->EduSection); ?> <?php echo e($getedus->EduMajor); ?> گرایش <?php echo e($getedus->EduOrientation); ?> از <?php echo e($getedus->EduLnstitute); ?> . معدل: <?php echo e($getedus->EduAverage); ?> از 20</td>
        </tr>

    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">سوابق شغلی</span></td>

    </tr >
    <tr>
        <td colspan="2" class="text-left pl-3">سمت: <?php echo e($getworks->WorkPost); ?></td>
        <td colspan="2" class="text-left pl-3">مرکز اشتغال: <?php echo e($getworks->WorkCenter); ?></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
            <td colspan="2" class="text-left pl-3">نام مرکز: <?php echo e($getworks->WorkTitleCenter); ?></td>
            <td colspan="2" class="text-left pl-3">نحوه همکاری: <?php echo e($getworks->WorkCooperation); ?></td>
    </tr>
    <tr >
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات زبان</span></td>

    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td class="text-left pl-3">زبان خارجه: <?php echo e($getlangs->LangName); ?></td>
        <td class="text-left pl-3">مهارت نوشتن: <?php echo e($getlangs->LangWritingskills); ?> از 5</td>
        <td class="text-left pl-3">مهارت خواندن: <?php echo e($getlangs->LangReadingskills); ?> از 5</td>
        <td class="text-left pl-3"></td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">مهارت‌های تجربی</span></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="4" class="text-left pl-3">
            <?php echo e($getskills->SkillsName); ?>

        </td>

    </tr>
    <tr >
        <td colspan="4" class="text-left pl-3 tahoma"><span class="badge badge-dark p-3 position-relative top-9">دوره یا دوره ها</span></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="2" class="text-left pl-3">
            دوره <?php echo e($getcourses->CoursesType); ?> در <?php echo e($getcourses->CoursesInstitute); ?>

        </td>
        <td colspan="2" class="text-left pl-3">
            عنوان دوره: <?php echo e($getcourses->CoursesTitle); ?>

        </td>

    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">عنوان پروژه یا پایان نامه</span></td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3">
           نام این پروژه <?php echo e($getprojects->ProjectTitle); ?> است که
            در تاریخ <?php echo e($getprojects->ProjectDate); ?> دفاع شد
         </td>

    </tr>
    <tr>
        <td colspan="4" class="text-center pl-3">
                www.emza.app
        </td>
    </tr>
</table>
<?php /**PATH C:\xampp\mysite\resources\views/default.blade.php ENDPATH**/ ?>