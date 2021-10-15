<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>امضا : پنل مدیریت</title>
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/vazir/font.css') }}" />
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/themes/basic/assets/fonts/font.css') }}" />
    <link rel="shortcut icon" href="{{ asset('img/admin/final-very-small.png') }}">
    <script src="{{ asset('js/uikit/uikit.min.js') }}"></script>
    <script src="{{ asset('js/jquery3.js') }}"></script>
    <script src="{{ asset('js/uikit/uikit-icons.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/rtl.css') }}" />
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/components/button.css') }}" />
    <link  rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/components/icon.css') }}" />
    <link  rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/components/button-amazon.min.css') }}" />
    <script src="{{ asset('Semantic-UI-1.0/dist/semantic.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    @yield('meta')
    <style>
    *{
        font-size:13px;
    }
    .p-10{
        padding: 10px !important;
    }
    .p-32-right{
        padding-right: 32px !important;
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
    @yield('style');
    </style>
</head>
<body class="uk-background-secondary"  style="height: 625px;background:url({{ asset('img/admin/backmenu.png') }});"> 

<div style="width: 1100px;height:500px;/* border: 2px solid black; */background: white;" class="uk-position-center uk-box-shadow-large uk-container uk-padding uk-box-shadow-large">
        <div style="width: 800px;height:500px;margin-left:-100px;overflow: overlay;" class="uk-position-center uk-container uk-padding">
            @yield('body')
        </div>
        <div style="width: 200px;border-left: 1px solid #e5e5e5;padding: 0px;background: white;" class="uk-position-right uk-float-right uk-container uk-padding">

        <ul class="uk-list uk-list-collapse uk-list-striped">
            <li class="p-10 uk-text-right p-32-right"><a href="/administrator/statistics">آمار و ارقام</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/graph.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right uk-background-default"><a href="/administrator/persian-resumes">رزومه‌های فارسی</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/report.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right"><a href="/administrator/users">کاربران</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/businessman.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right uk-background-default"><a href="/administrator/show-request-site">درخواست سایت</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/report.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right"><a href="/administrator/show-donate">حمایت‌ها</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/cash.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right uk-background-default"><a href="/administrator/send-massage-all">ارسال پیام به کاربران</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/analysis.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right"><a href="/administrator/messages">پیام‌ها</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/mail.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right uk-background-default"><a href="/administrator/feedback">بازخورد‌ها</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/three-stars.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right uk-background-default"><a href="/administrator/pictures">تصاویر</a>&nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/photo.svg') }}" width="20" height="20"  alt=""></li>
            <li class="p-10 uk-text-right p-32-right " style="border-bottom: 1px solid #e5e5e5;">
            <a href="/administrator/trash">سطل زباله</a>
            &nbsp;<img style="left: 15px;position: relative;" src="{{ asset('img/admin/icons/trash-can.svg') }}" width="20" height="20"  alt=""></li>
            <div class="uk-position-relative" style="top:19px;"><a href="/administrator/logout-admin"><img src="{{ asset('img/off.svg') }}" class="uk-align-center uk-margin-small-top" style="position:relative;top:-8px;left: -18px;" alt="" width="30" height="30"></a>&nbsp;<a href="/"><img src="{{ asset('img/site/home.png') }}" class="uk-align-center uk-margin-small-top" style="position:relative;top: -97px;left: 24px;" alt="" width="30" height="30"></a></div>
        </ul>
        </div>
        
</div>



</body>
</html>