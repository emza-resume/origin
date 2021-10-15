<!DOCTYPE html>
<html lang="fa">
<head>
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="سامانه رزومه ساز آنلاین">
    <meta name="keywords" content="رزومه‌ساز فارسی,رزومه‌ساز,سامانه رزومه‌ساز،" >
    <meta name="keywords" content="سامانه رزومه‌ساز, رزومه‌ساز, رزومه‌ساز فارسی,رزومه ,رزومه‌ساز آنلاین,رزومه‌ساز سریع,رزومه ساز">
    <meta name="robots" content="index,follow">
    <title>امضا :: <?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('owl\dist\assets\owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('owl\dist\assets\owl.theme.green.min.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
    type='text/css'>

    <!-- Fonts -->
    <link href="<?php echo e(asset('fonts/nazanin/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/vazir/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/Yekan/font.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/sans/font.css')); ?>" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo e(asset('img/final-very-small.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?> ">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('footer/css/Footer-with-logo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('footer/css/style.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/mac/button.css')); ?> ">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap/rtl/bootstrap.min.css')); ?>">

    <!-- semantic ui -->
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/rtl.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/button.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/icon.css')); ?>" />
    <script src="<?php echo e(asset('Semantic-UI-1.0/dist/semantic.min.js')); ?>"></script>
    <script src="<?php echo e(asset('owl/dist/owl.carousel.min.js')); ?>"></script>
    
    <style>
    <?php echo $__env->yieldContent('styles'); ?>
        * {
            color: black;
        }

        a:hover {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 12px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 5px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #9800a8;
            border-radius: 1px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #9800a8;
        }

        .font-13 {
            font-size: 14px !important;
        }
        #pageA4{
            background:url(<?php echo e(asset($getbases->Background)); ?>) !important;
            background-size:100% 100% !important;
            background-repeat: no-repeat !important;
            background-position: 100% 100%;
        }
    </style>
    <link rel="stylesheet" href="<?php echo e(asset('css/new.css')); ?> ">
    <?php echo htmlScriptTagJsApi(@$configuration); ?>


</head>

<body dir="rtl" class="bg-white">



    <script src="<?php echo e(asset('js/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.4.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/angular.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper/popper.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home/emzaapp1/mysite/resources/views/master/layout-main-head.blade.php ENDPATH**/ ?>