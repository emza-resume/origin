 <?php $__env->startSection('title'); ?> انتخاب قالب <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.back()">واردکردن اطلاعات</div>
        </div>
        <br>
        <div class="step-blue d-block mx-auto text-center m-3" style="color:white;">
            <div class="line-blue position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle">انتخاب قالب</div>
        </div>
        <br>
        <div class="step d-block mx-auto text-center m-3">
            <div class="line-blue position-relative"></div>
            <div class="font-12 t-shadow d-flex justify-content-center align-items-center align-self-center size-text-circle font-weight-bold">دانلود رایگان یا پرداخت</div>
        </div>
        <br>
        <div class="step d-block mx-auto text-center m-3">
            <div class="font-12 t-shadow d-flex justify-content-center align-items-center align-self-center size-text-circle font-weight-bold">دانلود رزومه</div>
        </div>
    </div>
</div>
<br>
<br>
<div class="table-responsive">
    <table align="center" class="table table-primary w-75 border border-primary" style="border: 2px solid #272738 !important;">
        <tr>
            <td class="v-unset"><?php echo e($getbases->BaseName); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseFamily); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseEmail); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseMobile); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseWebsite); ?>.emza.app</td>
            <td class="v-unset">
                <a href="/edit-form-cv-fast-persian" class="btn btn-primary btn-sm">ویرایش</a>
            </td>
        </tr>
    </table>
</div>
<div class="container">
    <!-- The Modal -->
    <div class="modal" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">نمایش آزمایشی</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <br>
                    <img class="d-block mx-auto h-100" src="<?php echo e(asset('img/DemoImage/default-template-demo.jpg')); ?>" <div style="width:20cm;background: #443782;height:20px;margin:0 auto;position: relative;top: -20px;">

                </div>

            </div>
        </div>
    </div>

</div>

<div class="container">
    <!-- The Modal -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width:104% !important">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">نمایش آزمایشی</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <br>
                    <img class="d-block mx-auto h-100" src="<?php echo e(asset('img/DemoImage/gray-template-demo.jpg')); ?>" <div style="width:20cm;background: #443782;height:20px;margin:0 auto;position: relative;top: -20px;">

                </div>

            </div>

        </div>
    </div>
</div>

</div>
<div class="container">
    <!-- The Modal -->
    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width:104% !important">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">نمایش آزمایشی</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <br>
                    <img class="d-block mx-auto h-100" src="<?php echo e(asset('img/DemoImage/blue-template-demo.jpg')); ?>" <div style="width:20cm;background: #443782;height:20px;margin:0 auto;position: relative;top: -20px;">

                </div>

            </div>

        </div>
    </div>
</div>

</div>

<div class="bg-white py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card box-shadow mb-4">
                    <img class="card-img-top" src="<?php echo e(asset('img/Thumbnail-Image/default.jpg')); ?>" alt="bootstrap">
                    <div class="card-body">
                        <h5 class="card-title">قالب پیش فرض</h5>

                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal1">نمایش آزمایشی</button>
                            <button class="btn btn-sm btn-primary">&nbsp;<span><a style="color:white !important;" href="/template-selection/download/default-template">دانلود</a></span></button>
                        </div>
                        <small>رایگان</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-shadow mb-4">
                    <img class="card-img-top" src="<?php echo e(asset('img/Thumbnail-Image/gray.jpg')); ?>" alt="bootstrap">
                    <div class="card-body">
                        <h5 class="card-title">قالب خاکستری زیبا</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal2">نمایش آزمایشی</button>
                            <button class="btn btn-sm btn-danger"> <span><a style="color:white !important;" href="/template-selection/download/pay">خرید</a></span></button>
                        </div>
                        <small>7000 تومان</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-shadow mb-4">
                    <img class="card-img-top" src="<?php echo e(asset('img/Thumbnail-Image/blue.jpg')); ?>" alt="bootstrap">
                    <div class="card-body">
                        <h5 class="card-title">قالب آبی</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal3">نمایش آزمایشی</button>
                            <button class="btn btn-sm btn-danger"> <span><a style="color:white !important;" href="/template-selection/download/pay-blue">خرید</a></span></button>
                        </div>
                        <small>6000 تومان</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('js/popover.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/template-selection-persian.blade.php ENDPATH**/ ?>