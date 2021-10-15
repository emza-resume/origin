<?php $__env->startSection('style'); ?>



.pagination
{
  direction: rtl !important;
  padding-right: 0px;
  margin-top: 30px;
    margin-right: -4px;
}

ul.pagination li {
    display: inline;
    font-size: 14px;
    font-weight: bold;

}

ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;

}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;

}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #6435c9;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #eee;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}
*{
  font-weight: normal;
}
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<p style="direction:rtl;"><span style="font-weight:bold;">گیرنده :</span> <?php echo e($name_family); ?>   &nbsp; &nbsp;&nbsp;           <span style="font-weight:bold;">تعداد پیام‌های ارسال شده :</span> <?php echo e($c_send); ?></p>

<?php if(@$send == 1): ?>
<div class="ui info message">
  <div class="header" style="direction: rtl;font-size:13px;">
پیام با موفقیت به <?php echo e(@$name_family); ?> ارسال شد.
  </div>
</div>
<?php endif; ?>
<form class="ui form" method="post" action="/administrator/send-massage" style="direction:rtl;">
<?php echo csrf_field(); ?>
  <div class="field">
    <label>عنوان</label>
    <input type="text" name="msg-title" required>
    <input type="hidden" name="userid" value="<?php echo e($userid); ?>">
    <input type="hidden" name="name_family" value="<?php echo e($name_family); ?>">
    <input type="hidden" name="c_send" value="<?php echo e($c_send); ?>">

  </div>
  <div class="field">
    <label>متن پیام</label>
    <textarea  name="msg-text" required></textarea>
  </div>
  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" name="msg-impo" tabindex="0">
      <label style="font-weight:700;font-size:12px;">این پیام مهم است.</label>
    </div>
  </div>
  <button class="ui red button" style="font-weight: 100;font-size:12px;background:red" type="submit">ارسال پیام</button>
</form>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/massage.blade.php ENDPATH**/ ?>