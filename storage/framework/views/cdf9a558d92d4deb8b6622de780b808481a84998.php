 <?php $__env->startSection('title'); ?> خانه <?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
@media  screen and (min-width: 1024px) {
    #w123{
        width:123%;
    }
}
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">پیام‌های مدیر</div>
        <div class="panel-body">              

        <div class="table-responsive" style="border-top: 1px solid #dadada;">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-info" style="height:50px;">
          <th class="text-center text-light" style="vertical-align:middle;text-align:center">#</th>
          <th class="text-center text-light"  style="vertical-align:middle;">عنوان پیام</th>
          <th class="text-center text-light"  style="vertical-align:middle;text-align:center">مهم</th>
          <th class="text-center text-light"  style="vertical-align:middle;text-align:center">عملیات</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 0
        ?>
        <?php $__currentLoopData = $getmassages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $massage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $i++ ?>
        
        <tr <?php if($massage->MassageShow == 1): ?> style="background:#ffffa2" <?php endif; ?> >
          <td class="p-2" style="vertical-align:middle;text-align:center"><?php echo e($i); ?></td>
          <td class="p-2" style="vertical-align:middle;"><?php echo e($massage->MassageTitle); ?></td>
          <td class="p-2" style="vertical-align:middle;text-align:center"><?php if($massage->MassageImportant == 1): ?> بله <?php else: ?> خیر <?php endif; ?></td>
          <td class="p-2">
            <a href="/show-msg/<?php echo e($massage->Massageid); ?>" style="float: right;" class="btn btn-primary mx-auto w-25 mx-2">نمایش</a>
            &nbsp;
            <a href="/delete-msg/<?php echo e($massage->Massageid); ?>"  class="btn btn-danger mx-auto w-25 mx-2">حذف</a>

          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  <a href="/home" class="btn btn-primary">برگشت</a>

        </div> 
       </div>
    </div>
</div>
<script>
setTimeout(function(){ 
    var x = document.getElementById("alertsuc");   // Get the element with id="demo"
    x.style.visibility = "hidden"; 
 }, 6000);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/home-massage.blade.php ENDPATH**/ ?>