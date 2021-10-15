<!DOCTYPE html>
<html>
<head>
<title>حمایت مالی از امضا</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/Yekan/font.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/sans/font.css') }}" rel="stylesheet">
        <link href="{{ asset('css/page.css') }}" rel="stylesheet">
        <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/final-very-small.png') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }} ">
        <style>
            .p-donate
            {         
                padding-left: 5%;
                padding-right: 13%;
                padding-top: 50px;
            }
            .price
            {
                font-size:22px;
                font-weight:bold;
                color:black;
            }
            
            @media only screen and (max-width: 600px) {

            }

            
            @media only screen and (max-width: 320px) {
                input{
                    height: 50px !important;
                    position: relative;
                    left: 3px;
                    width: 267px !important;
                }
                button{
                    position: relative;
                    left: 4px;
                    width: 267px !important;
                }
                .donate-card{
                    position: relative;
                    left: 4px;
                    width: 267px !important;
                }
            }
            input{
                    height: 50px !important;
            }
            @media only screen and (max-width: 425px) {
                .donate-card{
                    position: relative !important;
                    right: -3px !important;
                    width: 310px;
                }
            }
                        @media only screen and (max-width: 375px) {
                .donate-card{
                        position: relative !important;
                        right: -23px !important;
                        width: 310px;
                }
            }
                        @media only screen and (max-width: 320px) {
                .donate-card{
                        position: relative !important;
                        right: -23px !important;
                        width: 246px;
                }
            }
            

            
        </style>
</head>
<body style="direction:rtl;">
<div class="d-block mx-auto p-donate">
    <div style="float:right">
        <div id="p1000" class="button big orange m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">1,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p2000" class="button big blue m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">2,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p5000" class="button big orange m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">5,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p10000" class="button big blue m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">10,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p20000" class="button big orange m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">20,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p50000" class="button big blue m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">50,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p100000" class="button big orange m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">100,000 تومان</div>
    </div>
    <div style="float:right">
        <div id="p200000" class="button big blue m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">200,000 تومان</div>
    </div>
    <div style="float:right;">
        <div id="p500000" class="button big orange m-1 donate-card text-donate p-auto d-flex align-items-center justify-content-center price">500,000 تومان</div>
    </div>

</div>
<br><br><br><br>
<div class="d-block mx-auto position-relative" style="clear:both;top:50px;"><h6 class="price text-center">مبلغ قابل پرداخت : <span class="price" id="price-num" style="color:darkred">0</span> تومان</h6></div>
<br><br><br>
<form action="/save-factor-donate" method="post" name="form-factor">
{{ csrf_field() }}
<input type="hidden" id="txt-price" name="txt-price" style="display:none;">
<br>
<div class="form-group">
    <input type="text" class="form-control d-block mx-auto" name="txt-name" placeholder="نام" style="width:320px;" id="txt-name" required>
</div>
<div class="form-group">
    <input type="text" class="form-control d-block mx-auto" name="txt-family" placeholder="نام خانوادگی" style="width:320px;" id="txt-family" required>
</div>
<div class="form-group">
    <input type="email" class="form-control d-block mx-auto" name="txt-email" placeholder="آدرس ایمیل - اختیاری" style="width:320px;" id="txt-email">
</div>
<div class="form-group">
    <input type="text" class="form-control d-block mx-auto" name="txt-mobile" placeholder="شماره موبایل - اختیاری" style="width:320px;" id="txt-mobile">
</div>
<div class="mx-auto d-block" >
        <button type="submit" id="btn-hover" class="button big green text-center position-relative" style="top:25px;width:100px!imporatnt;">پرداخت</button>
</div>
</form>



<br><br><br><br><br><br>
<audio id="audioh" controls="" name="media" style="display:none;"><source src="{{ asset('music/hover.wav') }}" type="audio/mpeg"></audio>
<script>

  $("#btn-hover").mouseover(function(){
    document.getElementById("audioh").play();
  });
  $("#p1000").click(function(){
    $("#price-num").text("1000");
    $("#p1000").addClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");

    document.getElementById("txt-price").value = 10000;
  });
  $("#p2000").click(function(){
    $("#price-num").text("2000");
    $("#p1000").removeClass("gray");
    $("#p2000").addClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 20000;
  });
  $("#p5000").click(function(){
    $("#price-num").text("5000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").addClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 50000;
  });
  $("#p10000").click(function(){
    $("#price-num").text("10,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").addClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 100000;
  });
  $("#p20000").click(function(){
    $("#price-num").text("20,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").addClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 200000;
  });
  $("#p50000").click(function(){
    $("#price-num").text("50,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").addClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 500000;
  });
  $("#p100000").click(function(){
    $("#price-num").text("100,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").addClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 1000000;
  });
  $("#p200000").click(function(){
    $("#price-num").text("200,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").addClass("gray");
    $("#p500000").removeClass("gray");
    document.getElementById("txt-price").value = 2000000;
  });
  $("#p500000").click(function(){
    $("#price-num").text("500,000");
    $("#p1000").removeClass("gray");
    $("#p2000").removeClass("gray");
    $("#p5000").removeClass("gray");
    $("#p10000").removeClass("gray");
    $("#p20000").removeClass("gray");
    $("#p50000").removeClass("gray");
    $("#p100000").removeClass("gray");
    $("#p200000").removeClass("gray");
    $("#p500000").addClass("gray");
    document.getElementById("txt-price").value = 5000000;
  });


</script>
</body>
</html>