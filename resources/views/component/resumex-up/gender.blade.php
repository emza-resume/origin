<table style="width:210mm">
<tr style="text-align: center;">
        <td class="p-3 px-5" style="padding-top: 7px !important;">
            <span  id="sjobx" style="color:#020063 !important">حرفه: <span>{{ $getbases->BaseWorkTitle }}</span></span>
            <span id="jobx">&nbsp;</span>
            <div class="rounded-circle d-inline-block mx-3" style=""></div>
            <span  id="ssexx" style="color:#020063 !important">جنسیت: <span>{{ $getbases_b->BaseSex }}</span></span>
            <span id="sexx">&nbsp;</span>
            @if($getbases_b->BaseSummary != NULL)
            <div class="rounded-circle d-inline-block mx-3" style=""></div>
            <span  id="sdescx" style="color:#020063 !important">توصیف خلاصه: <span>{{ $getbases_b->BaseSummary }}</span></span>
            <span id="descx">&nbsp;</span>
            @endif
        </td>
</tr>
</table>
