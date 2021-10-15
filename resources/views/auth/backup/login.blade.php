@extends('auth.template')

@section('title')

صفحه ورود کاربر

@endsection

@section('form-code')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(@$success == 1)
            <div class="alert alert-success" role="alert">
              احراز هویت شما تایید شد. وارد پروفایل خود شده و رزومه سازی را شروع کنید.
            </div>
            @endif
            @if(@$disabled == 1)
            <div class="alert alert-danger" style="background:white !important;" role="alert">
              حساب شما فعال نمی‌باشد.
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/enter-mobile" class="btn btn-outline-primary" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">ارسال مجدد کلمه عبور</a>
            </div>
            @endif
            @error('email')
                <div class="alert alert-danger" role="alert">
                                        شماره موبایل یا کلمه عبور اشتباه می‌باشد
                </div>
            @enderror
            <div class="card bg-primary" style="margin-top:15%">
                <div class="card-header text-white " style="font-size:15px;">{{ __('ورود') }}</div>

                <div class="card-body bg-image-blue"
                    style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                    <form method="POST" action="{{ route('login') }}">
                        
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="email" type="text" maxlength="11" style="color: black !important;"
                                    class="form-control text-font-20 bg-light-yellow border-w" name="email"
                                    value="{{ old('email') }}" required
                                    pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$"
                                    autocomplete="email" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror password bg-light-yellow border-w"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @include('captcha')
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" style="position: relative;top: 3px;" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('من را به یاد داشته باش') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4 static" style="position: relative;left: 65px;">
                                <button type="submit" id="submit" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;" class="btn btn-outline-primary m-1 font-weight-bold">
                                    {{ __('ورود') }}
                                </button>


                                @if(Route::has('password.request'))
                                    <a class="btn btn-outline-danger m-1 font-weight-bold" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 184px;" href="{{ route('password.request') }}">
                                        {{ __('کلمه عبور را فراموش کردید؟') }}
                                    </a>
                                @endif
                                <a href="/register" class="btn btn-outline-success m-1 font-weight-bold" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 75px;">
                                    {{ __('ثبت نام') }}
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    var clp = 0;
    $("#captcha").keyup(function () {
        if (clp == 2) {
            clp = 0;
            $("#remember").focus();
        }
        clp += 1;
    });


    $("#remember").click(function () {
        $("#submit").focus();
    });

    $(document).ready(function () {
        $("#email").focus();
    });
</script>
<br>



@endsection
