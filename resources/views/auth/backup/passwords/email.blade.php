@extends('master.layout')

@section('title')

فرم بازنشانی کلمه عبور فراموش شده

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(@$err == 1)
                <div class="alert alert-danger" role="alert">
                    کاربری با این شماره موبایل یافت نشد.
                </div>
            @endif
            @if(@$suc == 1)
                <div class="alert alert-success" role="alert">
                    لینک بازنشانی کلمه عبور به موبایل شما ارسال شد.
                </div>
            @endif
            <div class="card bg-primary">
                <div class="card-header text-white" style="font-size:15px;">
                    {{ __('فرم بازنشانی کلمه عبور فراموش شده') }}
                </div>

                <div class="card-body bg-image-blue"
                    style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            لینک بازنشانی کلمه عبور به موبایل شما ارسال شد
                        </div>
                    @endif
                    
                    <form method="POST" action="/send-password">
                        @csrf

                        <div class="form-group row">
                            <label for="mobile"
                                class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" maxlength="11" style="color: black !important;"
                                    class="form-control text-font-20 bg-light-yellow border-w" name="mobile"
                                    value="{{ old('mobile') }}" required
                                    pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$"
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>کاربری با این شماره موبایل یافت نشد.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @include('captcha')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="submit" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 150px;" class="btn btn-outline-primary font-weight-bold">
                                    {{ __('ارسال لینک بازنشانی') }}
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
    var cle = 0;
    $("#mobile").keyup(function () {
        cle += 1;
        if (cle == 11) {
            cle = 0;
            $("#captcha").focus();
        }
    });

    var clp = 0;
    $("#captcha").keyup(function () {
        clp += 1;
        if (clp == 2) {
            clp = 0;
            $("#submit").focus();
        }
    });

</script>
<br>
@endsection
