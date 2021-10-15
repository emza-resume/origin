@extends('master.layout')
@section('title') حریم خصوصی @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<div class="container">
<div class="row">
    <div style="border-width: 2px !important;" class="jumbotron bg-white w-100 p-3 pb-1 p-sm-1 mt-2 mx-3 border border-info rounded-lg">
        <br>
        <h5 class="text-center" style="background: blueviolet;width: 200px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">حریم خصوصی</h5>
        <br>
        <p class="text-justfy px-5">
        </p>
        <ul class="list-group m-3">
            <li class="list-group-item text-justify">فقط خود شما میتوانید رزومه تان را ویرایش کنید ولی در شرایط خاص امکان ویرایش رزومه توسط مدیر سایت وجود دارد.</li>
            <li class="list-group-item back-moc text-justify">اطلاعات شما به هیچ سازمان یا فردی فروخته نمی‌شود.</li>
            <li class="list-group-item text-justify">امکان نمایش بعضی از وبسایت های ساخته شده به عنوان مثال وجود دارد.</li>
            <li class="list-group-item back-moc text-justify">اطلاعات تماس و بازخورد شما با مدیر سایت محرمانه باقی می‌ماند.</li>
            <li class="list-group-item text-justify">نام کاربری و کلمه عبور شما به هیچ عنوان در اختیار کسی قرار نمیگیرد.</li>
            <li class="list-group-item back-moc text-justify">حتی به دلیل رمزشدن کلمه عبور، مدیر سایت نیز نمی‌تواند به کلمه عبور شما دسترسی داشته باشد.</li>
        </ul>
        <br>
        <br>
    </div>
</div>
</div>
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
