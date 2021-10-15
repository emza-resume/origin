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

<table class="ui green table striped" style="margin-top: 0px;">
    <thead class="">
        <tr class="">
            <th class="center aligned">عملیات</th>
            <th class="center aligned">تاریخ</th>
            <th class="center aligned">وضعیت</th>
            <th class="center aligned">موبایل</th>
            <th class="center aligned">مبلغ به تومان</th>
            <th class="center aligned">نام</th>
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
        <?php $__currentLoopData = $getfactor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($factor->created_at);

      ?>

            <tr class="">
                <td class="top-3 center aligned">
                <a class="mini ui red button" href="/administrator/delete-donate/<?php echo e($factor->Factorid); ?>">حذف</a>
                </td>
                <td class="top-3 center aligned"><?php echo e($created_at); ?></td>
                <td class="top-3 center aligned"  <?php if($factor->FactorStatus == '1'): ?>style="font-weight:bold;color:darkgreen;font-size:20px;"<?php endif; ?> <?php if($factor->FactorStatus == '0'): ?>style="font-weight:bold;color:darkred;font-size:20px;"<?php endif; ?>>*</td>
                <td class="top-3 center aligned"><?php echo e($factor->FactorMobile); ?></td>
                <td class="top-3 center aligned"><?php echo e($factor->FactorAmount / 10); ?></td>
                <td class="top-3 center aligned"><?php echo e($factor->FactorName); ?> <?php echo e($factor->FactorFamily); ?></td>
                <td class="top-3 center aligned"><?php echo e($i); ?></td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($getfactor->render()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/donate.blade.php ENDPATH**/ ?>