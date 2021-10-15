@extends('master.layout')
@section('title') سایت های ساخته شده @endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>

@endsection

@section('content')
<div class="container">
<div class="row">
    <br><br>
    <br><br>
    <br><br>


    <p class="text-danger text-center">هیچ رزومه ای جهت نمایش وجود ندارد</p>
    </br>
    </br>
    </br>


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
