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
      <div class="panel-heading">پیام مدیر</div>
        <div class="panel-body">              

        <div class="table-responsive" style="border-top: 1px solid #dadada;">
    <table class="table table-bordered">
      <tr>
        <td style="width:200px">شماره پیام</td>
        <td>1000<?php echo e($getmassage->Massageid); ?></td>
      </tr>
      <tr class="bg-light">
        <td style="width:200px" >عنوان پیام</td>
        <td><?php echo e($getmassage->MassageTitle); ?></td>
      </tr>
      <tr>
        <td style="width:200px">مهم</td>
        <td><?php if($getmassage->MassageImportant == 1): ?> بله <?php else: ?> خیر <?php endif; ?></td>
      </tr>
      <tr class="bg-light">
        <td style="width:200px">زمان ارسال</td>
        <td><?php echo e($created_at); ?></td>
      </tr>
      <tr>
        <td style="width:200px">متن پیام</td>
        <td style="height:200px;"><?php echo e($getmassage->MassageText); ?></td>
      </tr>
    </table>

    <a href="/show-massages/<?php echo e($getmassage->MassageUserid); ?>" class="btn btn-primary">برگشت</a>
  </div>
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

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/home-massage-one.blade.php ENDPATH**/ ?>