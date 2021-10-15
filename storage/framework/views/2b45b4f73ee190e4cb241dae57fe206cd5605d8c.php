<nav>
<div class="container-fluid mb-4 shadow bg-white">
    <div class="row py-3 bg-default" >
      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <a href="/"><img src="<?php echo e(asset('img/final-logo-small.png')); ?>" alt=""  width="64" height="64" loading="lazy"></a>
          <span href="#" class="text-body mx-2 font-weight-bold" style="font-size:1.2rem;wrap:">امضا - سامانه رزومه ساز آنلاین</span>
      </div>

      <div class="col-sm-6 d-sm-none d-md-flex col-md-6 col-lg-8 col-xl-8 d-flex justify-content-end align-self-center jcc" id="nav">
            <?php if(session('Login') == 1): ?>
            <a href="/administrator/statistics" class="btn btn-dark mr-2 size-20">مدیریت</a>
            <?php endif; ?>
             <?php echo $__env->yieldContent('option'); ?>

      </div>
    </div>
</div>
</nav>
<?php /**PATH C:\xampp\mysite\resources\views/layouts/header/header-main.blade.php ENDPATH**/ ?>