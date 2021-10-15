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
      <div class="panel-heading">پیام‌های مدیر</div>
        <div class="panel-body">              

        <div class="table-responsive" style="border-top: 1px solid #dadada;">
    <table class="table table-bordered">
      <thead>
        <tr class="bg-info" style="height:50px;">
          <th class="text-center text-light" style="vertical-align:middle;text-align:center">#</th>
          <th class="text-center text-light"  style="vertical-align:middle;">عنوان پیام</th>
          <th class="text-center text-light"  style="vertical-align:middle;text-align:center">مهم</th>
          <th class="text-center text-light"  style="vertical-align:middle;text-align:center">عملیات</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 0
        ?>
        @foreach($getmassages as $massage)
        <?php $i++ ?>
        
        <tr @if($massage->MassageShow == 1) style="background:#ffffa2" @endif >
          <td class="p-2" style="vertical-align:middle;text-align:center">{{ $i }}</td>
          <td class="p-2" style="vertical-align:middle;">{{ $massage->MassageTitle }}</td>
          <td class="p-2" style="vertical-align:middle;text-align:center">@if($massage->MassageImportant == 1) بله @else خیر @endif</td>
          <td class="p-2">
            <a href="/show-msg/{{ $massage->Massageid }}" style="float: right;" class="btn btn-primary mx-auto w-25 mx-2">نمایش</a>
            &nbsp;
            <a href="/delete-msg/{{ $massage->Massageid }}"  class="btn btn-danger mx-auto w-25 mx-2">حذف</a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="/home" class="btn btn-primary">برگشت</a>

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
