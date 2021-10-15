<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
  body { font-family: tahoma, sans-serif; }
</style>
<meta charset="UTF-8">
<title>cv-fast-english</title>
</head>
<body>
<div id="A4" style="width:210mm;heigtd:297mm;display:black;margin:0 auto;padding:1cm;box-shadow:1px 1px 1px 1px black;color:black">
    <div>
        <p id="pt-main-title" style="text-align:center;font-weigtd:bold;font-size:29px;font-weight:bold;"><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></p>
        <p class="pt-title" style="text-align:center;font-weight:bold;font-size:20px;"><?php echo e($getbases->BaseWorkTitle); ?></p>
        <p class="pt-title-24" style="text-align:center;font-size:13px;"> &nbsp; military service situation : <?php echo e($getbases->BaseSolider); ?>  &nbsp; <span style="font-size:40px;">.</span> &nbsp; Marital Status : <?php echo e($getbases->BaseMarital); ?> &nbsp; <span style="font-size:40px;">.</span> BirthDate : <?php echo e($getbases->BaseBirthdate); ?></p>
    </div>
    <table style="width:100%;">
        <tr>
            <td style="width:30%">
            <img width="20" height="20" src="<?php echo e(asset('/img/template/gray/Email.svg')); ?>"  class="img-icon">&nbsp;     <span style="font-size:13px;" class="pt-title-24"><?php echo e($getbases->BaseEmail); ?></span>
                <hr><img width="20" height="20" src="<?php echo e(asset('/img/template/gray/Telephone.svg')); ?>" class="img-icon">&nbsp;  <span style="font-size:13px;" class="pt-title-24"><?php echo e($getbases->BaseTel); ?></span>
            </td>
            <td colspan="2">
                <img style="width:150px;height:150px;display:block;margin:0 auto;border-radius:90px;" class="pt-avatar" src="<?php echo e(asset($getbases->BaseAvatar)); ?>">
            </td>
            <td style="width:30%;text-align:left" >
                <span style="font-size:13px;" class="pt-title-24"><?php echo e($getbases->BaseMobile); ?></span>           &nbsp; <img width="20" height="20" src="<?php echo e(asset('/img/template/gray/Mobile.svg')); ?>" class="img-icon">
                <hr> <span style="font-size:13px;" class="pt-title-24"><?php echo e($getbases->BaseWebsite); ?>.emza.app</span> &nbsp;<img width="20" height="20" src="<?php echo e(asset('/img/template/gray/site.svg')); ?>" class="img-icon">
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width:100%;">
        <tr>
            <td valign="top" style="width:50%">
            <div style="font-weight:bold;text-align:left" class="pt-title">Academic records<hr>
                </div>

                <div>
                    <p style="font-size:15px;text-align:left" class="mt-26"><?php echo e($getedus->EduSection); ?> <?php echo e($getedus->EduMajor); ?></p>
                    <p style="font-size:15px;text-align:left" class="mt-26">Orientation : <?php echo e($getedus->EduOrientation); ?></p>
                    <p style="font-size:15px;text-align:left" class="mt-26">Institute | University : <?php echo e($getedus->EduLnstitute); ?></p>
                </div>
            </td>
            <td valign="top">
            
            <div style="font-weight:bold;text-align:left" class="pt-title">Work experience<hr>
                </div>
                <div>
                    <p style="font-size:15px;text-align:left" class="mt-26"><?php echo e($getworks->WorkPost); ?></p>
                    <p style="font-size:15px;text-align:left" class="mt-26"> <?php echo e($getworks->WorkTitleCenter); ?> <?php echo e($getworks->WorkCenter); ?></p>
                    <p style="font-size:15px;text-align:left" class="mt-26">How to cooperate : <?php echo e($getworks->WorkCooperation); ?></p>
                    <br>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <div style="font-weight:bold;text-align:left" class="pt-title">Skills<hr>
                </div>
                <div>
                <?php $__currentLoopData = $getskills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-26" style="font-size:15px;padding:5px;border:1px solid black;margin:5px;float:left;padding:5px;"><?php echo e($skills); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </td>
            <td valign="top">
            
                <div style="font-weight:bold;text-align:left" class="pt-title">Language<hr>
                </div>
                <div>
                <p style="font-size:15px;text-align:left" class="mt-26">English</p>
                    <p style="font-size:15px;text-align:left;float:left" class="mt-26"> : Writing skills  <div id="pr" style="position: relative;left: 10px;"> 
                    <div class="r-1">
                    <?php for($i=0;$i<$getlangs->LangWritingskills;$i++): ?>                   
                    <div class="mt-28-circle" style="display:inline-block;background:#cecccc;width:14px;height:14px;border-radius:90px;margin:3px;float:left;border:2px solid black"></div>
                    <?php endfor; ?>
                    
                    <?php for($j=5;$j>$i;$j--): ?>
                    <div class="mt-28-circle" style="display:inline-block;background: white;width:14px;height:14px;border-radius:90px;margin:3px;float:left;border:2px solid black"></div>
                    <?php endfor; ?>
                    <?php if($i == 1): ?>
                    <span class="option-lang" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Very low&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 2): ?>
                    <span class="option-lang" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Low&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 3): ?>
                    <span class="option-lang" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Medium&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 4): ?>
                    <span class="option-lang" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;High&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 5): ?>
                    <span class="option-lang" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Very High&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    </div>
                    <div style="clear:left"></div>
</div><p style="font-size:15px;text-align:left;float:left" class="mt-26"> : Reading skills  <div style="position: relative;left: 3px;">
                    <div class="r-2">
                    <?php for($i=0;$i<$getlangs->LangReadingskills;$i++): ?>                   
                    <div class="mt-28-circle" style="display:inline-block;background:#cecccc;width:14px;height:14px;border-radius:90px;margin:3px;float:left;border:2px solid black"></div>
                    <?php endfor; ?>
                    
                    <?php for($j=5;$j>$i;$j--): ?>
                    <div class="mt-28-circle" style="display:inline-block;background: white;width:14px;height:14px;border-radius:90px;margin:3px;float:left;border:2px solid black"></div>
                    <?php endfor; ?>
                    </div>
                    <?php if($i == 1): ?>
                    <span class="option-lang-2" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Very low&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 2): ?>
                    <span class="option-lang-2" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Low&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 3): ?>
                    <span class="option-lang-2" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Medium&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 4): ?>
                    <span class="option-lang-2" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;High&nbsp;&nbsp;</span>
                    <?php endif; ?>
                    <?php if($i == 5): ?>
                    <span class="option-lang-2" style="float:left;font-size:12px;position:relative;top:2px;">&nbsp;&nbsp;Very High&nbsp;&nbsp;</span>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <tr>
        
            <td valign="top">
            <br>
                <div style="font-weight:bold;text-align:left" class="pt-title">Education Courses<hr>
                </div>
                <div>
                    <p style="font-size:15px;text-align:left" class="mt-26">Type : <?php echo e($getcourses->CoursesType); ?></p>
                    <p style="font-size:15px;text-align:left" class="mt-26">courses : <?php echo e($getcourses->CoursesTitle); ?> </p>
                    <p style="font-size:15px;text-align:left" class="mt-26">Institute : <?php echo e($getcourses->CoursesInstitute); ?></p>
                </div>
            </td>
            <td valign="top">
            <br>
                <div style="font-weight:bold;text-align:left" class="pt-title">Project<hr>
                </div>
                <div>
                    <p style="font-size:15px;text-align:left" class="mt-26">Title : <?php echo e($getprojects->ProjectTitle); ?>  </p>
                    <p style="font-size:15px;text-align:left" class="mt-26">Defense date : <?php echo e($getprojects->ProjectDate); ?></p>

                </div>
            </td>
        </tr>
    </table>

</div>
</body>


</html>

<?php /**PATH /home/emzaapp1/mysite/resources/views/template-dynamic-en.blade.php ENDPATH**/ ?>