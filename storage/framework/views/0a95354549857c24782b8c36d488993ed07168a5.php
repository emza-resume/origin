<div class="p-5" id="svazir" style="position:relative;top:-145px; !important;padding-right: 50px !important;">
    <span style="font-weight:bold;font-size: 12px;" class="float-left" id="textskills">مهارت‌های تجربی: </span>
    <?php $__currentLoopData = $getskills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
    <?php
     if($skills->SkillsLevel == 'کم') 
     {
         $level = 1;
     }
     if($skills->SkillsLevel == 'خیلی‌کم') 
     {
         $level = 2;
     }
     if($skills->SkillsLevel == 'متوسط') 
     {
         $level = 3;
     }
     if($skills->SkillsLevel == 'زیاد') 
     {
         $level = 4;
     }
     if($skills->SkillsLevel == 'خیلی‌زیاد') 
     {
         $level = 5;
     }
     
     ?>
        <span style="font-size: 13px;color:#020063 !important" class="float-left mx-3" id="SkillTitlex0"><?php echo e($skills->SkillsName); ?></span>
        <div class="float-left" style="margin-top: 5px;position: relative;left: 8px;margin-top: 5px;<?php if($skills->SkillsName == ''): ?>visibility:hidden; <?php endif; ?>" id="SkillRatingx0">
        <?php for($i=0;$i < $level;$i++): ?>
            <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
        <?php endfor; ?>
        <?php $k = 5 - $level; ?>
        <?php for($i=0;$i<$k;$i++): ?>
            <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
        <?php endfor; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\xampp\mysite\resources\views/component/resumex-up/skill.blade.php ENDPATH**/ ?>