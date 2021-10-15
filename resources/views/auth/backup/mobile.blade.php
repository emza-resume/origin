
@extends('master.layout')
@section('title') ارسال مجدد کد فعال سازی @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(@$errorm == 1)
            <div class="alert alert-danger" role="alert">
                کاربری با این شماره موبایل وجود ندارد.
            </div>@endif
            <div class="card bg-primary mb-4">
                <div class="card-header text-white" style="font-size:15px;">{{ __('فرم ارسال مجدد کد فعال سازی') }}</div>

                <div class="card-body bg-image-blue"
                    style="background-image:url({{ asset('img/back-1.jpg') }}) !important;">
                    <form method="POST" action="check-mobile">
                        {{ session('mobile') }}
                        
                        @csrf
                        <p class="text-center font-weight-bold">شماره موبایل خود را برای ارسال مجدد کد فعال سازی در کادر زیر درج کنید.</p>
                        <div class="form-group row">

                            <div style="margin: 0 auto;">
                                <input id="mobile" type="text" maxlength="11"  style="color: black !important;letter-spacing: 2px;"
                                    class="form-control text-font-20 bg-light-yellow border-w" name="mobile"
                                     required

                                    autofocus>

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div style="margin: 0 auto;">
   
                                <button type="submit" id="submit" class="btn btn-outline-primary font-weight-bold" style="display: inline-block;font-size: 14pz;line-height: 30px;font-weight: 700;border: 1px solid #c7c7c7;-webkit-border-radius: 4px;border-radius: 4px;-moz-box-shadow: 0 2px 4px #ccc;-webkit-box-shadow: 0 2px 4px #ccc;box-shadow: 0 2px 4px #ccc;text-align: center;">
                                    {{ __('ارسال کد فعال سازی') }}
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
    var cle = 0;
    $("#mobile").keyup(function () {
        cle += 1;
        if (cle == 11) {
            cle = 0;
            $("#submit").focus();
        }
    });
</script>
<script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
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
