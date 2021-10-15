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
        <div class="panel-heading">رزومه</div>
        <div class="panel-body p-5">

            <!-- صفحه رزومه A4 -->
            <div class="bg-white d-black mx-auto" id="pageA4" style="border:1px solid #dee2e6 !important;width:210mm;height:279.4mm">
                @include('component.resume-up')
                    <a
                            class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important;display:none" href="/resume-show/{{ $getbases->BaseBatch }}">نمایش رزومه</a>
                            <br>
                <div class="text-center">
                @include('cv.upload-form-batch')
                </div>
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
