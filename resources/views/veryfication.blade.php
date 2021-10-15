@extends('auth.template')

@section('title')
صفحه تایید کد ارسال شده به تلفن همراه
@endsection

@section('form-title')
فرم تایید کد ارسالی
@endsection

@section('form-code')
<form method="post" action="check-code" class="p-5">
    {{ session('mobile') }}
    @csrf
    @if(@$error == 1)
    <div class="alert alert-auth" role="alert">
        .کد وارد شده اشتباه است. لطفا مجدد سعی بفرمایید
    </div>@endif

    <p class="text-center p-3 pt-2">
    .کد ارسال شده به تلفن همراهتان را در کادر زیر درج
                                کنید
    </p>

    <!-- input 6 code -->
    <div class="text-center" id="mobile">
        <input autocomplete="code" type="tel" maxlength="6" id="code" type="text" placeholder="______"
            style="color: black !important;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:15px;color:darkblue;font-weight:bold;display:inline-block;margin-top: 0px;  letter-spacing: 0.8em;"
             class="form-control text-font-20 bg-light-yellow border-w" name="code"
            required autofocus="on">
        &nbsp;
        <span for="email" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">
        کد ارسال شده
        </span>
    </div>
    <!-- recaptcha -->
    <div class="text-center" id="captcha">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM" data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn" style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;" class="submit-btn" disabled>فعال سازی حساب کاربری</button>
    </div>
    <hr>
    <div style="width:100%;height:0.6rem"></div>
    <!-- forget password -->
    @if(Route::has('password.request'))
        <a style="float:right;text-decoration:none;font-weight:bold;"
            href="{{ route('password.request') }}">
            {{ __('کلمه عبور را فراموش کردید؟') }}
        </a>
    @endif
    <!-- register link -->
    <a style="float:left;text-decoration:none;font-weight:bold;" href="/register">
        {{ __('ثبت نام') }}
    </a>
</form>
<script>
function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
</script>

@endsection
