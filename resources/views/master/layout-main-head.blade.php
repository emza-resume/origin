<!DOCTYPE html>
<html lang="fa">
<head>
    <script src="{{ asset('js/jquery.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="سامانه رزومه ساز آنلاین">
    <meta name="keywords" content="رزومه‌ساز فارسی,رزومه‌ساز,سامانه رزومه‌ساز،" >
    <meta name="keywords" content="سامانه رزومه‌ساز, رزومه‌ساز, رزومه‌ساز فارسی,رزومه ,رزومه‌ساز آنلاین,رزومه‌ساز سریع,رزومه ساز">
    <meta name="robots" content="index,follow">
    <title>امضا :: @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('owl\dist\assets\owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl\dist\assets\owl.theme.green.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
    type='text/css'>

    <!-- Fonts -->
    <link href="{{ asset('fonts/nazanin/font.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/Yekan/font.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/sans/font.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/final-very-small.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }} ">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('footer/css/Footer-with-logo.css') }}">
    <link rel="stylesheet" href="{{ asset('footer/css/style.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/mac/button.css') }} ">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/rtl/bootstrap.min.css') }}">

    <!-- semantic ui -->
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/rtl.css') }}" />
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/components/button.css') }}" />
    <link rel="stylesheet" href="{{ asset('Semantic-UI-1.0/dist/components/icon.css') }}" />
    <script src="{{ asset('Semantic-UI-1.0/dist/semantic.min.js') }}"></script>
    <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>
    {{-- styles --}}
    <style>
    @yield('styles')
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
            background:url({{ asset($getbases->Background) }}) !important;
            background-size:100% 100% !important;
            background-repeat: no-repeat !important;
            background-position: 100% 100%;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/new.css') }} ">
    {!! htmlScriptTagJsApi(@$configuration) !!}

</head>

<body dir="rtl" class="bg-white">



    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/angular.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    @yield('script')
</body>
</html>
