<!DOCTYPE html>
<html>

<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
    <title>وب سایت  {{$getbases->BaseName}} {{$getbases->BaseFamily}} </title>
    <style>
        .box {
            width: 981px;
            height: 1307px;
            background: #ecf0f1;
            display: block;
            margin: 120px auto;
        }
        .checked {
          color: orange;
        }
        .headbox {
            width: 307px;
            height: 24px;
            padding: 10px;
            text-align: center;
            display: block;
            margin: 0 auto;
            color: white;
            font-size: 16px;
        }
        .subtext
        {
            color: white;
            text-align: right;
            font-size: 14px;
            direction: rtl;
            color: black;
            font-weight: bold;
        }
        .fa
        {
                font: normal normal normal 18px/1 FontAwesome !important;
        }
        .pbox
        {
                padding: 29px;
                margin: 20px;
                margin-top: 32px;
                background: white;
                border-radius: 7px;   
        }
        .ex
        {
                background: white;
                border: 1px solid black;
                border-top-left-radius: 10px;
                border-bottom-right-radius: 10px;
                padding: 10px;
                float: right;
                margin: 15px;
                font-weight: bold;
                
        }
        body {
            background: blue;
        }
        
        img {
            margin: 38px auto;
            display: block;
            border-style: ridge;
        }
        
        .boxp {
            width: 327px;
            height: 327px;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="box">
        <div id="L1" class="boxp" style="background: #f1c40f;left:0px;top:0px;">
            <div class="headbox" style="background: #d0a90d;">اطلاعات تماس</div>
            
            <div class="pbox">
            <p class="subtext">شماره موبایل : {{$getbases->BaseMobile}}</p>
            <p class="subtext">تلفن تماس : {{$getbases->BaseTel}}</p>
            <p class="subtext">ایمیل : {{$getbases->BaseEmail}}</p>
            </div>
        </div>
        <div id="L2" class="boxp" style="background: #16a085;left:327px;top: -327px;">
            <div class="headbox" style="background: #11806a;">اطلاعات پایه</div>
            <div class="pbox">
            <p class="subtext">نام : {{$getbases->BaseName}}</p>
            <p class="subtext">نام‌خانوادگی : {{$getbases->BaseFamily}}</p>
            <p class="subtext">وضعیت تاهل : {{$getbases->BaseMarital}}</p>
            <p class="subtext">وضعیت سربازی : {{$getbases->BaseSolider}}</p>
            </div>
        </div>
        <div id="L3" class="boxp" style="background: #1abc9c;left: 654px;top: -654px;">
            <div class="headbox" style="background: #169c82;">آواتار</div>
            <div><img width="200" height="200px" src="{{ asset('img/my1373.png') }}" /></div>
        </div>
        <div id="L4" class="boxp" style="background: #e67e22;left:0px;top: -654px;">
            <div class="headbox" style="background: #c16a1d;">زبان</div>
            <div class="pbox">
            <p class="subtext">نام زبان : انگلیسی</p>
            <p class="subtext">مهارت نوشتن: &nbsp;            <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></p>

            <p class="subtext">مهارت خواندن : <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></p> </p>
            </div>
        </div>
        <div id="L5" class="boxp" style="background: #27ae60;left: 327px;top: -981px;">
            <div class="headbox" style="background: #1f864a;">مهارت‌ها</div>
            
                <div class="ex">لاراول</div>
                <div class="ex" style="margin-right: 0px;">HTML</div>
            
        </div>
        <div id="L6" class="boxp" style="background: #f39c12;left: 654px;top: -1308px;">
            <div class="headbox" style="background: #cc8311;">تحصیلات</div>
            <div class="pbox" style="padding: 10px;">
            <p class="subtext">مقطع : {{$getedu->EduSection}}</p>
            <p class="subtext">رشته : {{$getedu->EduMajor}}  </p>
            <p class="subtext">گرایش : {{$getedu->EduOrientation}} </p>
            <p class="subtext">عنوان موسسه : {{$getedu->EduLnstitute}}     </p>
            <p class="subtext">معدل : {{$getedu->EduAverage}}</p>
            </div>
        </div>
        <div id="L7" class="boxp" style="background: #8e44ad;left:0px;top: -1308px;">
            <div class="headbox" style="background: #693380;">سوابق شغلی</div>
            <div class="pbox">
            <p class="subtext">سمت : برنامه نویس ظاهر وب</p>
            <p class="subtext">نوع مرکز :  شرکت </p>
            <p class="subtext">نام مرکز : سپهرسلامت </p>
            <p class="subtext">نحوه همکاری : کارآموزی</p>
            </div>
        </div>

        <div id="L9" class="boxp" style="background: #2980b9;left: 327px;top: -1635px;">
            <div class="headbox" style="background: #206592;">دوره های آموزشی</div>
            <div class="pbox">
            <p class="subtext">نوع زبان : برنامه نویسی </p>
            <p class="subtext">دوره ها : لاراول - webpack</p>
            <p class="subtext">عنوان موسسه آموزشی : سایت راکت </p>
            </div>
        </div>
        <div id="L10" class="boxp" style="background: #c0392b;left: 654px;top: -1962px;">
            <div class="headbox" style="background: #9c3024;">پایان‌نامه</div>
            <div class="pbox">
                <p class="subtext">نام پایان نامه : طراحی و پیاده سازی سامانه مدیریت داروخانه    </p>
                <p class="subtext">تاریخ دفاع از پایان نامه: 7/7/1397</p>
            </div>
        </div>
        <div id="L11" class="boxp" style="background: #2c3e50;left: 654px;top: -1962px;">
            <div class="headbox" style="background: #161e27;">سن</div>
                                    <div class="pbox">
            <p class="subtext" > تاریخ تولد : {{$getbases->BaseBirthdate}} </p>
            <br>
            <p class="subtext" style="    text-align: center;
    font-size: 24px;"> {{$old}}  ساله </p>
            </div>
        </div>
        <div id="L12" class="boxp" style="background: #e74c3c;left: 327px;top: -2289px;">
            <div class="headbox" style="background: #bd3f32;">حرفه</div>
                        <div class="pbox">
            <p class="subtext" style="font-size:26px;text-align:center">{{$getbases->BaseWorkTitle}}</p>
            </div>
        </div>

    </div>

</body>

</html>