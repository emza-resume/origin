<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>امضا :: <?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link href="<?php echo e(asset('fonts/vazir/font.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fonts/Yekan/font.css')); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo e(asset('img/final-very-small.png')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.min.css')); ?> ">
        <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?> ">

        <?php echo $__env->yieldContent('css'); ?>

        <!-- bootstrap css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap/rtl/bootstrap.min.css')); ?>">

        
        <style>
          a:hover{
            text-decoration: none;
          }
          a{
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


        </style>

    </head>
    <body dir="rtl">





    <?php echo $__env->yieldContent('content'); ?>



    </body>
</html>
<?php /**PATH /home/emzaapp1/mysite/resources/views/master/layout-download.blade.php ENDPATH**/ ?>