<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
  body { font-family: tahoma, sans-serif; }
</style>
<meta charset="UTF-8">
<title>cvfastpersian</title>
</head>
<body>
<div id="A4" style="width:210mm;heigtd:297mm;display:black;margin:0 auto;padding:1cm;box-shadow:1px 1px 1px 1px black;color:black">
    <div>
        <p id="pt-main-title" style="text-align:center;font-weigtd:bold;font-size:26px;font-weight:bold;"><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></p>
        <p class="pt-title" style="text-align:center;font-weight:bold;"><?php echo e($getbases->BaseWorkTitle); ?></p>
        <p class="pt-title-24" style="text-align:center;font-size:12px;">متولد: <?php echo e($getbases->BaseBirthdate); ?> &nbsp; <span style="font-size:40px;">.</span> &nbsp; وضعیت تاهل : <?php echo e($getbases->BaseMarital); ?> &nbsp; <span style="font-size:40px;">.</span> &nbsp; وضعیت سربازی : <?php echo e($getbases->BaseSolider); ?></p>
    </div>
    <table style="width:100%;">
        <tr>
            <td style="width:30%">
            <img width="20" height="20" class="img-icon" src="<?php echo e(asset('/img/template/gray/Email.svg')); ?>">    &nbsp; <span style="font-size:12px;" class="pt-title-24"><?php echo e($getbases->BaseEmail); ?></span>
                <hr><img width="20" height="20" class="img-icon" src="<?php echo e(asset('/img/template/gray/Telephone.svg')); ?>"> &nbsp;<span style="font-size:12px;" class="pt-title-24"><?php echo e($getbases->BaseTel); ?></span>
            </td>
            <td colspan="2">
                <img style="width:150px;height:150px;display:block;margin:0 auto;border-radius:90px;" class="pt-avatar" src="<?php echo e(asset($getbases->BaseAvatar)); ?>">

            </td>
            <td style="width:30%;text-align:left" >
                <span style="font-size:12px;" class="pt-title-24"><?php echo e($getbases->BaseMobile); ?></span>           &nbsp; <img width="20" height="20" class="img-icon" src="<?php echo e(asset('/img/template/gray/Mobile.svg')); ?>">
                <hr> <span style="font-size:12px;" class="pt-title-24"><?php echo e($getbases->BaseWebsite); ?>.emza.app</span> &nbsp;<img width="20" height="20" class="img-icon" src="<?php echo e(asset('/img/template/gray/site.svg')); ?>">
            </td>
        </tr>
    </table>

    <br>
    <table style="width:100%;">
        <tr>
            <td valign="top" style="width:50%">
            <br>
            <div style="font-weight:bold;" class="pt-title">سوابق تحصیلی<hr>
                </div>

                <div>
                    <p style="font-size:13px;" class="mt-26"><?php echo e($getedus->EduSection); ?> <?php echo e($getedus->EduMajor); ?></p>
                    <p style="font-size:13px;" class="mt-26">گرایش : <?php echo e($getedus->EduOrientation); ?></p>
                    <p style="font-size:13px;" class="mt-26">موسسه|دانشگاه : <?php echo e($getedus->EduLnstitute); ?></p>
                </div>
            </td>
            <td valign="top" style="width:50%">
            <br>
            <div style="font-weight:bold;" class="pt-title">سوابق شغلی<hr>
                </div>
                <div>
                    <p style="font-size:13px;" class="mt-26"><?php echo e($getworks->WorkPost); ?></p>
                    <p style="font-size:13px;" class="mt-26"><?php echo e($getworks->WorkCenter); ?> <?php echo e($getworks->WorkTitleCenter); ?></p>
                    <p style="font-size:13px;" class="mt-26">نحوه همکاری : <?php echo e($getworks->WorkCooperation); ?></p>
                    <br>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <div style="font-weight:bold;" class="pt-title">مهارت ها<hr>
                </div>
                <div>
                <?php $__currentLoopData = $getskills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-26" style="font-size:13px;padding:5px;border:1px solid black;margin:5px;float:right"><?php echo e($skills); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </td>
            <td valign="top">
            
                <div style="font-weight:bold;" class="pt-title">زبان<hr>
                </div>
                <div>
                    <p style="font-size:13px;" class="mt-26"><?php echo e($getlangs->LangName); ?></p>
                    <p style="font-size:13px;float:right" class="mt-26">مهارت نوشتن : &nbsp
                    <div style="position:relative;left:-3px;top:-2px;" id="r-1">

                    <?php for($i=0;$i<$getlangs->LangWritingskills;$i++): ?>
                    <div class="mt-28-circle" style="display:inline-block;background:#cecccc;width:14px;height:14px;border-radius:90px;margin:3px;float:right;border:2px solid black"></div>
                    <?php endfor; ?>
                    <?php for($j=5;$j>$i;$j--): ?>
                    <div class="mt-28-circle" style="display:inline-block;background: white;width:14px;height:14px;border-radius:90px;margin:3px;float:right;border:2px solid black"></div>
                    <?php endfor; ?>
                    </div> 
                    </div>
                    <?php if($i == 1): ?>
                    <span class="option-lang-2" style="position:relative;top:-2px;">&nbsp;&nbsp;خیلی پایین&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 2): ?>
                    <span class="option-lang-2" style="">&nbsp;&nbsp;پایین&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 3): ?>
                    <span class="option-lang-2" style="position:relative;top:-2px;">&nbsp;&nbsp;متوسط&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 4): ?>
                    <span class="option-lang-2" style="position:relative;top:-2px;">&nbsp;&nbsp;بالا&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 5): ?>
                    <span class="option-lang-2" style="position:relative;top:-2px;">&nbsp;&nbsp;خیلی بالا&nbsp;&nbsp;</span>
                    <?php endif; ?> 
                    <br>
                    <br>
                    <br>
                    </p>
                    <p style="font-size:13px;float:right;" class="mt-26">مهارت خواندن : &nbsp<div>
                    <div id="r-2">
                    <?php for($i=0;$i<$getlangs->LangReadingskills;$i++): ?>
                    <div class="mt-28-circle" style="display:inline-block;background:#cecccc;width:14px;height:14px;border-radius:90px;margin:3px;float:right;border:2px solid black"></div>
                    <?php endfor; ?>
                    <?php for($j=5;$j>$i;$j--): ?>
                    <div class="mt-28-circle" style="display:inline-block;background: white;width:14px;height:14px;border-radius:90px;margin:3px;float:right;border:2px solid black"></div>
                    <?php endfor; ?>
                    </div>
                    </div>
                    <?php if($i == 1): ?>
                    <span class="option-lang-2" style="position:relative;top:-1px;left:3px;">&nbsp;&nbsp;خیلی پایین&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 2): ?>
                    <span class="option-lang-2" style="position:relative;top:-1px;left:3px;">&nbsp;&nbsp;پایین&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 3): ?>
                    <span class="option-lang-2" style="position:relative;top:-1px;left:3px;">&nbsp;&nbsp;متوسط&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 4): ?>
                    <span class="option-lang-2" style="position:relative;top:-1px;left:3px;">&nbsp;&nbsp;بالا&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 5): ?>
                    <span class="option-lang-2" style="position:relative;top:-1px;left:3px;">&nbsp;&nbsp;خیلی بالا&nbsp;&nbsp;</span>
                    <?php endif; ?> 
                </div>
            </td>
        </tr>
        <tr>
        
            <td valign="top">
            <br>
                <div style="font-weight:bold;" class="pt-title">دوره های آموزشی<hr>
                </div>
                <div>
                    <p style="font-size:13px;" class="mt-26">نوع : <?php echo e($getcourses->CoursesType); ?></p>
                    <p style="font-size:13px;" class="mt-26">دوره ها : <?php echo e($getcourses->CoursesTitle); ?> </p>
                    <p style="font-size:13px;" class="mt-26">موسسه : <?php echo e($getcourses->CoursesInstitute); ?></p>
                </div>
            </td>
            <td valign="top">
            <br>
                <div style="font-weight:bold;" class="pt-title">پروژه<hr>
                </div>
                <div>
                    <p style="font-size:13px;" class="mt-26">عنوان : <?php echo e($getprojects->ProjectTitle); ?>  </p>
                    <p style="font-size:13px;" class="mt-26">تاریخ دفاع : <?php echo e($getprojects->ProjectDate); ?></p>

                </div>
            </td>
        </tr>
    </table>

</div>
</body>


</html>

<?php /**PATH C:\xampp\mysite\resources\views/template-dynamic.blade.php ENDPATH**/ ?>