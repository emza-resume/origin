@extends('master.layout-out')
@section('title') اطلاعات رزومه @endsection
@section('css')
    <script src="{{ asset('js/jquery.js') }}"></script><style>
        {{ $getbases->Styles }} #pageA4 {
            background: url({{ asset($getbases->Background) }});
            background-size: cover;
        }

    </style>@endsection @section('content')
    <div class="container">
        <div class="panel panel-primary min-400">
            <div class="panel-heading">رزومه ساخته‌شده</div>
            <div class="panel-body p-5" style="padding-bottom: 0px !important;">
                <div class="border bg-white d-black mx-auto" id="pageA4"
                    style="border:1px solid #dee2e6 !important;width:210mm;height:279mm">@include('component.resume-up')
                    @if (@$mg != '') <a
                            href="/request-create-site/{{ $getbases->BaseBatch }}"
                            class="btn btn-primary float-left p-3 mx-5 mb-5">درخواست ایجاد وب‌سایت</a><a href="/home"
                        class="btn btn-danger float-right p-3 mx-5 mb-5">وب‌سایت نمیخواهم!</a><br><br><br>@else <a
                            class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important;display:none" href="/resume-show/{{ $getbases->BaseBatch }}">نمایش رزومه</a> <a
                            href="/background/{{ $getbases->BaseBatch }}"
                            class="btn btn-warning text-center d-block mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important">تغییر تصویر پس‌زمینه</a><a
                            href="/edit-resume/{{ $getbases->BaseBatch }}"
                            class="btn btn-primary text-center d-block mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important">ویرایش</a><a href="/home"
                            class="btn btn-success text-center d-block mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important">بازگشت</a><a href="/get-print/{{ $getbases->BaseBatch }}"
                            target="_blank" class="print btn btn-secondary text-center d-block mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important">چاپ</a>
                            <a href="/help-download/{{ $getbases->BaseBatch }}"
                            target="_blank" class="help-download btn btn-secondary text-center d-none mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important">راهنمای دانلود</a>
                            <button type="button"
                            class="btn btn-danger text-center d-block mx-auto w-25 p-2 mx-2 mb-2" data-toggle="modal"
                            data-target="#myModal" style="width:230px !important">حذف این رزومه</button><br><br><br>@endif
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">حذف رزومه</h4><button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="text-center">آیا از اینکه می‌خواهید این رزومه را حذف کنید اطمینان دارید؟</p>
                    <div class="d-block mx-auto text-center"><a href="/delete-resume/{{ $getbases->BaseBatch }}"
                            class="btn btn-danger text-center d-inline-block mx-auto w-25 p-2 mx-2 mb-2">بله</a><button
                            type="button" class="btn btn-success text-center mx-auto w-25 p-2 mx-2 mb-2 d-inline-block"
                            data-dismiss="modal">خیر</button></div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    @endsection @section('script')
    <script>
        // Disable form submissions if there are invalid fields (function (){ 'use strict'; window.addEventListener('load', function (){ // Get the forms we want to add validation styles to var forms=document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission var validation=Array.prototype.filter.call(forms, function (form){ form.addEventListener('submit', function (event){ if (form.checkValidity()===false){ event.preventDefault(); event.stopPropagation();} form.classList.add('was-validated');}, false);});}, false);})(); 
    </style>___scripts_3______scripts_4___@endsection
