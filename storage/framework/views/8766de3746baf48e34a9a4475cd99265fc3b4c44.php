 <?php $__env->startSection('title'); ?> template selection <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="step d-block mx-auto text-center m-3 ">
            <div class="line-blue position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle font-weight-bold">Download</div>
        </div>
        <br>
        <div class="step d-block mx-auto text-center m-3">
            <div class="line-blue position-relative"></div>
            <div class="font-12 t-shadow d-flex justify-content-center align-items-center align-self-center size-text-circle font-weight-bold" >Free download
                <br> or payment</div>
        </div>
        <br>
        <div class="step-blue d-block mx-auto text-center m-3">
            <div class="line-green position-relative"></div>
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle text-white" >Template selection</div>
        </div>
        <br>
        <div class="step-green d-block mx-auto text-center m-3 text-white">
            <div class="font-12 d-flex justify-content-center align-items-center align-self-center size-text-circle" onclick="history.go(-1)">Enter information</div>
        </div>
        <br>
    </div>
</div>
<br>
<div class="table-responsive">
    <table align="center" class="table table-primary w-75 border border-primary border-top-primary" style="border: 2px solid #272738 !important;">
        <tr>
            <td class="v-unset">
                <a href="/edit-form-cv-fast-english" class="btn btn-primary ">Edit</a>
            </td>
            <td class="v-unset"><?php echo e($getbases->BaseWebsite); ?>.emza.app</td>
            <td class="v-unset"><?php echo e($getbases->BaseMobile); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseEmail); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseFamily); ?></td>
            <td class="v-unset"><?php echo e($getbases->BaseName); ?></td>
        </tr>
    </table>
</div>
<div class="container">
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg" style="max-width:840px !important">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close m-0" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title pt-2">Demo</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="<?php echo e(asset('img/DemoImage/d-e-demo.jpg')); ?>" class="d-block mx-auto" />
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- The Modal -->
        <div class="modal" id="myModal2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="width:104%">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close m-0" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title pt-2">Demo</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="<?php echo e(asset('img/DemoImage/b-e-demo.jpg')); ?>" class="d-block mx-auto" />
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<div class="bg-white py-5">
    <div class="container">
        <div class="row flex-row-reverse">

            <div class="col-md-4">
                <div class="card box-shadow mb-4">
                    <img class="card-img-top" src="<?php echo e(asset('img/Thumbnail-Image/default-template-en.jpg')); ?>" alt="bootstrap">
                    <div class="card-body">
                        <h5 class="card-title float-right">Default template</h5>

                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <small>Free</small>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-primary"><span><a style="color:white !important;" href="/template-selection/download/en/default-template">Download</a>&nbsp;</span></button>
                            <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal">Demo</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-shadow mb-4">
                    <img class="card-img-top" src="<?php echo e(asset('img/Thumbnail-Image/blue-template-en.jpg')); ?>" alt="bootstrap">
                    <div class="card-body">
                        <h5 class="card-title float-right">Blue template</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <small>6000T</small>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-danger"> <span><a style="color:white !important;" href="/template-selection/download/en/pay">Buy</a></span>&nbsp;</button>
                            <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal2">Demo</button>
                        </div>
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

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/template-selection-english.blade.php ENDPATH**/ ?>