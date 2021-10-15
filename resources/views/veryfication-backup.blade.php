@extends('master.layout')
<blade
    section|(%26%2339%3Btitle%26%2339%3B)%20%D8%A7%D8%AD%D8%B1%D8%A7%D8%B2%20%D9%87%D9%88%DB%8C%D8%AA%20%D8%B4%D9%85%D8%A7%D8%B1%D9%87%20%D9%87%D9%85%D8%B1%D8%A7%D9%87%20%40endsection%0D />
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(@$error == 1)
                <div class="alert alert-danger" role="alert">
                    کد وارد شده اشتباه است. لطفا مجدد سعی بفرمایید.
                </div>@endif
                <div class="card bg-primary mb-4">
                    <div class="card-header text-white" style="font-size:15px;">
                        {{ __('تایید کد ارسالی') }}
                    </div>

                    <div class="card-body bg-image-blue"
                        style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                        <form method="POST" action="check-code">
                            {{ session('mobile') }}

                            @csrf
                            <p class="text-center font-weight-bold">کد ارسال شده به تلفن همراهتان را در کادر زیر درج
                                کنید.</p>
                            <div class="form-group row">

                                <div style="margin: 0 auto;">
                                    <input id="code" type="text" maxlength="6" placeholder="_ _ _ _ _ _"
                                        style="color: black !important;letter-spacing: 6px;"
                                        class="form-control text-font-20 bg-light-yellow border-w" name="code" required
                                        autofocus>

                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div style="margin: 0 auto;">

                                    <button type="submit" id="submit" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;width: 150px;" class="btn btn-outline-primary font-weight-bold">
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
@endsection


@section('script')
<script>
    // حالت  فوکوس اتوماتیک موبایل به کلمه عبور
    var clc = 0;
    $("#code").keyup(function () {
        clc += 1;
        if (clc == 6) {
            clc = 0;
            $("#submit").focus();
        }
    });
</script>
<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/popover.js') }}"></script>

@endsection
