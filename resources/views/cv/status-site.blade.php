@extends('master.layout-out')
@section('title')

    وضعیت وب سایت شخصی

@endsection
@section('css')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/upload.js') }}"></script>
@endsection

@section('content')
<div class="container">

    <div class=" d-flex align-items-center justify-content-center"> 
    <div class="panel panel-primary" style="min-height:400px;">
    <?php @$status = @$_GET['Status']; ?>
    @if(@$status == 'NOK')
    <div class="alert alert-danger">
    <strong>عملیات ناموفق</strong> عملیات پرداخت موفقیت آمیز نبود.
    </div>
    @endif
    @if(@$status == 'OK')
    <div class="alert alert-success">
    <strong>عملیات موفق</strong> پرداخت با موفقیت انجام شد. از پرداخت شما متشکریم.
    </div>
    @endif
    <h3 class="m-5 text-center">وضعیت سایت</h3>
    <p class="m-5 text-center" style="direction: ltr;font-size: 18px;font-weight: 400;"><a href="http://{{ $getbases->BaseWebsite}}.emza.app" style="direction: ltr;font-size: 18px;font-weight: 400;" target="_blank">{{ $getbases->BaseWebsite}}.emza.app</a> :آدرس سایت</p>
    <p class="m-5 text-center" style="direction: ltr;font-size: 18px;font-weight: 400;"> وضعیت سایت: <span class="font-weight-bold @if($getbases->RequestSite == 2 ||$getbases->RequestSite == 3 || $getbases->RequestSite == 4) text-success @else text-warning @endif" style="font-size: 18px;">{{ $msg }}</span></p>
    @if($getbases->RequestSite == 2)
    <p class="m-5 text-center" style="direction: ltr;font-size: 18px;font-weight: 400;">هزینه قابل پرداخت: 50000 تومان</p>
    <form action="/go-to-bank" method="post">
        @csrf
        <input type="hidden" name="price" value="50000">
        <input type="hidden" name="email" value="{{$getbases->BaseEmail}}">
        <input type="hidden" name="mobile" value="{{$getbases->BaseMobile }}">
        <input type="hidden" name="id" value="{{$getbases->Baseid }}">
        <button type="submit" style="direction: ltr;font-size: 18px;font-weight: 400;" class="btn btn-primary m-5 px-3 mx-auto w-25 d-block">پرداخت</button>
    </form>
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
<script>
  $("#website").click(function(){
    $("#websitex").text(".emza.app");
  });
  $("#website").keyup(function(){
    $("#websitex").text($("#website").val()+".emza.app");
  });

</script>
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/popover.js') }}"></script>


@endsection
