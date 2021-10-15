<div style="width:21cm;height:29.7cm;border:1px solid black;margin:0 auto;padding:20px;background:url('<?php echo e(asset('img/6.jpg')); ?>');background-repeat:no-repeat;background-size: cover;background-size: 21cm 29.7cm;">
    <table style="width:100%;height:100%;" class="font13">
        <tr>
            <td colspan="2" valign="top" style="height:154px;padding:20px;">
                <img class="rounded-circle shadow" src="<?php echo e(asset($getbases->BaseAvatar)); ?>" style="float:right !important;width:160px;height:160px;margin-left: 40px;box-shadow: -1px 1px 50px 1px black !important;">

                <table>
                    <tr  style="background:white;border-right:5px solid yellow;">
                        <td>
                            <span style="float:right;margin:10px;color:black;" class="Vazir"><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></span>
                            <span style="float:right;margin:10px;color:black;" class="Vazir"><?php echo e($getbases->BaseMarital); ?></span>
                        </td>
                        <td>
                            <span style="float:right;margin:10px;"><span style="color:black;font-weight:bold;">وضعیت سربازی: </span><span class="Vazir" style="color:black;"><?php echo e($getbases->BaseSolider); ?></span>
                        </td>
                    </tr>
                    <tr style="background:white;border-right:5px solid red;">
                        <td>
                            <span style="float:right;margin:10px;"><span style="color:black;font-weight:bold;">حرفه: </span><span class="Vazir" style="color:black;"><?php echo e($getbases->BaseWorkTitle); ?></span>

                        </td>
                        <td>
                            <span style="float:right;margin:10px;color:black;"><span style="color:black;font-weight:bold;">تاریخ تولد: </span><?php echo e($getbases->BaseBirthdate); ?></span>
                            <span style="float:right;margin:10px;color:black;"><span style="color:black;font-weight:bold;">سن: </span><?php echo e($old); ?> سال</span>
                        </td>
                    </tr>
                    <tr style="background:white;border-right:5px solid orange;">
                        <td colspan="2">
                            <span style="float:right;margin:10px;color:black;" ><span style="color:black;font-weight:bold;">آدرس ایمیل: </span><?php echo e($getbases->BaseEmail); ?></span>
                        </td>
                    </tr>
                    <tr style="background:white;border-right:5px solid green;">
                        <td>
                            <span style="float:right;margin:10px;color:black;" ><span style="color:black;font-weight:bold;">تلفن: </span><?php echo e($getbases->BaseTel); ?></span>
                        </td>
                        <td>
                            <span style="float:right;margin:10px;color:black;" ><span style="color:black;font-weight:bold;">وب سایت: </span><?php echo e($getbases->BaseWebsite); ?>.emza.app</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top">
            <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">
                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">مهارت زبان</h5>
                </div>
            <div style="padding:10px;">
                <div style="margin:10px;text-align:right;color:black;"><span style="color:black;font-weight:bold; " class="Vazir">نام زبان: </span><?php echo e($getlangs->LangName); ?></div>
                <div style="margin:10px;text-align:right">
                    <span style="float:right;color:black;font-weight:bold;">مهارت نوشتن: </span>

                    <div style="position:relative;left:-9px;">
                        <?php for($i = 0; $i
                        < $getlangs->LangWritingskills; $i++): ?>
                        <img src="<?php echo e(asset('img/star-blue.png')); ?>" style="" width="20" height="20" alt=""> <?php endfor; ?> <?php for($i = 0; $i
                        < $starw1; $i++): ?> <img src="<?php echo e(asset('img/star-null-blue.png')); ?>" style="" width="20" height="20" alt="">
                        <?php endfor; ?>
                    </div>
                </div>
                <div style="margin:10px;text-align:right">
                    <span style="float:right;color:black;font-weight:bold;">مهارت خواندن:</span>
                    <div style="position:relative;left:-5px;">
                        <?php for($i = 0; $i
                        < $getlangs->LangReadingskills; $i++): ?>
                        <img src="<?php echo e(asset('img/star-blue.png')); ?>" style="" width="20" height="20" alt=""> <?php endfor; ?> <?php for($i = 0; $i
                        < $star1; $i++): ?> <img src="<?php echo e(asset('img/star-null-blue.png')); ?>" style="" width="20" height="20" alt="">
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            </div>


                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;height:10rem">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">پایان نامه</h5>
                </div>
                <div style="max-height:68px;height:85px;color:black">
                    <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="color:black;font-weight:bold;" >عنوان پایان نامه: </span> <?php echo e($getprojects->ProjectTitle); ?>

                    </div>
                    <div style="margin:10px;text-align:right;color:black"><span style="color:black;font-weight:bold;">تاریخ دفاع از پایان نامه: </span> <?php echo e($getprojects->ProjectDate); ?>

                    </div>
                </div>
                </div>
                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">سوابق تحصیلی</h5>
                </div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">مقطع: </span><?php echo e($getedus->EduSection); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">رشته: </span><?php echo e($getedus->EduMajor); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">گرایش: </span><?php echo e($getedus->EduOrientation); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">موسسه: </span><?php echo e($getedus->EduLnstitute); ?></div>
                <div style="margin:10px;text-align:right;color:black"><span style="font-weight:bold;color:black;">معدل: </span><?php echo e($getedus->EduAverage); ?></div>
                </div>
                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">سوابق شغلی</h5>
                </div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">سمت: </span><?php echo e($getworks->WorkPost); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">نوع مرکز: </span><?php echo e($getworks->WorkCenter); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">نام مرکز: </span><?php echo e($getworks->WorkTitleCenter); ?></div>
                <div style="margin:10px;text-align:right;color:black" class="Vazir"><span style="font-weight:bold;color:black;">چگونگی همکاری: </span><?php echo e($getworks->WorkCooperation); ?></div>
                </div>
            </td>
            <td valign="top" style="width:50%">
                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">دوره آموزشی</h5>
                </div>
                <div style="margin:10px;text-align:right;color:black;" class="Vazir"><span style="font-weight:bold;color:black;">نوع دوره: </span><?php echo e($getcourses->CoursesType); ?></div>
                <div style="margin:10px;text-align:right;color:black;" class="Vazir"><span style="font-weight:bold;color:black;">عنوان دوره: </span><?php echo e($getcourses->CoursesTitle); ?></div>
                <div style="margin:10px;text-align:right;color:black;" class="Vazir"><span style="font-weight:bold;color:black;">نام موسسه: </span><?php echo e($getcourses->CoursesInstitute); ?></div>
                </div>

                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">مهارت های تجربی</h5>
                </div>
                <div style="max-height:85px;height:85px;">
                    <?php $__currentLoopData = $getskills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listskill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin:10px;text-align:right;"><span style="background:blue;border:1px solid black;padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:5px;float:right;margin-right:5px;margin-bottom:5px;border-top-left-radius:10px;border-bottom-right-radius:10px;" class="shadow Vazir"><?php echo e($listskill); ?></span></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
                <div style="width:95%;border: blue solid 2px;background:white;margin-bottom:18px;display: block;border-radius: 5px;margin: 25px auto;">

                <div style="width:100%;background: blue;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:0px;">اطلاعات تماس</h5>
                </div>
                <div style="margin:10px;text-align:right;color:black;"><span style="font-weight:bold;color:black;">شماره تلفن: </span><?php echo e($getbases->BaseTel); ?></div>
                <div style="margin:10px;text-align:right;color:black;"><span style="font-weight:bold;color:black;">شماره موبایل: </span><?php echo e($getbases->BaseMobile); ?></div>
                <div style="margin:10px;text-align:right;color:black;"><span style="font-weight:bold;color:black;">آدرس ایمیل: </span><?php echo e($getbases->BaseEmail); ?></div>
                <div style="margin:10px;text-align:right;color:black;"><span style="font-weight:bold;color:black;">وب سایت: </span><?php echo e($getbases->BaseWebsite); ?>.emza.app</div>
                </div>
            </td>
        </tr>
    </table>
</div>
<script src="<?php echo e(asset('js/persianNumber.js')); ?>"></script>
<?php /**PATH C:\xampp\mysite\resources\views/blue-template-persian.blade.php ENDPATH**/ ?>