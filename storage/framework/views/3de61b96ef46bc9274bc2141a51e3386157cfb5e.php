<br>
<p class="font-weight-bold" style="font-size: 12px;">  <img src="<?php echo e(asset('img/site/new/title/book (1).svg')); ?>" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;پایان‌نامه</p>
    <hr>
    <?php $__currentLoopData = $getthesis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thesis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <P style="height:17px;font-size: 12px;" id="thesisTitlex0"><?php if($thesis->ArticlesTitle != ''): ?> <?php echo e($thesis->ArticlesTitle); ?> <?php endif; ?></P>
    <P style="height:17px;font-size: 12px;"><?php if($thesis->ArticlesTitle != '' && $thesis->ArticlesDate != '//'): ?>تاریخ دفاع: <?php endif; ?><span style="font-size:12px;color:darkblue !important" id="thesisDefenceTextx0"><?php if($thesis->ArticlesTitle != '' && $thesis->ArticlesDate != '//'): ?> <?php echo e($thesis->ArticlesDate); ?> <?php endif; ?></span>
     
    </P>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\mysite\resources\views/component/resumex-up/thesis.blade.php ENDPATH**/ ?>