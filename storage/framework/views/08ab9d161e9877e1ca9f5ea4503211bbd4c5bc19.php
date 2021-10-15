<body style="background:url(<?php echo e($getbases->Background); ?>)">

<?php echo $__env->make('component.resumex-up.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex-up.gender', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex-up.birthdate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex-up.call', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="d-flex m-5" style="position: relative;top: -54px;">
    <div class="p-2 flex-fill">
        <?php echo $__env->make('component.resumex-up.academic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="p-2 flex-fill">
            <?php echo $__env->make('component.resumex-up.cources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="p-2 flex-fill">
                <?php echo $__env->make('component.resumex-up.work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="d-flex m-5" style="position: relative;top: -90px;">
            <div class="p-2 flex-fill">
                <?php echo $__env->make('component.resumex-up.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('component.resumex-up.thesis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <div class="p-2 flex-fill">

                <?php echo $__env->make('component.resumex-up.project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </div>
        
        <?php echo $__env->make('component.resumex-up.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>


</div>

    
</body><?php /**PATH C:\xampp\mysite\resources\views/component/resume-up.blade.php ENDPATH**/ ?>