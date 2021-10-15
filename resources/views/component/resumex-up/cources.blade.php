<p class="font-weight-bold" style="font-size: 12px;">  <img src="{{ asset('img/site/new/title/book.svg') }}" style="width: 20px;height: 20px;position: relative;top: 3px;" /> &nbsp;دوره‌های آموزشی</p>
  <hr>
  @foreach($getcourses as $courses)
  <P style="margin-top:-2px;margin-bottom: 12px !important;"><span id="CourceTypex0" style="font-size: 12px;">@if($courses->CoursesType != '') دوره @endif {{ $courses->CoursesType }}</span>@if($courses->CoursesType != '') - @endif<span style="font-size: 12px;" id="CourceNamex0">{{ $courses->CoursesTitle }}</span></P>
  <P style="margin-top:-4px;margin-bottom:12px !important;"><span style="font-size: 11px;" id="CourceInstitutex0">{{ $courses->CoursesInstitute }}</span> &nbsp;<span class="text-white py-1 px-2 rounded"  style="font-size: 10px !important;font-family:vazir !important;@if($courses->CoursesType != '')  background-color: rgb(255 255 255) !important;color: black !important;box-shadow: 0px 0px 2px 1px #ccc !important;) !important;  @endif" id="CourceYearx0">{{ $courses->CoursesDate }}</span></P>
  @endforeach
  </div>