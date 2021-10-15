<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>امضا : فرم ورود به پنل مدیریت</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/uikit.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/admin/final-very-small.png')); ?>">
    <script src="<?php echo e(asset('js/uikit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/uikit-icons.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/semantic.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/button.css')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo e(asset('Semantic-UI-1.0/dist/semantic.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <style>
        .titlem {
            text-align: center !important;
            width: 162px !important;
            height: 52px !important;
            background: #920079 !important;
            font-size: 17px !important;
            font-family: 'Vaziren' !important;
            color: white !important;
            vertical-align: middle !important;
            border-radius: 90px !important;
            float: right !important;
            position: relative !important;
            top: -53px !important;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }
    </style>
</head>

<body class="uk-background-secondary"
    style="height: 100%;background:url(<?php echo e(asset('img/admin/backmenu.png')); ?>);">

    <div style="width: 60%;border:1px solid black;background: #ffffff;border-radius: 20px;height: 410px;"
        class="uk-position-center uk-container uk-padding">
        <?php if(@$err == 1): ?>
            <div class="ui negative message">

                <div class="header" style="text-align:center;font-family: vaziren;">
                    نام کاربری یا کلمه عبور اشتباه است </div>

            </div>
        <?php endif; ?>
        <div style="position:relative;top:33px;">
            <div class="ui blue message" style="background-color: #920079;">

                <div class="header" style="text-align:center;color:white;font-family: vaziren;">
                    فرم ورود مدیر </div>

            </div>

            <form class="ui form" method="post" action="/administrator/check-auth" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="ui right labeled left icon input uk-margin">
                    <i></i>
                    <input type="text"
                        style="border: 1px solid black;font-size: 20px;font-family: vaziren;text-align:left;background: #92007905;border-radius: 40px !important;"
                        name="username" autocomplete="off" required>
                    <div class="titlem">
                        <div style="height: 15px;"></div>
                        نام کاربری
                    </div>
                </div>
                <div style="position: relative;top: -50px;" class="ui right labeled left icon input uk-margin">
                    <i></i>
                    <input type="password"
                        style="border: 1px solid black;font-size: 20px;font-family: vaziren;text-align:left;background: #92007905;border-radius: 40px !important;"
                        name="password" autocomplete="off" required>
                    <div class="titlem">
                        <div style="height: 15px;"></div>
                        کلمه عبور
                    </div>
                </div>
                <div style="position: relative;top: -100px;">
                    <button type="submit" style="font-size:16px;font-family: vaziren;font-weight: 100;"
                        class="uk-float-right uk-margin-auto ui black  button">ورود</button>
                    <a href="/"
                        style="font-size:16px;font-family: vaziren;font-weight: 100;margin-right:10px !important;background: #920079;"
                        class="uk-float-right uk-margin-auto ui blue  button">
                        صفحه اصلی
                    </a>
                </div>
        </div>
        </form>
    </div>
    </div>


</body>

</html><?php /**PATH /home/emzaapp1/mysite/resources/views/admin/login.blade.php ENDPATH**/ ?>