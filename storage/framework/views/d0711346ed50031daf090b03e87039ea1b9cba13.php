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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<table class="ui red table striped" style="margin-top: 0px;">
    <thead class="">
        <tr class="">
            <th class="center aligned">عملیات</th>
            <th class="center aligned">سایت درخواست‌شده</th>
            <th class="center aligned">موقعیت جغرافیایی</th>
            <th class="center aligned">نام و نام‌خانوادگی</th>
            <th class="center aligned">شماره رزومه</th>
            <th class="center aligned">آواتار</th>
            <th class="center aligned">ردیف</th>
        </tr>
    </thead>
    <tbody class="">
    <?php
        
        @$page = $_GET['page'];

        $nump = @$page - 1;
        $i = 0;
        if(@$page == 1 || $page == null)
        {
            $i = 0;
        }
        else
        {
            $i = ($nump * 6); 
        }
        
         ?>
        <?php $__currentLoopData = $getbase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $base): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($base->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($base->updated_at);
        ?>

            <tr class="">
                <td class="top-3 center aligned">
                <?php if($base->RequestSite == 1): ?>
                <!-- <a class="mini ui blue button" href="/administrator/verify-site/<?php echo e($base->Baseid); ?>">تایید</a> -->
                <a class="mini ui green button" href="/administrator/verify-site-4/<?php echo e($base->Baseid); ?>">تایید فوری</a>

                <?php endif; ?>
                <?php if($base->RequestSite == 2): ?>
                <span class="mini ui green" style="color:darkgreen">تایید شده و منتظر پرداخت</span>
                <?php endif; ?>
                <?php if($base->RequestSite == 3): ?>
                <a class="mini ui blue button" href="/administrator/enable-site/<?php echo e($base->Baseid); ?>">فعال‌کردن</a>
                <span class="mini ui green" style="font-weight:bold;color:darkgreen">پرداخت شده</span>
                <?php endif; ?>
                <?php if($base->RequestSite == 4): ?>
                <span class="mini ui green" style="font-weight:bold;color:darkgreen">فعال</span>
                <?php endif; ?>
                </td>
                <td class="top-3 center aligned" <?php if($base->RequestSite == 1 || $base->RequestSite == 2 || $base->RequestSite == 3 || $base->RequestSite == 4): ?> style='font-weight:bold;color:darkgreen !important' ><a href="https://<?php echo e($base->BaseWebsite); ?>.emza.app" target="_blank"><?php echo e($base->BaseWebsite); ?></a>&nbsp;<?php endif; ?> <?php if($base->RequestSite == 4): ?> &nbsp<img src="<?php echo e(asset('img/tic.png')); ?>" style="width:20px;height:20px;" alt="" ><?php endif; ?></td>
                <td class="top-3 center aligned"><a class="mini ui yellow button" style="font-size: 12px;font-weight: 100;color: black;" href="/administrator/location/<?php echo e($base->BaseBatch); ?>">نمایش موقعیت</a></td>
                <td class="top-3 center aligned"><?php echo e($base->BaseName); ?> <?php echo e($base->BaseFamily); ?></td>
                <td class="top-3 center aligned">1000<?php echo e($base->Baseid); ?></td>
                <td class="top-3 center aligned"><img style="width:25px;height:33px;"
                        uk-toggle="target: #modal-<?php echo e($base->Baseid); ?>" src="<?php echo e(asset($base->BaseAvatar)); ?>" alt="">
                </td>
                <td class="top-3 center aligned"><?php echo e($i); ?></td>
            </tr>
            <div id="modal-<?php echo e($base->Baseid); ?>" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"
                        src="<?php echo e(asset($base->BaseAvatar)); ?>" alt="">
                    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">بستن
                        کادر</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($getbase->render()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/RequestSite.blade.php ENDPATH**/ ?>