<p class="font-weight-bold" style="font-size: 12px;">  <img src="{{ asset('img/site/new/title/translate.svg') }}" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;مهارت زبان</p>
  <hr>

    <table>

        <tr>
            <td class="pr-2 py-2" style="font-size: 12px;font-weight: bold;">نام زبان</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">خواندن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">نوشتن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">صحبت‌کردن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">گوش‌دادن</td>
        </tr>
        @foreach($getlangs as $langs)
        <tr>
        
            <td class="pr-2 py-2" style="font-size: 12px;#120048" id="langname0x">{{ $langs->LangName }}</td>
            <td class="px-2" id="langReading0x" @if($langs->LangReadingskills == '') style="visibility:hidden;" @endif>
            <div id="LR0Xx1" >
                @for($i=0;$i < $langs->LangReadingskills;$i++)
                    <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                @endfor
                <?php $k = 5 - $langs->LangReadingskills; ?>
                @for($i=0;$i<$k;$i++)
                    <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                @endfor
            </div>
            </td>
            <td class="px-2">
            <div id="LR0Xx2" id="langWriting0x" @if($langs->LangWritingskills == '') style="visibility:hidden;" @endif>
                @for($i=0;$i < $langs->LangWritingskills;$i++)
                        <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                @endfor
                <?php $k = 5 - $langs->LangWritingskills; ?>
                @for($i=0;$i<$k;$i++)
                        <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                @endfor
            </td>
        
            <td class="px-2">
            <div id="LR0Xx3" @if($langs->LangTalkingskills == '') style="visibility:hidden;" @endif>
            @for($i=0;$i < $langs->LangTalkingskills;$i++)
                        <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            @endfor
            <?php $k = 5 - $langs->LangTalkingskills; ?>
            @for($i=0;$i<$k;$i++)
                        <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            @endfor
            </div>
            </td>
            <td class="px-2">
            <div id="LR0Xx4" @if($langs->LangListeningskills == '') style="visibility:hidden;" @endif>
            @for($i=0;$i < $langs->LangListeningskills;$i++)
                <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            @endfor
            <?php $k = 5 - $langs->LangListeningskills; ?>
            @for($i=0;$i<$k;$i++)
                <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            @endfor
            </div>
            </td>
        </tr>
        @endforeach
        
    
    </table>