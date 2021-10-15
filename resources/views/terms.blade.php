@extends('master.layout')
@section('title') قوانین و مقررات @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;background: white;" class="jumbotron w-100 p-3 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <br><br>
            <h5 class="text-center" style="background: blueviolet;width: 200px;padding: 18px;color: white;border-radius: 10px;margin: 0 auto;text-shadow: 1px 0px 1px black;">قوانین و مقررات</h5>
            <br>
            <ul class="list-group m-3">
                <li class="list-group-item">
                        مدیر سایت این حق را دارد که تصویر چهره نامناسب را حذف کند.
                </li>
                <li class="list-group-item back-moc">
                        مدیر سایت این حق را دارد که رزومه با اطلاعات اشتباه را ویرایش یا حذف کند.
                </li>
                <li class="list-group-item">
                                    در صورتی که میخواهید وب سایت داشته باشید نام وب سایت شما نباید کمتر از سه حرف و فارسی باشد.
                </li>

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
