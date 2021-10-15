@extends('master.layout-out')
@section('title')
افزودن عکس به رزومه
@endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/upload.js') }}"></script>
<style>
{{ $getbases->Styles }}
#pageA4{
  background:url({{ asset($getbases->Background) }});
  background-size:cover;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">رزومه ساخته شده</div>
        <div class="panel-body p-3">

            <!-- صفحه رزومه A4 -->
            <a
        class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
        style="width:208px !important;display:none" href="/resume-show/{{ $getbases->BaseBatch }}">نمایش رزومه</a>
            
            <div class="bg-white d-block mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                @include('component.resume-up')

                <div class="text-center">
                @include('cv.upload-form')
                </div>

                <a href="/get-resume" class="btn btn-danger p-3 m-5 ms">فعلا تصویر مناسبی ندارم، بعداً</a>
            </div>
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
