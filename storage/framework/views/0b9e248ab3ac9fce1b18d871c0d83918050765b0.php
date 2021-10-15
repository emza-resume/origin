<?php $__env->startSection('option'); ?>
    <div>
        <a class="btn btn-primary size-20 mt-15" href="/home">
            <?php echo e(__('پنل کاربر')); ?>

            </a>
            <a class="btn btn-danger size-20 mt-15" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <?php echo e(__('خروج')); ?>

        </a>

        <form id="logout-form" class="size-20 mt-15" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header.header-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/layouts/header/header-out.blade.php ENDPATH**/ ?>