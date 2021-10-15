@extends('auth.template')

@section('title')
صفحه ارسال مجدد کد فعال‌سازی
@endsection

@section('form-title')
فرم ارسال مجدد کد فعال‌سازی   
@endsection

@section('form-code')
<form method="POST" action="check-mobile" class="p-5">
    @if(@$errorm == 1)
    <div class="alert alert-auth" role="alert">
        .کاربری با این شماره موبایل وجود ندارد
    </div>
    @endif
    @csrf
    <p class="text-center p-3 pt-2">.برای دریافت کد 6 رقمی فعال‌سازی شماره موبایل خود را در کادر زیر درج کنید</p>
    <div class="text-center" id="mobile">
        <input id="mobile" type="tel" maxlength="11"
            style="color: black !important;width: 65%;margin: 30px auto;background: #f9f7ff;text-align:center;font-size:17px;display:inline-block;margin-top: 0px;"
            placeholder="09*********" class="form-control text-font-20 bg-light-yellow border-w" name="mobile"
            required=pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$" autofocus="on">
        &nbsp;
        <span for="mobile" style="color: black !important;width: 50%;text-align: center;font-size: 14px;font-weight:bold;">شماره
            موبایل</span>
    </div>

    <!-- recaptcha -->
    <div class="text-center" id="captcha">
        <div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM" data-callback="recaptchaCallback"></div>
    </div>
    <!-- button -->
    <div class="text-right" style="text-align:center;" id="submit">
        <button type="submit" id="submitBtn" style="font-size: 17px;width: 60%;padding: 16px;margin: 30px auto !important;text-align: center;" class="submit-btn" disabled>ارسال کد</button>
    </div>
    <hr>
    <div style="width:100%;height:0.6rem"></div>
    <!-- login link -->
    <a style="float:right;text-decoration:none;font-weight:bold;" href="/login">
        {{ __('ورود به حساب کاربری') }}
    </a>

</form>
<script>
function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
</script>

@endsection
