<?php $__env->startSection('meta'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" />  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>

.pagination
{
  direction: ltr !important;
  padding-left: 0px;
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

<!-- This is the modal -->

<table class="ui green table striped" style="direction: rtl;margin-top: 0px;">
    <thead class="">
      <tr class="">
        <th class="center aligned">Actions</th>
        <th class="center aligned">Created_at</th>
        <th class="center aligned">Mobile</th>
        <th class="center aligned">Name And Family</th>
        <th class="center aligned">Resume ID</th>
        <th class="center aligned">Avatar</th>
        <th class="center aligned">Row</th>
      </tr>
    </thead>
    <tbody class="">
    <?php $i = 0 ?> 
      <?php $__currentLoopData = $getbase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $base): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $i++;
          $created_at = new Verta();
          $created_at = Verta::instance($base->created_at);
          $updated_at = new Verta();
          $updated_at = Verta::instance($base->updated_at);
      ?>

      <tr class="">
        <td class="top-3 center aligned">
        <!--  }}" -->
        <a class="mini ui red button" ><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" uk-toggle="target: #modal-sure-<?php echo e($base->Baseid); ?>" class="eraser icon icon-semantic"></i></a>
        <a class="mini ui blue button" href="/administrator/restore-en/<?php echo e($base->Baseid); ?>" ><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="redo icon icon-semantic"></i></a>
        </td>
        <td class="top-3 center aligned"><?php echo e($created_at); ?></td>
        <td class="top-3 center aligned"><?php echo e($base->BaseMobile); ?></td>
        <td class="top-3 center aligned"><?php echo e($base->BaseName); ?>  <?php echo e($base->BaseFamily); ?></td>
        <td class="top-3 center aligned">1000<?php echo e($base->Baseid); ?></td>
        <td class="top-3 center aligned"><img style="width:25px;height:33px;" uk-toggle="target: #modal-<?php echo e($base->Baseid); ?>"  src="<?php echo e(asset($base->BaseAvatar)); ?>" alt=""></td>
        <td class="top-3 center aligned"><?php echo e($i); ?></td>
      </tr>
      <div id="modal-<?php echo e($base->Baseid); ?>" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"  src="<?php echo e(asset($base->BaseAvatar)); ?>" alt="">
    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">بستن کادر</button>
    </div>
    <div id="modal-sure-<?php echo e($base->Baseid); ?>" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <p class="uk-text-center">از این که میخواهید رزومه شماره 1000<?php echo e($base->Baseid); ?> را حذف کنید مطمئن هستید؟</p>
    <a style="width: 162px;" class="uk-button uk-button-danger  uk-align-center" href="/administrator/real-delete-en/<?php echo e($base->Baseid); ?>">بله</a>
    <a style="width: 162px;" class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">خیر</a>

    </div>
</div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <div style="direction: ltr !important;">
  <?php echo e($getbase->render()); ?>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/trash-en.blade.php ENDPATH**/ ?>