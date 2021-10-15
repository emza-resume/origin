<br>
<p class="font-weight-bold" style="font-size: 12px;">  <img src="{{ asset('img/site/new/title/book (1).svg') }}" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;پایان‌نامه</p>
    <hr>
    @foreach($getthesis as $thesis)
    <P style="height:17px;font-size: 12px;" id="thesisTitlex0">@if($thesis->ArticlesTitle != '') {{ $thesis->ArticlesTitle }} @endif</P>
    <P style="height:17px;font-size: 12px;">@if($thesis->ArticlesTitle != '' && $thesis->ArticlesDate != '//')تاریخ دفاع: @endif<span style="font-size:12px;color:darkblue !important" id="thesisDefenceTextx0">@if($thesis->ArticlesTitle != '' && $thesis->ArticlesDate != '//') {{ $thesis->ArticlesDate }} @endif</span>
     
    </P>
    @endforeach