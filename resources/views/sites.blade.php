@extends('master.layout')
@section('title') نمونه سایت ها @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>
<style>
    .sizebox
    {
        width:220px;
        height:220px;
        text-shadow:1px 1px 1px black;
        color:white!important;
    }
    
</style>
@endsection

@section('content')
<br><br>
<div class="container">
<div class="row">


      <a href="https://emza.app/example-site-fa-fast" target="_blank" style="color:white"><div class="btn btn-primary m-2 p-4">نمونه وب سایت فارسی رزومه سریع</div></a>
    <a href="https://emza.app/example-site-en-fast"><div class="btn btn-danger m-2 p-4">نمونه وبسایت انگلیسی رزومه سریع</div></a>
    <a href="https://emza.app/rezax" target="_blank" style="color:white"><div class="btn btn-secondary m-2 p-4">نمونه وب سایت فارسی رزومه حرفه ای</div></a>
    <div class="btn btn-success m-2 p-4">نمونه وب سایت انگلیسی رزومه حرفه ای</div>





</div>
</div>
<br><br>
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
