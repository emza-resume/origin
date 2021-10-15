<p class="font-weight-bold" style="font-size: 12px;">  <img src="{{ asset('img/site/new/title/graduation-hat.svg') }}" style="width: 20px;height: 20px;position: relative;top: 3px;" /> &nbsp;سوابق تحصیلی</p>
  <hr>
  @foreach($getedus as $edu)
  <P style="font-size: 12px;">@if($edu->EduNow == 'on') دانشجوی @endif<span id="gradex0" style="font-size: 12px;">{{ $edu->EduSection }}</span>&nbsp;<span id="fsx0" style="font-size: 12px;">{{ $edu->EduMajor }}</span>@if($edu->EduMajor != '') - @endif<span id="adx0" style="font-size: 12px;">{{ $edu->EduOrientation }}</span> &nbsp;</P>
  <P style="font-size: 11px;"><span id="universityx0" style="font-size: 11px;">{{ $edu->EduLnstitute }}</span> &nbsp;<span class="text-white py-1 px-2 rounded" style="font-size: 10px !important;font-family:vazir !important;@if($edu->EduMajor != '')  background-color: rgb(255 255 255) !important;color: black !important;box-shadow: 0px 0px 2px 1px #ccc !important;) !important; @endif" id="gpax0">{{ $edu->EduAverage }}</span></P>
  @endforeach
  </div>
