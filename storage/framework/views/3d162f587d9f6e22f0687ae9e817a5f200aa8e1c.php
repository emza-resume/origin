<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>امضا :: چاپ قالب </title>

    <!-- Fonts -->
    <link href="<?php echo e(asset('fonts/vazir/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/Yekan/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/sans/font.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('img/final-very-small.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?> ">

    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap/rtl/bootstrap.min.css')); ?>">

    <style>
        .mt-28-circle
        {
            width:28px !important;
            height:28px !important;
            position:relative;
            top:-4px;
        }
        .mt-26
        {
            font-size:22px !important;
            padding:10px!important;
        }
        .pt-avatar
        {
            width:240px!important;
            height:240px!important;
            border-radius:180px!important;
        }
        .pt-title-24{
            font-size:20px!important;
        }
        .img-icon
        {
            width:20px!important;
            height:20px!important;
        }
        .option-lang
        {
            float: right;
            font-size: 16px;
            position: relative;
            left: 10px;
            top: 3px!important;
            background: black;
            color: white;
            border-radius: 5px;
        }
        .option-lang-2
        {
            float: right;
            font-size: 16px;
            position: relative;
            left: 2px !important;
            top: 12px!important;
            background: black;
            color: white;
            border-radius: 5px;
        }
        #r-1{
            position: relative!important;
            left: 11px !important;
            top: 11px !important;
        }
        #r-2{
            position: relative!important;
            left: 14px !important;
            top: 11px !important;
        }
        .pt-title
        {
            font-size:24px!important;
        }
        #pt-main-title
        {
            font-size:36px!important;
            margin-top: 70px;
        }
        a:hover {
            text-decoration: none;
        }
        
        a {
            text-decoration: none;
        }
        /* width */
        
        ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 5px;
        }
        /* Handle */
        
        ::-webkit-scrollbar-thumb {
            background: #9800a8;
            border-radius: 5px;
        }
        /* Handle on hover */
        
        ::-webkit-scrollbar-thumb:hover {
            background: #9800a8;
        }
        
        #A4 {
            width: 100%!important;
            height: auto!important;
        }
    </style>

</head>

<body dir="rtl" onload="print();">


<?php echo $__env->make('template-dynamic-print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH /home/emzaapp1/mysite/resources/views/template-print.blade.php ENDPATH**/ ?>