<title>resume</title>
<?php $__env->startSection('css'); ?>
<style>

<?php echo e($getbases->Styles); ?>;
#pageA4{
  background:url(<?php echo e(asset($getbases->Background)); ?>) !important;
  background-size:cover;
  background-repeat: no-repeat !important;
}
</style>
<?php $__env->stopSection(); ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="d-block mx-auto" id="pageA4" style="width:210mm;height:279.4mm;transform: scale(1.5);">
<?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<script>
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
    window.print();
</script>

<script defer>
try {
document.getElementById('emailx').removeAttribute('href');
document.getElementById('weblogx').removeAttribute('href');
document.getElementById('instagramx').removeAttribute('href');
document.getElementById('websitex').removeAttribute('href');
} catch (error) {
  document.getElementById('websitex').removeAttribute('href');
  document.getElementById('instagramx').removeAttribute('href');
  console.error(error);
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
}
</script>

<?php echo $__env->make('master.layout-out-print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/print.blade.php ENDPATH**/ ?>