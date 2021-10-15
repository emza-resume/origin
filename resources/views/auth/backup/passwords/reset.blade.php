@extends('master.layout')

@section('title')

ریست کردن کلمه عبور

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(@$succode == 1)
                <div class="alert alert-primary" role="alert">
                    کلمه عبور با موفقیت تغییر کرد.
                </div>
            @endif
            @if(@$errcode == 1)
                <div class="alert alert-danger" role="alert">
                    کد وارد شده اشتباه است.
                </div>
            @endif
            <div class="card bg-primary mb-4">
                <div class="card-header text-white" style="font-size:15px;">
                    {{ __('فرم تعویض کلمه عبور') }}
                </div>

                <div class="card-body  bg-image-blue"
                    style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                    <form method="post" action="/save-new-password">
                        @csrf



                        <div class="form-group row">
                            <label for="code"
                                class="col-md-4 col-form-label text-md-right">{{ __('کد ارسال شده :') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" name="mobile" type="hidden" value="{{ @$mobile }}">

                                <input id="code" type="text" placeholder="_ _ _ _ _ _" style="letter-spacing: 6px;"
                                    maxlength="6"
                                    class="form-control text-font-20 bg-light-yellow border-w @error('email') is-invalid @enderror"
                                    name="code" value="{{ $code ?? old('code') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control password  bg-light-yellow border-w @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>حداقل تعداد کاراکتر برای کلمه عبور 8 کاراکتر است</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('تکرار کلمه عبور :') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                    class="form-control password bg-light-yellow border-w" name="password_confirmation"
                                    required autocomplete="new-password">
                            </div>
                        </div>
                        @include('captcha')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="submit" class="btn btn-outline-primary font-weight-bold" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 100px;">
                                    {{ __('تایید') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // حالت  فوکوس اتوماتیک موبایل به کلمه عبور
    var clc = 0;
    $("#code").keyup(function () {
        clc += 1;
        if (clc == 6) {
            clc = 0;
            $("#password").focus();
        }
    });

    var clp = 0;
    $("#captcha").keyup(function () {
        clp += 1;
        if (clp == 3) {
            clp = 0;
            $("#submit").focus();
        }
    });

</script>
@endsection
