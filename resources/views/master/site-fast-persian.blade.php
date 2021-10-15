
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{ asset('img/upload/1587382721my1373.png') }}" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
    <title>وب سایت رضا احمدی قوام آباد </title>
    <style>
        .fa {
            font: normal normal normal 18px/1 FontAwesome!important;
        }
        
        .d-title {
            height: 46vmax;
            display: flex;
            align-items: center;
            justify-content: center
        }
        
        .fa {
            font: normal normal normal 18px/1 FontAwesome!important;
        }
        
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
        
        .subtext {
            color: white;
            text-align: right;
            font-size: 14px;
            direction: rtl;
            color: black;
            font-weight: bold;
        }
        
        .fa {
            font: normal normal normal 18px/1 FontAwesome !important;
        }
        
        .pbox {
            padding: 29px;
            margin: 20px;
            margin-top: 20px;
            background: white;
            border-radius: 7px;
            height: 180px !important;
        }
        
        .ex {
            background: white;
            border: 1px solid black;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 10px;
            float: right;
            margin-right: 15px;
            margin-top: 15px;
            font-weight: bold;
        }
        
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        @keyframes    gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
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
        
        .bluecolor {
            color: blue !important;
        }
    </style>
</head>

<body>
    <div class="box">
        <div id="L1" class="boxp" style="background: #f1c40f;left:0px;top:0px;">
            <div class="headbox" style="background: #d0a90d;">اطلاعات تماس</div>
            <span class="bluecolor"></span>
            <div class="pbox">
                <p class="subtext">شماره موبایل : <span class="bluecolor">09226681982</span></p>
                <p class="subtext">تلفن تماس : <span class="bluecolor">03537213382</span></p>
                <p class="subtext">ایمیل : <span class="bluecolor">rezaahmadiyazd@gmail.com</span></p>
            </div>
        </div>
        <div id="L2" class="boxp" style="background: #16a085;left:327px;top: -327px;">
            <div class="headbox" style="background: #11806a;">اطلاعات پایه</div>
            <div class="pbox">
                <p class="subtext">نام : <span class="bluecolor">رضا</span></p>
                <p class="subtext">نام‌خانوادگی : <span class="bluecolor">احمدی قوام آباد</span></p>
                <p class="subtext">وضعیت تاهل : <span class="bluecolor">مجرد</span></p>
                <p class="subtext">وضعیت سربازی : <span class="bluecolor">معافیت غیرپزشکی</span></p>
            </div>
        </div>
        <div id="L3" class="boxp" style="background: #1abc9c;left: 654px;top: -654px;">
            <div class="headbox" style="background: #169c82;">آواتار</div>
            <div><img width="200" height="200px" src="{{ asset('img/my1373.png')}}" /></div>
        </div>
        <div id="L4" class="boxp" style="background: #e67e22;left:0px;top: -654px;">
            <div class="headbox" style="background: #c16a1d;">زبان</div>
            <div class="pbox">
                <p class="subtext">نام زبان : <span class="bluecolor">انگلیسی</span></p>
                <p class="subtext">مهارت نوشتن :

                    <span style="position:relative;left: -3px;">
                            <span class="fa fa-star checked"></span>                 <span class="fa fa-star checked"></span>                 <span class="fa fa-star checked"></span>                      <span class="fa fa-star"></span>                     <span class="fa fa-star"></span>                     </span>

                    <p class="subtext">مهارت خواندن :                             <span class="fa fa-star checked"></span>                             <span class="fa fa-star checked"></span>                             <span class="fa fa-star checked"></span>                              <span class="fa fa-star"></span>                             <span class="fa fa-star"></span>                     </p>
                </p>
            </div>
        </div>
        <div id="L5" class="boxp" style="background: #27ae60;left: 327px;top: -981px;">
            <div class="headbox" style="background: #1f864a;">مهارت‌ها</div>
                        <div class="ex">برنامه نویس ویندوز</div>
            
        </div>
        <div id="L6" class="boxp" style="background: #f39c12;left: 654px;top: -1308px;">
            <div class="headbox" style="background: #cc8311;">تحصیلات</div>
            <div class="pbox">
                <div style="position:relative;top:-20px;">
                    <p class="subtext">مقطع : <span class="bluecolor">کارشناسی</span></p>
                    <p class="subtext">رشته : <span class="bluecolor">مهندسی کامپیوتر</span> </p>
                    <p class="subtext">گرایش : <span class="bluecolor">نرم افزار</span> </p>
                    <p class="subtext">عنوان موسسه :<span class="bluecolor">آموزش عالی امام جواد یزد</span> </p>
                    <p class="subtext">معدل : <span class="bluecolor">17.77</span> از 20</p>
                </div>
            </div>
        </div>
        <div id="L7" class="boxp" style="background: #8e44ad;left:0px;top: -1308px;">
            <div class="headbox" style="background: #693380;">سوابق شغلی</div>
            <div class="pbox">
                <p class="subtext">سمت : <span class="bluecolor">برنامه نویس ظاهر وب</span> </p>
                <p class="subtext">نوع مرکز : <span class="bluecolor">شرکت</span></p>
                <p class="subtext">نام مرکز : <span class="bluecolor">سپهر سلامت</span> </p>
                <p class="subtext">نحوه همکاری : <span class="bluecolor">کارآموزی</span></p>
            </div>
        </div>

        <div id="L9" class="boxp" style="background: #2980b9;left: 327px;top: -1635px;">
            <div class="headbox" style="background: #206592;">دوره های آموزشی</div>
            <div class="pbox">
                <p class="subtext">نوع دوره : <span class="bluecolor">نرم‌افزار</span> </p>
                <p class="subtext">دوره ها : <span class="bluecolor">گیت - vscode</span> </p>
                <p class="subtext">عنوان موسسه آموزشی : <span class="bluecolor">سایت راکت</span> </p>
            </div>
        </div>
        <div id="L10" class="boxp" style="background: #c0392b;left: 654px;top: -1962px;">
            <div class="headbox" style="background: #9c3024;">پایان‌نامه</div>
            <div class="pbox">
                <p class="subtext">نام پایان نامه : <span class="bluecolor">طراحی و پیاده سازی سامانه مدیریت داروخانه</span> </p>
                <p class="subtext">تاریخ دفاع از پایان نامه: <span class="bluecolor">1397/7/7</span></p>
            </div>
        </div>
        <div id="L11" class="boxp" style="background: #2c3e50;left: 654px;top: -1962px;">
            <div class="headbox" style="background: #161e27;">سن</div>
            <div class="pbox">
                <p class="subtext"> تاریخ تولد : <span class="bluecolor">1373/2/1</span> </p>
                <br>
                <p class="subtext" style="text-align: center;"> <span class="bluecolor" style="    text-align: center;
    font-size: 38px;">26</span> ساله </p>
            </div>
        </div>
        <div id="L12" class="boxp" style="background: #e74c3c;left: 327px;top: -2289px;">
            <div class="headbox" style="background: #bd3f32;">حرفه</div>
            <div class="pbox">
                <p class="subtext" style="font-size:40px;text-align:center"><span style="font-size:30px" class="bluecolor">برنامه نویس وب</span></p>
            </div>
        </div>

    </div>

    <audio controls="" autoplay="" name="media" style="display:none;"><source src="http://emza.app/music/back.mp3" type="audio/mpeg"></audio>

</body>

</html>