<p class="font-weight-bold" style="font-size: 12px;">  <img src="{{ asset('img/site/new/title/suitcase.svg') }}" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;سوابق شغلی</p>
<hr style="margin-bottom: 10px !important;">
@foreach($getworks as $works)
<P style="margin-bottom:7px;"><span style="font-size: 12px;" id="workPostx0">{{ $works->WorkPost }}</span>@if($works->WorkPost != '') - @endif<span style="font-size: 12px;" id="workCooperatex0">{{ $works->WorkCooperation }}</span></P>
<P><span style="font-size: 11px;" id="workCenterx0">{{ $works->WorkCenter }}</span> <span style="font-size: 11px;" id="workCenterTitlex0">{{ $works->WorkTitleCenter }}</span></P>
@endforeach