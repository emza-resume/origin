<p class="font-weight-bold" style="font-size: 12px;">  <img src="<?php echo e(asset('img/site/new/title/graduation-hat.svg')); ?>" style="width: 20px;height: 20px;position: relative;top: 3px;" /> &nbsp;سوابق تحصیلی</p>
  <hr>
  <?php $__currentLoopData = $getedus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <P style="font-size: 12px;"><?php if($edu->EduNow == 'on'): ?> دانشجوی <?php endif; ?><span id="gradex0" style="font-size: 12px;"><?php echo e($edu->EduSection); ?></span>&nbsp;<span id="fsx0" style="font-size: 12px;"><?php echo e($edu->EduMajor); ?></span><?php if($edu->EduMajor != ''): ?> - <?php endif; ?><span id="adx0" style="font-size: 12px;"><?php echo e($edu->EduOrientation); ?></span> &nbsp;</P>
  <P style="font-size: 11px;"><span id="universityx0" style="font-size: 11px;"><?php echo e($edu->EduLnstitute); ?></span> &nbsp;<span class="text-white py-1 px-2 rounded" style="font-size: 10px !important;font-family:vazir !important;<?php if($edu->EduMajor != ''): ?>  background-color: rgb(255 255 255) !important;color: black !important;box-shadow: 0px 0px 2px 1px #ccc !important;) !important; <?php endif; ?>" id="gpax0"><?php echo e($edu->EduAverage); ?></span></P>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php /**PATH C:\xampp\mysite\resources\views/component/resumex-up/academic.blade.php ENDPATH**/ ?>