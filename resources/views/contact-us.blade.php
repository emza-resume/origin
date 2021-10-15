@extends('master.layout')
@section('title') تماس با ما @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;width: 90% !important;"
            class="jumbotron bg-white w-100 p-3 pb-1 p-sm-1 mt-2 mx-3 border border-info rounded-lg">
            
            <h5 class="text-center" style="background: blueviolet;width: 200px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">فرم تماس با مدیر سایت</h5> </h5>


            <form action="/submit-comment" method="post" class="needs-validation m-4" novalidate>
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="uname">نام:</label>
                    <input type="text" class="form-control" id="name" placeholder="لطفا نام خود را وارد کنید"
                        name="name" required>
                </div>
                <div class="form-group">
                    <label for="pwd">آدرس ایمیل:</label>
                    <input type="email" class="form-control text-right" id="email" placeholder="" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">متن نظر:</label>
                    <textarea class="form-control" rows="4" id="comment" placeholder="لطفا نظر خود را بنویسید"
                        name="comment" required></textarea>
                </div>
                <div style="transform: scale(0.7);">@include('captcha')</div>
                
                <button type="submit" id="rec" class="btn btn-primary" disabled>ثبت نظر</button>
            </form>
            @if(@$save == 1)
                <p class="text-success m-4">نظر شما با موفقیت ثبت شد.</p>
            @endif
        </div>
    </div>
</div>
@endsection


@section('script')
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
