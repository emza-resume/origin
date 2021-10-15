<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>امضا : پنل مدیریت</title>

    <!-- Fonts -->
    <link href="<?php echo e(asset('fonts/vazir/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/Yekan/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/sans/font.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/uikit.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('fonts/vazir/font.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/themes/basic/assets/fonts/font.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/admin/final-very-small.png')); ?>">
    <script src="<?php echo e(asset('js/uikit/uikit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/uikit/uikit-icons.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/rtl.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/button.css')); ?>" />
    <link  rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/icon.css')); ?>" />
    <script src="<?php echo e(asset('Semantic-UI-1.0/dist/semantic.min.js')); ?>"></script>

    <style>
    *{
        font-size:14px;
    }
    div>div>p>a{
      font-size:14px !important;
    }
    .text-right {
    text-align: right !important !important;
}
    .p-10{
        padding: 10px !important;
    }
    .p-32-right{
        padding-right: 32px !important;
    }
    span{
      color:black;
    }
    body{
      direction:rtl;
    }
    a {
        text-decoration: none;
        color:black;
        font-weight:bold;
        font-size:13px;
    }
    .top-3{
    position: relative !important;
    top: 3px !important;
    }
    a:hover {
        text-decoration: none;
        color:darkblue;
        font-weight:bold;
    }
    </style>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap/rtl/bootstrap.min.css')); ?>">
</head>
<body>
<!-- This is the modal -->
<div id="modal-avatar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"  src="<?php echo e(asset($getbases->BaseAvatar)); ?>" alt="">
    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button" uk-toggle="target: #modal-d">بستن کادر</button>
    </div>
</div>

<div class="uk-container uk-margin-medium uk-margin-auto" style="width: 850px;">
            <div class="border bg-white d-black mx-auto shadow" style="width:210mm;height:279.4mm">
                <?php echo $__env->make('component.resume-up', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <div style="text-align:center">
        <button onclick="window.history.back();" class="ui blue button" style="display:inline-block;margin:0 auto;font-weight:100">
          برگشت
        </button>
        <a href="/administrator/print-resume/<?php echo e($getbases->BaseBatch); ?>" class="ui red button" style="display:inline-block;margin:0 auto;font-weight:100">
          چاپ
        </a>
        </div>


      <br>
      <br>
      <br>
</div>

</body>
</html>











<?php /**PATH /home/emzaapp1/mysite/resources/views/admin/cv-detail.blade.php ENDPATH**/ ?>