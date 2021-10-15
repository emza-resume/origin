
@extends('admin.home')
@section('style')



.pagination
{
  direction: rtl !important;
  padding-right: 0px;
  margin-top: 30px;
    margin-right: -4px;
}

ul.pagination li {
    display: inline;
    font-size: 14px;
    font-weight: bold;

}

ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;

}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;

}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #6435c9;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #eee;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}
*{
  font-weight: normal;
}
@endsection

@section('body')
<p style="direction:rtl;"><span style="font-weight:bold;">گیرنده :</span> {{ $name_family }}   &nbsp; &nbsp;&nbsp;           <span style="font-weight:bold;">تعداد پیام‌های ارسال شده :</span> {{ $c_send }}</p>

@if(@$send == 1)
<div class="ui info message">
  <div class="header" style="direction: rtl;font-size:13px;">
پیام با موفقیت به {{ @$name_family }} ارسال شد.
  </div>
</div>
@endif
<form class="ui form" method="post" action="/administrator/send-massage" style="direction:rtl;">
@csrf
  <div class="field">
    <label>عنوان</label>
    <input type="text" name="msg-title" required>
    <input type="hidden" name="userid" value="{{ $userid }}">
    <input type="hidden" name="name_family" value="{{ $name_family }}">
    <input type="hidden" name="c_send" value="{{ $c_send }}">

  </div>
  <div class="field">
    <label>متن پیام</label>
    <textarea  name="msg-text" required></textarea>
  </div>
  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" name="msg-impo" tabindex="0">
      <label style="font-weight:700;font-size:12px;">این پیام مهم است.</label>
    </div>
  </div>
  <button class="ui red button" style="font-weight: 100;font-size:12px;background:red" type="submit">ارسال پیام</button>
</form>




@endsection