@extends('master.layout-out') @section('title') اطلاعات رزومه @endsection @section('css')
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/upload.js')}}"></script>
<style>
    {{ $getbases->Styles}}
    #pageA4{ background:url({{ asset($getbases->Background)}}); background-size:cover;}
</style>
@endsection @section('content')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">تغییر تصویر پس‌زمینه</div>
        <div class="panel-body p-5" style="padding-bottom: 0px !important;">
            <div class="border bg-white d-black mx-auto" id="pageA4" style="border: 1px solid black !important; width: 210mm; height: 279mm;">
                    @include('component.resume-up') 
                    
                    <a
                            class="btn btn-dark text-center show-resume mx-auto w-25 p-2 mx-2 mb-2"
                            style="width:230px !important;display:none" href="/resume-show/{{ $getbases->BaseBatch }}">نمایش رزومه</a>
                            <br>
                <div class="text-center">
                    <form  method="post" action="/upload-background" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file" style="width: 60%;">
                            <input type="hidden" name="batch" value="{{$batch}}">
                            <input type="hidden" name="userid" value="{{$getbases->BaseUserid}}">
                    
                            <input type="file"  name="background" id="customFile" accept="image/gif, image/jpeg, image/png">
                            
                            <br>
                            <button type="submit" class="btn btn-primary m-4">آپلود تصویر پس‌زمینه</button>
                        </div>
                    </form>
                    <br>
                    
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('script')
<script>
    // Disable form submissions if there are invalid fields (function (){ 'use strict'; window.addEventListener('load', function (){ // Get the forms we want to add validation styles to var forms=document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission var validation=Array.prototype.filter.call(forms, function (form){ form.addEventListener('submit', function (event){ if (form.checkValidity()===false){ event.preventDefault(); event.stopPropagation();} form.classList.add('was-validated');}, false);});}, false);})();
</script>
<script src="{{ asset('js/fontawesome.js')}}"></script>
<script src="{{ asset('js/popover.js')}}"></script>
@endsection
