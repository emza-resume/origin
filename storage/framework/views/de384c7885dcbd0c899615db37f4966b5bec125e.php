<?php $__env->startSection('title'); ?> پیش فاکتور <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="container">
  <div class="row">
      <div class="step-green d-block mx-auto text-center m-3 text-white">
          <div class="line-green position-relative"></div>
          <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-2)">واردکردن اطلاعات</div>
      </div>
      <br>
      <div class="step-green d-block mx-auto text-center m-3" style="color:white;">
          <div class="line-green position-relative"></div>
          <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-1)">انتخاب قالب</div>
      </div>
      <br>
      <div class="step-blue d-block mx-auto text-center m-3" style="color:white;">
          <div class="line-blue position-relative"></div>
          <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">پرداخت هزینه</div>
      </div>
      <br>
      <div class="step d-block mx-auto text-center m-3">
          <div class="font-12 t-shadow d-flex justify-content-center align-items-center align-self-center size-text-circle font-weight-bold">دانلود رزومه</div>
      </div>
  </div>
</div>
    <table class="table table-dark shadow table-striped m-4 w-75 mx-auto mt-5">
        <thead>
          <tr>
            <th class="bg-primary" colspan="3" align="center"><h5 class="text-center">پیش فاکتور</h5></th>
          </tr>
          <tr>
            <th>شماره</th>
            <th>نام قالب</th>
            <th>قیمت</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>291098</td>
            <td>قالب آبی</td>
            <td>6000 تومان</td>
          </tr>
          <tr>
            <td colspan="2">مالیات بر ارزش افزوده</td>
            <td>0 تومان</td>
          </tr>
          <tr>
            <td colspan="2">جمع کل</td>
            <td>6000 تومان</td>
          </tr>
          <tr>
            <td colspan="2">
                <img class="img-fluid my-5 d-block mx-auto" src="<?php echo e(asset('img/banks.png')); ?>" alt="پرداخت با کلیه بانک های عضو شبکه شتاب">
            </td>
            <td>
            <h6>توضیحات</h6>
            <p>یک قالب بسیار زیبا</p>
            <a href="/template-selection/download/blue-template" class="btn btn-primary px-5 py-3 my-5 d-block w-100 mx-auto text-white" style="margin-top:100px;margin-bottom:100px;" href="#" role="button">انتقال به درگاه پرداخت بانک</a>
          </td>
          </tr>

        </tbody>
    </table>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/pay-blue.blade.php ENDPATH**/ ?>