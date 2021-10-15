<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>امضا :: چاپ قالب </title>

    <!-- Fonts -->
    <link href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" rel="stylesheet">
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
            width:22px !important;
            height:22px !important;
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
            font-size:15px!important;
        }
        .img-icon
        {
            width:20px!important;
            height:20px!important;
        }
        .option-lang
        {
            float: left;
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
            float: left;
            font-size: 16px;
            position: relative;
            left: 10px;
            top: 15px!important;
            background: black;
            color: white;
            border-radius: 5px;
        }
        .pt-title
        {
            font-size:24px!important;
        }
        #pt-main-title
        {
            font-size:36px!important;
            margin-top: 80px;
        }
        .r-1{
            position:relative;top:10px;left:3px;
        }
        .r-2{
            position:relative;top:10px;
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

    <?php echo $__env->make('template-dynamic-en', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\mysite\resources\views/template-print-en.blade.php ENDPATH**/ ?>