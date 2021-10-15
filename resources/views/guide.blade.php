@extends('master.layout')
@section('title') تماس با ما @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<div class="container">
<div class="row">
    <div style="border-width: 2px !important;" class="jumbotron bg-light w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <br>
            <h5 class="text-center">راهنما</h5>
            <p class="text-justify m-4">
                <h6 class="text-center">راهنمای ساخت رزومه فارسی</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/g-persian-1.png') }}" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="site-g" src="{{ asset('img/g-persian-2.png') }}" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
                <br>

                <p class="text-center text-primary">
اطلاعات خود را درج کنید و بر روی گزینه "ذخیره و ادامه" کلیک کنید.
<br>
 در صفحه زیر باید قالب را انتخاب کنید
</p>
<img class="d-block mx-auto img-thumbnail border" id="buy-g" src="{{ asset('img/g-persian-3.png') }}" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
<img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/g-persian-4.png') }}" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
<img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/g-persian-5.png') }}" alt="راهنمای ساخت رزومه فارسی" style="width:90%;" >
<br>
                <br>
                <br>

                <h6 class="text-center">راهنمای ساخت رزومه انگلیسی</h6>
                <br>
                  <img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/g-english-1.png') }}" alt="راهنمای ساخت رزومه سریع انگلیسی" style="width:90%;" >
                <br>
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/g-english-2.png') }}" alt="راهنمای ساخت رزومه سریع انگلیسی" style="width:90%;" >
                <br>
                <h6 class="text-center">راهنمای ثبت نام</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="register-g" src="{{ asset('img/register-g.png') }}" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
                <h6 class="text-center">راهنمای ورود به پنل کاربری</h6>
                <br>
                <img class="d-block mx-auto img-thumbnail border" id="login-g" src="{{ asset('img/login-1.png') }}" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
                <img class="d-block mx-auto img-thumbnail border" src="{{ asset('img/login-2.png') }}" alt="راهنمای ثبت نام" style="width:90%;" >
                <br>
            </p>
    @if (@$save == 1)
       <p class="text-success m-4">نظر شما با موفقیت ثبت شد.</p>
    @endif
  </div>
</div>
</div>
@endsection


@section('script')

<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/popover.js') }}"></script>

@endsection
