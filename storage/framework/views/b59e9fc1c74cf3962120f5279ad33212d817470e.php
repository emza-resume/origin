<?php $__env->startSection('meta'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" />  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
.text-arial
{
  font-family: Arial, Helvetica, sans-serif !important;
}

.pagination
{
  direction: ltr !important;
  padding-right: 0px;
  margin-top: 30px;
    font-family: Arial, Helvetica, sans-serif !important;
    margin-left: -33px !important;
}

ul.pagination li {
    display: inline;
    font-size: 14px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif !important;
}

ul.pagination li a {
  font-family: Arial, Helvetica, sans-serif !important;
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

ul.pagination li a.active 
{
    font-family: Arial, Helvetica, sans-serif !important;
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
}

ul.pagination li.active {
  font-family: Arial, Helvetica, sans-serif !important;
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

/*ul.pagination li a:hover:not(.active) {
  background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #eee;
  font-family: Arial, Helvetica, sans-serif !important;
}

ul.pagination li.disabled {
  font-family: Arial, Helvetica, sans-serif !important;
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

<table class="ui red table striped" style="direction:rtl;margin-top: 0px;">
    <thead class="">
      <tr class="">
        <th class="center aligned text-arial">Actions</th>
        <th class="center aligned text-arial">Created_at</th>
        <th class="center aligned text-arial">Mobile</th>
        <th class="center aligned text-arial">Name And Family</th>
        <th class="center aligned text-arial">Resume ID</th>
        <th class="center aligned text-arial">Avatar</th>
        <th class="center aligned text-arial">Row</th>
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
        <a class="mini ui red button" href="/administrator/move-to-trash-en/<?php echo e($base->Baseid); ?>"><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="trash icon icon-semantic"></i></a>
        <a class="mini ui blue button" href="/administrator/en/cv/1000<?php echo e($base->Baseid); ?>"><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="file icon icon-semantic" ></i></a>
        <button class="mini ui green button" uk-toggle="target: #modal-image-change-<?php echo e($base->Baseid); ?>"><i style="margin-left: 0px;font-size: 13px;margin-right: 0px;" class="image icon icon-semantic" ></i></button>


        <!-- This is the modal -->
        <div id="modal-image-change-<?php echo e($base->Baseid); ?>" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <p>    <img style="width:270px;height:360px;" class="uk-align-center"  src="<?php echo e(asset($base->BaseAvatar)); ?>" alt=""></p>
                <p class="uk-text-center">What kind of avatar to change?</p>
                <p class="uk-text-center">
                <br>
                <button class=" ui  button uk-modal-close" type="button">Cancel</button>

                <a class=" ui red button" href="/administrator/en/to-man/1000<?php echo e($base->Baseid); ?>">Man</a>
                <a class=" ui blue button" href="/administrator/en/to-woman/1000<?php echo e($base->Baseid); ?>">Woman</a>
                </p>
            </div>
        </div>


        </td>
        <td class="top-3 center aligned text-arial"><?php echo e($created_at); ?></td>
        <td class="top-3 center aligned text-arial"><?php echo e($base->BaseMobile); ?></td>
        <td class="top-3 center aligned text-arial"><?php echo e($base->BaseName); ?>  <?php echo e($base->BaseFamily); ?></td>
        <td class="top-3 center aligned text-arial">1000<?php echo e($base->Baseid); ?></td>
        <td class="top-3 center aligned"><img style="width:25px;height:33px;" uk-toggle="target: #modal-<?php echo e($base->Baseid); ?>"  src="<?php echo e(asset($base->BaseAvatar)); ?>" alt=""></td>
        <td class="top-3 center aligned text-arial"><?php echo e($i); ?></td>
      </tr>
      <div id="modal-<?php echo e($base->Baseid); ?>" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"  src="<?php echo e(asset($base->BaseAvatar)); ?>" alt="">
    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button">بستن کادر</button>
    </div>
</div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
  <?php echo e($getbase->render()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/english-resumes.blade.php ENDPATH**/ ?>