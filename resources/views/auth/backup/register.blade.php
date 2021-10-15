@extends('master.layout')
@section('title')
صفحه ثبت نام کاربر
@endsection

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-primary" role="alert">
                برای ساخت رزومه شما باید ابتدا ثبت نام کنید و سپس وارد حساب خود شوید.
            </div>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    شماره موبایل تکراری است.
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger" role="alert">
                    تکرار کلمه عبور با کلمه عبور یکسان نیست.
                </div>
            @enderror
            <div class="card bg-primary mb-3" style="">
                <div class="card-header text-white font-weight-bold" style="font-size:15px;">
                    {{ __('ثبت نام') }}</div>

                <div class="card-body bg-image-blue"
                    style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="display:none;">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="hidden" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text"
                                    class="form-control @error('email') is-invalid border-w @enderror bg-light-yellow border-w text-font-20"
                                    name="email" style="color: black !important;"
                                    value="{{ old('email') }}"
                                    pattern="^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$" required
                                    autocomplete="email" maxlength="11">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror password bg-light-yellow border-w"
                                    name="password" required autocomplete="new-password" maxlength="15">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('تکرار کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                    class="form-control password bg-light-yellow border-w" name="password_confirmation"
                                    required autocomplete="new-password" maxlength="15">
                            </div>
                        </div>
                        @include('captcha')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-outline-primary font-weight-bold" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 75px;">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
