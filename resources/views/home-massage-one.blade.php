@extends('master.layout-out') @section('title') خانه @endsection
@section('styles')
@media screen and (min-width: 1024px) {
    #w123{
        width:123%;
    }
}
@endsection
@section('content')

<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">پیام مدیر</div>
        <div class="panel-body">              

        <div class="table-responsive" style="border-top: 1px solid #dadada;">
    <table class="table table-bordered">
      <tr>
        <td style="width:200px">شماره پیام</td>
        <td>1000{{ $getmassage->Massageid }}</td>
      </tr>
      <tr class="bg-light">
        <td style="width:200px" >عنوان پیام</td>
        <td>{{ $getmassage->MassageTitle }}</td>
      </tr>
      <tr>
        <td style="width:200px">مهم</td>
        <td>@if($getmassage->MassageImportant == 1) بله @else خیر @endif</td>
      </tr>
      <tr class="bg-light">
        <td style="width:200px">زمان ارسال</td>
        <td>{{ $created_at }}</td>
      </tr>
      <tr>
        <td style="width:200px">متن پیام</td>
        <td style="height:200px;">{{ $getmassage->MassageText }}</td>
      </tr>
    </table>

    <a href="/show-massages/{{$getmassage->MassageUserid}}" class="btn btn-primary">برگشت</a>
  </div>
        </div> 
       </div>
    </div>
</div>
<script>
setTimeout(function(){ 
    var x = document.getElementById("alertsuc");   // Get the element with id="demo"
    x.style.visibility = "hidden"; 
 }, 6000);
</script>
@endsection
