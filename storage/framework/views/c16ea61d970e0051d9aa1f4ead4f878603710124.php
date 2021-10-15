<?php $__env->startSection('title'); ?> پیش فاکتور <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>

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
            <a href="/template-selection/download/blue-template-home" class="btn btn-primary px-5 py-3 my-5 d-block w-100 mx-auto text-white" style="margin-top:100px;margin-bottom:100px;" href="#" role="button">انتقال به درگاه پرداخت بانک</a>
          </td>
          </tr>

        </tbody>
    </table>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/pay-blue-home.blade.php ENDPATH**/ ?>