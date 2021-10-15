<?php $__env->startSection('title'); ?>

  <?php echo $__env->yieldContent('s-title'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-light">
  <div class="row px-3">
<?php echo $__env->make('component.preview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>
<div class="container-fluid bg-light">
  <div class="row px-3">

  <form name="<?php echo $__env->yieldContent('formName'); ?>" action="<?php echo $__env->yieldContent('actionPath'); ?>" method="post">
  <?php echo csrf_field(); ?>

  <input type="hidden" name="uid" value="<?php echo e($UID); ?>">
    <br>
  <?php echo $__env->make('component.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.education', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.courses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.thesis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('component.skills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <button type="submit" class="btn btn-md btn-success mb-5 p-3" id="btnsubmit">
  <img src="<?php echo $__env->yieldContent('button-icon'); ?>" alt="" style="width:30px;height:30px;">
  <?php echo $__env->yieldContent('button-title'); ?>
  </button>
  </form>

  </div>
</div>
<script>

if(innerWidth <= 600){
	$("#v-list").remove();
	$("#clist").remove();
	$(".fsl0").remove();
	$(".lu0").remove();
	$("#f9").remove();
	$("#bpre").css("padding-bottom","15px");
	$("#bpre").css("padding-left","5px");
	$("#bpre").css("padding-right","12px");
	$("#langname0").remove();
  $("#workPostdata0").remove();
  $("#year-list").remove();
  $("#prenumber").remove();
  $("#courcesTypedata0").remove();
  $("#courcesYearData0").remove();
  $("#year-list-1").remove();
  $("#year-list-2").remove();
  $("#year-list-s").remove();
  $("#year-list-e").remove();
}
</script>
<script>
	$(document).keydown(function (e) {
	  if (e.keyCode === 120) {
          $("#myModal").addClass("show");
          $("#myModal").css({"padding-right":"10px","display":"block","overflow-y":"auto"});
           
        }
		});

    $(document).keydown(function (e) {
		    if (e.keyCode === 115) {
          $("#myModal").removeClass("show");
          $("#myModal").css({"display":"none"}); 
        }
		});
    

    $("#closeModel").click(function () {
      $("#myModal").removeClass("show");
      $("#myModal").css({"display":"none"});
    });
    $("#closeBtn").click(function () {
      $("#myModal").removeClass("show");
      $("#myModal").css({"display":"none"});
    });

    <?php echo $__env->yieldContent('scripts'); ?>
</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/component/panel.blade.php ENDPATH**/ ?>