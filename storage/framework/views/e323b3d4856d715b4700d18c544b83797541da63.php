 <?php $__env->startSection('title'); ?> خانه <?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
@media  screen and (min-width: 1024px) {
    #w123{
        width:123%;
    }
}
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(@$mg == 1): ?>{
<div class="alert alert-success position-absolute" id="alertsuc" style="width:320px;left: 38%;top: 74px;z-index: 1;background: darkgreen;color: white;padding: 42px;">
    <strong style="color:white;">  تبریک  &nbsp;</strong>رزومه شما با موفقیت ساخته شد.</a>.
</div>
<?php endif; ?>
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">رزومه‌ها</div>
      <div class="panel-body">              
            <a href="/create-resume-fast" class="btn btn-primary m-3 font-weight-bold float-left"><span class="glyphicon glyphicon-plus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 3px;color: #FFEB3B;"></span> &nbsp;ساخت رزومه جدید&nbsp; </a>
            <?php $__currentLoopData = $getbases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $base): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/show-massages/<?php echo e($base->BaseUserid); ?>" class="btn btn-success m-3 float-right text-white">
                    پیام‌ها &nbsp;<span class="badge badge-light " ><?php echo e($cim); ?></span>
                </a>
                <?php break; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br>
            <div id="w123" style="clear:both">
            <?php $__currentLoopData = $getbases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $base): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-white border m-3 shadow w94" style="background-color: #fdfdfd !important;float:right">
            <br>
                <img src="<?php echo e(asset($base->BaseAvatar)); ?>" alt="" class="rounded-circle border m-1 mx-2 d-block mx-auto shadow" width="150" height="150">
                <hr>
                <h4 class="text-center"><?php echo e($base->BaseName); ?> <?php echo e($base->BaseFamily); ?></h4>
                <p class="text-center "><?php echo e($base->BaseWorkTitle); ?></p>
                <p class="text-center ">موبایل: <?php echo e($base->BaseMobile); ?></p>

                <a href="/change-avatar/<?php echo e($base->BaseBatch); ?>" class="btn btn-outline-primary d-block mx-auto m-1 w-50" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">تغییر عکس چهره</a>
                <a href="/get-resume/<?php echo e($base->BaseBatch); ?>" class="btn btn-outline-success d-block mx-auto m-1 w-50" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">مشاهده رزومه</a>
                <?php if($base->BaseWebsite == ''): ?><a href="/request-create-site/<?php echo e($base->BaseBatch); ?>" type="button" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;" class="btn btn-outline-dark d-block mx-auto m-1 w-50">درخواست ایجاد سایت</a><?php else: ?><a href="/website-status/<?php echo e($base->Baseid); ?>" type="button" class="btn btn-outline-dark d-block mx-auto m-1 w-50" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">وضعیت سایت</a><?php endif; ?>
                <a href="/get-print/<?php echo e($base->BaseBatch); ?>" target="_blank" class="print btn btn-outline-danger d-block mx-auto m-1 w-50" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">چاپ</a>
                <a href="/help-download/<?php echo e($base->BaseBatch); ?>" target="_blank" class="help-download print btn btn-outline-danger d-none mx-auto m-1 w-50" style="width:180px !important;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;display:none">راهنمای دانلود</a>
                <a href="/edit-resume/<?php echo e($base->BaseBatch); ?>" target="_blank" class="btn btn-outline-info d-block mx-auto m-1 w-50" style="width:180px !important;display: block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">ویرایش</a>
            <br>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

    </div>

     </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/home.blade.php ENDPATH**/ ?>