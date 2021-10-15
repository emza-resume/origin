
@extends('master.layout')
@section('title') وضعیت ثبت نام @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<br>
<br>
<br>
<div class="container">
<div class="row">
    <div style="border-width: 2px !important;padding: 100px !important;background-color:#72ffa4!important;color:black !important;" class="jumbotron bg-success w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 p-5 text-center text-white border border-success rounded-lg">
        <span style="font-size:20px;" >تبریک!</span> ثبت نام شما با موفقیت انجام شد
        <div class="mt-5">
            <a href="/login" class="btn btn-primary">ورود به حساب کاربری</a>
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>
@endsection


@section('script')
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
