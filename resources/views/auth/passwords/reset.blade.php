@extends('../auth.template')

@section('title')
صفحه تعویض کلمه عبور
@endsection

@section('form-title')
فرم تعویض کلمه عبور
@endsection

@section('form-code')
<form method="POST" action="/save-new-password" class="p-5" autocomplete="off">
@if(@$succode == 1)
    <div class="alert alert-auth" role="alert">
    .کلمه عبور با موفقیت تغییر کرد
    </div>
    <script>
    window.location.replace("/login");
    </script>
@endif
@if(@$errcode == 1)
    <div class="alert alert-auth" role="alert">
        .کد وارد شده اشتباه است
    </div>
@endif
@if(@$errcodep == 2)
    <div class="alert alert-auth" role="alert">
        کلمه عبور با تکرار آن مطابقت ندارد.
    </div>
@endif
@csrf
    <div class="text-center" id="mobile">
        <input autocomplete="code" type="tel" maxlength="6" id="code" type="text" placeholder="______"
            style="width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:15px;font-weight:bold;color:darkblue;display:inline-block;margin-top: 0px;  letter-spacing: 0.8em;"
             class="form-control text-font-20 bg-light-yellow border-w" name="code"
            required autofocus="on">
        &nbsp;
        <span for="email" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">
        کد ارسال شده

        </span>
    </div>
    <input type="hidden" name="ac-code" value="{{@$active}}">
    <input type="hidden" name="mobile" value="{{@$mobile}}">

    <div class="text-center" id="password0">
        <input id="password" type="password" maxlength="30"
            style="width: 65%;margin: 0px auto 30px auto;background: #f9f7ff;text-align:center;font-size:15px;font-weight:bold;color:darkblue;display:inline-block;"
            class="form-control text-font-20 bg-light-yellow border-w" name="password" required>
        &nbsp;
        <span for="password" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">
        کلمه‌عبور
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
    </div>
    <div class="text-center" id="password0">
        <input id="password-confirm" type="password" maxlength="30"
            style="width: 65%;margin: 0px auto 30px auto;background: #f9f7ff;text-align:center;font-size:15px;font-weight:bold;color:darkblue;display:inline-block;"
            class="form-control text-font-20 bg-light-yellow border-w" name="password_confirm" required>
        &nbsp;
        <span for="password-confirm" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold">
        
        تکرار کلمه‌عبور
        
        </span>
    </div>
    <!-- recaptcha -->
    <div class="text-center" id="captcha">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM" data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn" style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;" class="submit-btn" disabled>تغییر کلمه عبور</button>
    </div>
    <hr>
    <div style="width:100%;height:0.6rem"></div>
    <!-- forget password -->
    @if(Route::has('password.request'))
        <a style="float:right;text-decoration:none;font-weight:bold;"
            href="{{ route('password.request') }}">
            {{ __('ورود دوباره شماره موبایل برای ارسال کد') }}
        </a>
    @endif
    <!-- register link -->
    <a style="float:left;text-decoration:none;font-weight:bold;" href="/login">
        {{ __('ورود به حساب کاربری') }}
    </a>
</form>
<script>

    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };

</script>
@endsection

