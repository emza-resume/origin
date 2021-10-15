<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>امضا :: @yield('title')</title>

        <!-- Fonts -->
        <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/Yekan/font.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/sans/font.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('img/final-very-small.png') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }} ">

        @yield('css')
        <link rel="stylesheet" href="{{ asset('css/mac/button.css') }} ">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/rtl/bootstrap.min.css') }}">

        {{--  styles  --}}
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
       .font-13
       {
           font-size:13px !important;
       }

        </style>

    </head>
    <body dir="rtl">





    @yield('content')



    </body>
</html>
