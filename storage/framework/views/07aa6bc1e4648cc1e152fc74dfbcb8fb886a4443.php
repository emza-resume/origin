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

<table class="ui orange table striped" style="margin-top: 0px;">
    <thead class="">
        <tr class="">
            <th class="center aligned">عملیات</th>
            <th class="center aligned">آدرس ایمیل</th>
            <th class="center aligned">مشکل</th>
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
        <?php $__currentLoopData = $getfeedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $i++; ?>

            <tr class="">
                <td class="top-3 center aligned" style="max-width: 180px;width: 180px;">
                    <a class="mini ui red button" href="/administrator/delete-feedback/<?php echo e($feedback->Feedbackid); ?>">حذف</a>
                    <button class="mini ui green button" uk-toggle="target: #msg-<?php echo e($feedback->Feedbackid); ?>">اطلاعات بیشتر</button>
                </td>
                <td class="top-3 center aligned"><?php echo e($feedback->FeedbackEmail); ?></td>
                <td class="top-3 center aligned"><?php echo e($feedback->FeedbackBug); ?></td>
                <td class="top-3 center aligned"><?php echo e($feedback->FeedbackName); ?></td>
                <td class="top-3 center aligned"><?php echo e($i); ?></td>
                                <!-- This is the modal -->
                                <div id="msg-<?php echo e($feedback->Feedbackid); ?>" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body">
                                        <h4 class="uk-modal-title" style="text-align:center">توضیحات بیشتر</h4>
                                        <p class="uk-modal-title"
                                            style="text-align:justify;direction:rtl;font-size:14px;">
                                            <?php echo e($feedback->FeedbackDesc); ?>

                                        </p>


                                        <button class="uk-modal-close mini ui red button" type="button">بستن</button>
                                    </div>
                                </div>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($getfeedback->render()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/feedback.blade.php ENDPATH**/ ?>