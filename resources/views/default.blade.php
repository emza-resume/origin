<table align="center" class="border border-dark mt-5" style="background-size:cover;width:21cm;height:29cm;background:url('{{ asset('img/back-default.jpg') }}');background-size:cover;">
    <tr>
        <td colspan="4"><h4 class="text-center" >{{ $getbases->BaseName }} {{ $getbases->BaseFamily }}</h4></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td class="text-left pl-3">{{ $getbases->BaseWorkTitle }}</td>
        <td class="text-left pl-3">متولد  {{ $getbases->BaseBirthdate }}</td>
        <td class="text-left pl-3">وضعیت تاهل: {{ $getbases->BaseMarital }}</td>
        <td class="text-left pl-3">وضعیت سربازی: {{ $getbases->BaseSolider }}</td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3 tahoma"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات تماس</span></td>
    </tr>
    <tr>
        <td colspan="2" class="text-left pl-3">آدرس ایمیل: {{ $getbases->BaseEmail }}</td>
        <td colspan="2" class="text-left pl-3">شماره ثابت: {{ $getbases->BaseTel}}</td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="2" class="text-left pl-3"> تلفن همراه: {{ $getbases->BaseMobile }}</td>
        <td colspan="2" class="text-left pl-3">وب سایت: {{ $getbases->BaseWebsite }}.emza.app</td>
    </tr>
    <tr >
            <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات تحصیلی</span></td>
        </tr>
        <tr class="border border-dark border-bottom-1 border-top-0">
            <td colspan="4" class="text-left pl-3">دارای مدرک {{ $getedus->EduSection }} {{ $getedus->EduMajor }} گرایش {{ $getedus->EduOrientation }} از {{ $getedus->EduLnstitute }} . معدل: {{ $getedus->EduAverage }} از 20</td>
        </tr>

    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">سوابق شغلی</span></td>

    </tr >
    <tr>
        <td colspan="2" class="text-left pl-3">سمت: {{ $getworks->WorkPost }}</td>
        <td colspan="2" class="text-left pl-3">مرکز اشتغال: {{ $getworks->WorkCenter }}</td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
            <td colspan="2" class="text-left pl-3">نام مرکز: {{ $getworks->WorkTitleCenter }}</td>
            <td colspan="2" class="text-left pl-3">نحوه همکاری: {{ $getworks->WorkCooperation }}</td>
    </tr>
    <tr >
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">اطلاعات زبان</span></td>

    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td class="text-left pl-3">زبان خارجه: {{ $getlangs->LangName }}</td>
        <td class="text-left pl-3">مهارت نوشتن: {{ $getlangs->LangWritingskills }} از 5</td>
        <td class="text-left pl-3">مهارت خواندن: {{ $getlangs->LangReadingskills }} از 5</td>
        <td class="text-left pl-3"></td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">مهارت‌های تجربی</span></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="4" class="text-left pl-3">
            {{ $getskills->SkillsName }}
        </td>

    </tr>
    <tr >
        <td colspan="4" class="text-left pl-3 tahoma"><span class="badge badge-dark p-3 position-relative top-9">دوره یا دوره ها</span></td>
    </tr>
    <tr class="border border-dark border-bottom-1 border-top-0">
        <td colspan="2" class="text-left pl-3">
            دوره {{ $getcourses->CoursesType }} در {{ $getcourses->CoursesInstitute }}
        </td>
        <td colspan="2" class="text-left pl-3">
            عنوان دوره: {{ $getcourses->CoursesTitle }}
        </td>

    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3"><span class="badge badge-dark p-3 position-relative top-9">عنوان پروژه یا پایان نامه</span></td>
    </tr>
    <tr>
        <td colspan="4" class="text-left pl-3">
           نام این پروژه {{ $getprojects->ProjectTitle }} است که
            در تاریخ {{ $getprojects->ProjectDate }} دفاع شد
         </td>

    </tr>
    <tr>
        <td colspan="4" class="text-center pl-3">
                www.emza.app
        </td>
    </tr>
</table>
