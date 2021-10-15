@extends('component.panel')

@section('formName')
UodateCVForm
@endsection

@section('actionPath')
/update-resume
@endsection

@section('s-title')
فرم ویرایش رزومه سریع فارسی
@endsection

@section('button-title')
&nbsp; به روزرسانی اطلاعات
@endsection

@section('button-icon')
{{ asset('img/update.png') }}
@endsection

@section('backpanel-1')
background-color: #ecfff7;
border-color:#00864e !important;
@endsection

@section('backpanel-2')
background-color: #ffecec;
border-color:#840000 !important;
@endsection

@section('backpanel-3')
background-color: #edecff;
border-color:#0400ff !important;
@endsection

@section('backpanel-4')
background-color: #fdecff;
border-color:#8c007b !important;
@endsection

@section('backpanel-5')
background-color: #fff6ec;
border-color:#8c5400 !important;
@endsection

@section('backpanel-6')
background-color: #ecfffa;
border-color:#008c86 !important;
@endsection

@section('backpanel-7')
background-color: #ecf2ff;
border-color:#0027e8 !important;
@endsection

@section('backpanel-8')
background-color: #ecdbff;
border-color: #320069 !important;
@endsection

@section('backpanel-9')
background-color: #ffe8dd;
border-color: #9c3200 !important;
@endsection

@section('batch')
{{ $getbases->BaseBatch }}
@endsection

@section('base_name')
{{ $getbases->BaseName }}
@endsection

@section('sec_avatar')
{{ $getbases->BaseAvatar }}
@endsection

@section('base_family')
{{ $getbases->BaseFamily }}
@endsection

@section('base_work')
{{ $getbases->BaseWorkTitle }}
@endsection

@section('base_city')
{{ $getbases_b->BaseCity }}
@endsection

@section('base_mobile')
{{ $getbases->BaseMobile }}
@endsection

@section('base_pre_number_country')
@if($getbases_b->BaseCountry == 'ایران')
98+
@endif
@endsection

@section('base_birthday')
{{ $day }}
@endsection

@section('base_month_birth')
{{ $month }}
@endsection

@section('base_year_birth')
{{ $year }}
@endsection

@section('base_telephone')
{{ $tel }}
@endsection

@section('base_sex')

@endsection

@section('base_pre')
{{ $pretel }}
@endsection

@section('base_email')
{{ $getbases->BaseEmail }}
@endsection

@section('base_weblog')
{{ $getbases_b->BaseWeblog }}
@endsection

@section('base_instagram')
{{ $getbases_b->BaseSocial }}
@endsection

@section('base_desc')
{{ $getbases_b->BaseSummary }}
@endsection

@section('cources_Type0')
{{ $getcourse1->CoursesType }}
@endsection

@section('cources_Name0')
{{ $getcourse1->CoursesTitle }}
@endsection

@section('cources_Year0')
{{ $getcourse1->CoursesDate }}
@endsection

@section('courcesInstitution_Name0')
{{ $getcourse1->CoursesInstitute }}
@endsection

@section('snow')
        <!-- در حال تحصیل -->
        <div class="form-group float-left m-1 m-md-3" style="min-width:0px;position: relative;top: 30px;margin-left: 0px !important;margin-right: 0px !important;">
            <input type="checkbox" @if($getedus->EduNow == 'on') checked @endif class="custom-control custom-checkbox" title="در حال تحصیل" name="education-now" id="education-now">
        </div>
@endsection

@section('education_FS0')
{{ $getedus->EduMajor }}
@endsection

@section('education_AD0')
{{ $getedus->EduOrientation }}
@endsection

@section('education_University0')
{{ $getedus->EduLnstitute }}
@endsection

@section('GPA_University0')
{{ $getedus->EduAverage }}
@endsection

@section('langName_0')
{{ $getlang1->LangName }}
@endsection

@section('workPost_0')
{{ $getwork1->WorkPost }}
@endsection

@section('workTitleCenter_0')
{{ $getwork1->WorkTitleCenter }}
@endsection

@section('projectName0')
{{ $getproject1->ProjectTitle }}
@endsection

@section('projectStartYear_0')
{{ $projectyearstart }}
@endsection

@section('projectEndYear_0')
{{ $projectyearend }}
@endsection

@section('projectEmployer_0')
{{ $getproject1->ProjectEmployer }}
@endsection

@section('projectLink_0')
{{ $getproject1->ProjectLink }}
@endsection

@section('thesisTitle_0')
{{ $getthesis1->ArticlesTitle }}
@endsection

@section('year_0')
{{ $yeart1 }}
@endsection

@section('thesisTitle_1')
{{ $getthesis2->ArticlesTitle }}
@endsection

@section('year_1')
{{ $yeart2 }}
@endsection

@section('skillsName_0')
{{ $getskill1->SkillsName }}
@endsection

@section('eg1')
{{ $getedus2->EduSection }}
@endsection

@section('ef1')
{{ $getedus2->EduMajor }}
@endsection

@section('ea1')
{{ $getedus2->EduOrientation }}
@endsection

@section('eu1')
{{ $getedus2->EduLnstitute }}
@endsection

@section('egpu1')
{{ $getedus2->EduAverage }}
@endsection


@section('eg2')
{{ $getedus3->EduSection }}
@endsection

@section('ef2')
{{ $getedus3->EduMajor }}
@endsection

@section('ea2')
{{ $getedus3->EduOrientation }}
@endsection

@section('eu2')
{{ $getedus3->EduLnstitute }}
@endsection

@section('egpu2')
{{ $getedus3->EduAverage }}
@endsection

@section('scripts')

    @for($i=0;$i<$s_n;$i++)
    $("#btn-add-edu").click();

    var section2 = '{{$getedus2->EduSection}}';
    if(section2 == 'زیر دیپلم')
    {
        $("#es01").attr("selected","selected")
    }
    if(section2 == 'دیپلم')
    {
        $("#es11").attr("selected","selected")
    }
    if(section2 == 'فوق دیپلم')
    {
        $("#es21").attr("selected","selected")
    }
    if(section2 == 'کارشناسی ناپیوسته')
    {
        $("#es31").attr("selected","selected")
    }
    if(section2 == 'کارشناسی پیوسته')
    {
        $("#es41").attr("selected","selected")
    }
    if(section2 == 'کارشناسی ارشد')
    {
        $("#es51").attr("selected","selected")
    }
    if(section2 == 'دکتری')
    {
        $("#es61").attr("selected","selected")
    }

    var section3 = '{{$getedus3->EduSection}}';
    if(section3 == 'زیر دیپلم')
    {
        $("#es02").attr("selected","selected")
    }
    if(section3 == 'دیپلم')
    {
        $("#es12").attr("selected","selected")
    }
    if(section3 == 'فوق دیپلم')
    {
        $("#es22").attr("selected","selected")
    }
    if(section3 == 'کارشناسی ناپیوسته')
    {
        $("#es32").attr("selected","selected")
    }
    if(section3 == 'کارشناسی پیوسته')
    {
        $("#es42").attr("selected","selected")
    }
    if(section3 == 'کارشناسی ارشد')
    {
        $("#es52").attr("selected","selected")
    }
    if(section3 == 'دکتری')
    {
        $("#es62").attr("selected","selected")
    }

    @endfor



    $("#FS1").val('{{ $getedus2->EduMajor }}');
    $("#AD1").val('{{ $getedus2->EduOrientation }}');
    $("#university1").val('{{ $getedus2->EduLnstitute }}');
    $("#GPA1").val('{{ $getedus2->EduAverage }}');
    $("#FS2").val('{{ $getedus3->EduMajor }}');
    $("#AD2").val('{{ $getedus3->EduOrientation }}');
    $("#university2").val('{{ $getedus3->EduLnstitute }}');
    $("#GPA2").val('{{ $getedus3->EduAverage }}');
    

    var sexS = 0;
    if($("#avatar").val('زن'))
    {
         sexS = 1;
         
    }
    if($("#avatar").val('مرد'))
    {
         sexS = 2;
         
    }

    $("#sex").change(function () {
        if(sexS == 2 && $("#sex").val() == 'زن')
        {
            $("#avatar").val('img/avatar/woman.png');
            $("#avatarxx").attr("src","{{ asset('img/avatar/woman.png') }}");
        }
        if(sexS == 2 && $("#sex").val() == 'مرد')
        {
            $("#avatar").val('{{ $getbases->BaseAvatar }}');
            $("#avatarxx").attr("src","{{ asset($getbases->BaseAvatar) }}");
        }
        if(sexS == 1 && $("#sex").val() == 'زن')
        {
            $("#avatar").val('{{ $getbases->BaseAvatar }}');
            $("#avatarxx").attr("src","{{ asset($getbases->BaseAvatar) }}");
        }
        if(sexS == 1 && $("#sex").val() == 'مرد')
        {
            $("#avatar").val('img/avatar/man.png');
            $("#avatarxx").attr("src","{{ asset('img/avatar/man.png') }}");
        }
    });
    $("#avatar").val('{{ $getbases->BaseAvatar }}');
    $("#avatarxx").attr("src","{{ asset($getbases->BaseAvatar) }}");

    @for($i=0;$i<$l_n;$i++)
    $("#btn-add-lang").click();
    
    var reading2 = '{{$getlang2->LangReadingskills}}';
    
    if(reading2 == '1')
    {
        $("#l11").attr("selected","selected");
    }
    if(reading2 == '2')
    {
        $("#l21").attr("selected","selected");
    }
    if(reading2 == '3')
    {
        $("#l31").attr("selected","selected");
    }
    if(reading2 == '4')
    {
        $("#l41").attr("selected","selected");
    }
    if(reading2 == '5')
    {
        $("#l51").attr("selected","selected");
    }


    var writing2 = '{{$getlang2->LangWritingskills}}';
    
    if(writing2 == '1')
    {
        $("#w11").attr("selected","selected");
    }
    if(writing2 == '2')
    {
        $("#w21").attr("selected","selected");
    }
    if(writing2 == '3')
    {
        $("#w31").attr("selected","selected");
    }
    if(writing2 == '4')
    {
        $("#w41").attr("selected","selected");
    }
    if(writing2 == '5')
    {
        $("#w51").attr("selected","selected");
    }

    var talking2 = '{{$getlang2->LangTalkingskills}}';
    
    if(talking2 == '1')
    {
        $("#s11").attr("selected","selected");
    }
    if(talking2 == '2')
    {
        $("#s21").attr("selected","selected");
    }
    if(talking2 == '3')
    {
        $("#s31").attr("selected","selected");
    }
    if(talking2 == '4')
    {
        $("#s41").attr("selected","selected");
    }
    if(talking2 == '5')
    {
        $("#s51").attr("selected","selected");
    }

    var lisining2 = '{{$getlang2->LangListeningskills}}';
    
    if(lisining2 == '1')
    {
        $("#ls11").attr("selected","selected");
    }
    if(lisining2 == '2')
    {
        $("#ls21").attr("selected","selected");
    }
    if(lisining2 == '3')
    {
        $("#ls31").attr("selected","selected");
    }
    if(lisining2 == '4')
    {
        $("#ls41").attr("selected","selected");
    }
    if(lisining2 == '5')
    {
        $("#ls51").attr("selected","selected");
    }



    $("#langName"+{{$i+1}}).val('{{ $getlang2->LangName }}');


    var reading3 = '{{$getlang3->LangReadingskills}}';
    
    if(reading3 == '1')
    {
        $("#l12").attr("selected","selected");
    }
    if(reading3 == '2')
    {
        $("#l22").attr("selected","selected");
    }
    if(reading3 == '3')
    {
        $("#l32").attr("selected","selected");
    }
    if(reading3 == '4')
    {
        $("#l42").attr("selected","selected");
    }
    if(reading3 == '5')
    {
        $("#l52").attr("selected","selected");
    }

    var writing3 = '{{$getlang3->LangWritingskills}}';
    
    if(writing3 == '1')
    {
        $("#w12").attr("selected","selected");
    }
    if(writing3 == '2')
    {
        $("#w22").attr("selected","selected");
    }
    if(writing3 == '3')
    {
        $("#w32").attr("selected","selected");
    }
    if(writing3 == '4')
    {
        $("#w42").attr("selected","selected");
    }
    if(writing3 == '5')
    {
        $("#w52").attr("selected","selected");
    }

    var talking3 = '{{$getlang3->LangTalkingskills}}';
    
    if(talking3 == '1')
    {
        $("#s12").attr("selected","selected");
    }
    if(talking3 == '2')
    {
        $("#s22").attr("selected","selected");
    }
    if(talking3 == '3')
    {
        $("#s32").attr("selected","selected");
    }
    if(talking3 == '4')
    {
        $("#s42").attr("selected","selected");
    }
    if(talking3 == '5')
    {
        $("#s52").attr("selected","selected");
    }

    @section('ln1')
    {{$getlang2->LangName}}
    @endsection

    @section('lr1')
    {{$getlang2->LangReadingskills}}
    @endsection

    @section('lw1')
    {{$getlang2->LangWritingskills}}
    @endsection

    @section('ls1')
    {{$getlang2->LangTalkingskills}}
    @endsection

    @section('ll1')
    {{$getlang2->LangListeningskills}}
    @endsection

    @section('ln2')
    {{$getlang3->LangName}}
    @endsection

    @section('lr2')
    {{$getlang3->LangReadingskills}}
    @endsection

    @section('lw2')
    {{$getlang3->LangWritingskills}}
    @endsection

    @section('ls2')
    {{$getlang3->LangTalkingskills}}
    @endsection

    @section('ll2')
    {{$getlang3->LangListeningskills}}
    @endsection


    var lisining3 = '{{$getlang3->LangListeningskills}}';
    
    if(lisining3 == '1')
    {
        $("#ls12").attr("selected","selected");
    }
    if(lisining3 == '2')
    {
        $("#ls22").attr("selected","selected");
    }
    if(lisining3 == '3')
    {
        $("#ls32").attr("selected","selected");
    }
    if(lisining3 == '4')
    {
        $("#ls42").attr("selected","selected");
    }
    if(lisining3 == '5')
    {
        $("#ls52").attr("selected","selected");
    }

    $("#langName2").val('{{ $getlang3->LangName }}');

    @endfor

    <!-- //work get value -->
    @for($i=0;$i<$w_n;$i++)
    $("#btn-add-work").click();
    @endfor
    $("#workPost1").val('{{ $getwork2->WorkPost }}');
    $("#workTitleCenter1").val('{{ $getwork2->WorkTitleCenter }}');
    var workcenter2 = '{{$getwork2->WorkCenter}}';
    if(workcenter2 == 'موسسه'){$("#wc11").attr("selected","selected");}
    if(workcenter2 == 'شرکت'){$("#wc21").attr("selected","selected");}
    if(workcenter2 == 'سازمان'){$("#wc31").attr("selected","selected");}
    if(workcenter2 == 'نهاد'){$("#wc41").attr("selected","selected");}
    if(workcenter2 == 'خود‌اشتغال'){$("#wc51").attr("selected","selected");}
    if(workcenter2 == 'فریلسنر'){$("#wc61").attr("selected","selected");}
    if(workcenter2 == 'بیمارستان'){$("#wc71").attr("selected","selected");}
    if(workcenter2 == 'بیمارستان روانی'){$("#wc81").attr("selected","selected");}
    if(workcenter2 == 'کلینیک'){$("#wc91").attr("selected","selected");}
    if(workcenter2 == 'بنیاد'){$("#wc101").attr("selected","selected");}
    if(workcenter2 == 'دانشگاه'){$("#wc111").attr("selected","selected");}
    if(workcenter2 == 'مدرسه'){$("#wc121").attr("selected","selected");}
    if(workcenter2 == 'حوزه علمیه'){$("#wc131").attr("selected","selected");}
    if(workcenter2 == 'آموزشگاه'){$("#wc141").attr("selected","selected");}
    if(workcenter2 == 'مرکز'){$("#wc151").attr("selected","selected");}
    if(workcenter2 == 'کارگاه'){$("#wc161").attr("selected","selected");}
    if(workcenter2 == 'اداره آب'){$("#wc171").attr("selected","selected");}
    if(workcenter2 == 'اداره گاز'){$("#wc181").attr("selected","selected");}
    if(workcenter2 == 'اداره برق'){$("#wc191").attr("selected","selected");}
    if(workcenter2 == 'بیمه'){$("#wc201").attr("selected","selected");}
    if(workcenter2 == 'آتشنشانی'){$("#wc211").attr("selected","selected");}
    if(workcenter2 == 'اورژانش'){$("#wc221").attr("selected","selected");}
    if(workcenter2 == 'داروخانه'){$("#wc231").attr("selected","selected");}
    if(workcenter2 == 'فروشگاه زنجیره‌ای'){$("#wc241").attr("selected","selected");}
    var WorkCooperation2 = '{{$getwork2->WorkCooperation}}';
    if(WorkCooperation2 == 'تمام‌وقت'){$("#wo11").attr("selected","selected");}
    if(WorkCooperation2 == 'پاره‌وقت'){$("#wo21").attr("selected","selected");}
    if(WorkCooperation2 == 'پروژه‌ای'){$("#wo31").attr("selected","selected");}
    if(WorkCooperation2 == 'ساعتی'){$("#wo41").attr("selected","selected");}
    if(WorkCooperation2 == 'دورکاری'){$("#wo51").attr("selected","selected");}
    if(WorkCooperation2 == 'کارآموزی'){$("#wo61").attr("selected","selected");}

    $("#workPost2").val('{{ $getwork3->WorkPost }}');
    $("#workTitleCenter2").val('{{ $getwork3->WorkTitleCenter }}');
    var workcenter3 = '{{$getwork3->WorkCenter}}';
    if(workcenter3 == 'موسسه'){$("#wc12").attr("selected","selected");}
    if(workcenter3 == 'شرکت'){$("#wc22").attr("selected","selected");}
    if(workcenter3 == 'سازمان'){$("#wc32").attr("selected","selected");}
    if(workcenter3 == 'نهاد'){$("#wc42").attr("selected","selected");}
    if(workcenter3 == 'خود‌اشتغال'){$("#wc52").attr("selected","selected");}
    if(workcenter3 == 'فریلسنر'){$("#wc62").attr("selected","selected");}
    if(workcenter3 == 'بیمارستان'){$("#wc72").attr("selected","selected");}
    if(workcenter3 == 'بیمارستان روانی'){$("#wc82").attr("selected","selected");}
    if(workcenter3 == 'کلینیک'){$("#wc92").attr("selected","selected");}
    if(workcenter3 == 'بنیاد'){$("#wc102").attr("selected","selected");}
    if(workcenter3 == 'دانشگاه'){$("#wc112").attr("selected","selected");}
    if(workcenter3 == 'مدرسه'){$("#wc122").attr("selected","selected");}
    if(workcenter3 == 'حوزه علمیه'){$("#wc132").attr("selected","selected");}
    if(workcenter3 == 'آموزشگاه'){$("#wc142").attr("selected","selected");}
    if(workcenter3 == 'مرکز'){$("#wc152").attr("selected","selected");}
    if(workcenter3 == 'کارگاه'){$("#wc162").attr("selected","selected");}
    if(workcenter3 == 'اداره آب'){$("#wc172").attr("selected","selected");}
    if(workcenter3 == 'اداره گاز'){$("#wc182").attr("selected","selected");}
    if(workcenter3 == 'اداره برق'){$("#wc192").attr("selected","selected");}
    if(workcenter3 == 'بیمه'){$("#wc202").attr("selected","selected");}
    if(workcenter3 == 'آتشنشانی'){$("#wc212").attr("selected","selected");}
    if(workcenter3 == 'اورژانش'){$("#wc222").attr("selected","selected");}
    if(workcenter3 == 'داروخانه'){$("#wc232").attr("selected","selected");}
    if(workcenter3 == 'فروشگاه زنجیره‌ای'){$("#wc242").attr("selected","selected");}
    var WorkCooperation3 = '{{$getwork3->WorkCooperation}}';
    if(WorkCooperation3 == 'تمام‌وقت'){$("#wo12").attr("selected","selected");}
    if(WorkCooperation3 == 'پاره‌وقت'){$("#wo22").attr("selected","selected");}
    if(WorkCooperation3 == 'پروژه‌ای'){$("#wo32").attr("selected","selected");}
    if(WorkCooperation3 == 'ساعتی'){$("#wo42").attr("selected","selected");}
    if(WorkCooperation3 == 'دورکاری'){$("#wo52").attr("selected","selected");}
    if(WorkCooperation3 == 'کارآموزی'){$("#wo62").attr("selected","selected");}


    @section('wp1')
        {{$getwork2->WorkPost}}
    @endsection

    @section('wc1')
        {{$getwork2->WorkCenter}}
    @endsection

    @section('wt1')
        {{$getwork2->WorkTitleCenter}}
    @endsection

    @section('wo1')
        {{$getwork2->WorkCooperation}}
    @endsection

    @section('wp2')
        {{$getwork3->WorkPost}}
    @endsection

    @section('wc2')
        {{$getwork3->WorkCenter}}
    @endsection

    @section('wt2')
        {{$getwork3->WorkTitleCenter}}
    @endsection

    @section('wo2')
        {{$getwork3->WorkCooperation}}
    @endsection


    <!-- //cource get value -->
    @for($i=0;$i<$c_n;$i++)
    $("#btn-add-cources").click();
    @endfor
    $("#courcesType1").val('{{ $getcourse2->CoursesType }}');
    $("#courcesName1").val('{{ $getcourse2->CoursesTitle }}');
    $("#courcesInstitutionName1").val('{{ $getcourse2->CoursesInstitute }}');
    $("#courcesYear1").val('{{ $getcourse2->CoursesDate }}');
    $("#courcesType2").val('{{ $getcourse3->CoursesType }}');
    $("#courcesName2").val('{{ $getcourse3->CoursesTitle }}');
    $("#courcesInstitutionName2").val('{{ $getcourse3->CoursesInstitute }}');
    $("#courcesYear2").val('{{ $getcourse3->CoursesDate }}');

    <!-- //project get value -->
    @for($i=0;$i<$p_n;$i++)
    $("#btn-add-project").click();
    @endfor

    $("#projecName1").val('{{ $getproject2->ProjectTitle }}');
    $("#projecName2").val('{{ $getproject3->ProjectTitle }}');
    $("#projecName3").val('{{ $getproject4->ProjectTitle }}');

    
    $("#projectStartYear1").val('{{ $projectyearstart2 }}');
    $("#projectStartYear2").val('{{ $projectyearstart3 }}');
    $("#projectStartYear3").val('{{ $projectyearstart4 }}');

    $("#projectEndYear1").val('{{ $projectyearend2 }}');
    $("#projectEndYear2").val('{{ $projectyearend3 }}');
    $("#projectEndYear3").val('{{ $projectyearend4 }}');

    $("#projectEmployer1").val('{{ $getproject2->ProjectEmployer }}');
    $("#projectEmployer2").val('{{ $getproject3->ProjectEmployer }}');
    $("#projectEmployer3").val('{{ $getproject4->ProjectEmployer }}');

    $("#projectLink1").val('{{ $getproject2->ProjectLink }}');
    $("#projectLink2").val('{{ $getproject3->ProjectLink }}');
    $("#projectLink3").val('{{ $getproject4->ProjectLink }}');

    var projectStartMount = '{{ $projectmonthstart2 }}';
    if(projectStartMount == 1){ $("#psm11").attr("selected","selected"); }
    if(projectStartMount == 2){ $("#psm21").attr("selected","selected"); }
    if(projectStartMount == 3){ $("#psm31").attr("selected","selected"); }
    if(projectStartMount == 4){ $("#psm41").attr("selected","selected"); }
    if(projectStartMount == 5){ $("#psm51").attr("selected","selected"); }
    if(projectStartMount == 6){ $("#psm61").attr("selected","selected"); }
    if(projectStartMount == 7){ $("#psm71").attr("selected","selected"); }
    if(projectStartMount == 8){ $("#psm81").attr("selected","selected"); }
    if(projectStartMount == 9){ $("#psm91").attr("selected","selected"); }
    if(projectStartMount == 10){ $("#psm101").attr("selected","selected"); }
    if(projectStartMount == 11){ $("#psm111").attr("selected","selected"); }
    if(projectStartMount == 12){ $("#psm121").attr("selected","selected"); }

    var projectStartMount = '{{ $projectmonthstart3 }}';
    if(projectStartMount == 1){ $("#psm12").attr("selected","selected"); }
    if(projectStartMount == 2){ $("#psm22").attr("selected","selected"); }
    if(projectStartMount == 3){ $("#psm32").attr("selected","selected"); }
    if(projectStartMount == 4){ $("#psm42").attr("selected","selected"); }
    if(projectStartMount == 5){ $("#psm52").attr("selected","selected"); }
    if(projectStartMount == 6){ $("#psm62").attr("selected","selected"); }
    if(projectStartMount == 7){ $("#psm72").attr("selected","selected"); }
    if(projectStartMount == 8){ $("#psm82").attr("selected","selected"); }
    if(projectStartMount == 9){ $("#psm92").attr("selected","selected"); }
    if(projectStartMount == 10){ $("#psm102").attr("selected","selected"); }
    if(projectStartMount == 11){ $("#psm112").attr("selected","selected"); }
    if(projectStartMount == 12){ $("#psm122").attr("selected","selected"); }


    var projectStartMount = '{{ $projectmonthstart4 }}';
    if(projectStartMount == 1){ $("#psm13").attr("selected","selected"); }
    if(projectStartMount == 2){ $("#psm23").attr("selected","selected"); }
    if(projectStartMount == 3){ $("#psm33").attr("selected","selected"); }
    if(projectStartMount == 4){ $("#psm43").attr("selected","selected"); }
    if(projectStartMount == 5){ $("#psm53").attr("selected","selected"); }
    if(projectStartMount == 6){ $("#psm63").attr("selected","selected"); }
    if(projectStartMount == 7){ $("#psm73").attr("selected","selected"); }
    if(projectStartMount == 8){ $("#psm83").attr("selected","selected"); }
    if(projectStartMount == 9){ $("#psm93").attr("selected","selected"); }
    if(projectStartMount == 10){ $("#psm103").attr("selected","selected"); }
    if(projectStartMount == 11){ $("#psm113").attr("selected","selected"); }
    if(projectStartMount == 12){ $("#psm123").attr("selected","selected"); }

    var projectEndMount = '{{ $projectmonthend2 }}';
    if(projectEndMount == 1){ $("#pem11").attr("selected","selected"); }
    if(projectEndMount == 2){ $("#pem21").attr("selected","selected"); }
    if(projectEndMount == 3){ $("#pem31").attr("selected","selected"); }
    if(projectEndMount == 4){ $("#pem41").attr("selected","selected"); }
    if(projectEndMount == 5){ $("#pem51").attr("selected","selected"); }
    if(projectEndMount == 6){ $("#pem61").attr("selected","selected"); }
    if(projectEndMount == 7){ $("#pem71").attr("selected","selected"); }
    if(projectEndMount == 8){ $("#pem81").attr("selected","selected"); }
    if(projectEndMount == 9){ $("#pem91").attr("selected","selected"); }
    if(projectEndMount == 10){ $("#pem101").attr("selected","selected"); }
    if(projectEndMount == 11){ $("#pem111").attr("selected","selected"); }
    if(projectEndMount == 12){ $("#pem121").attr("selected","selected"); }

    var projectEndMount3 = '{{ $projectmonthend3 }}';
    if(projectEndMount3 == 1){ $("#pem12").attr("selected","selected"); }
    if(projectEndMount3 == 2){ $("#pem22").attr("selected","selected"); }
    if(projectEndMount3 == 3){ $("#pem32").attr("selected","selected"); }
    if(projectEndMount3 == 4){ $("#pem42").attr("selected","selected"); }
    if(projectEndMount3 == 5){ $("#pem52").attr("selected","selected"); }
    if(projectEndMount3 == 6){ $("#pem62").attr("selected","selected"); }
    if(projectEndMount3 == 7){ $("#pem72").attr("selected","selected"); }
    if(projectEndMount3 == 8){ $("#pem82").attr("selected","selected"); }
    if(projectEndMount3 == 9){ $("#pem92").attr("selected","selected"); }
    if(projectEndMount3 == 10){ $("#pem102").attr("selected","selected"); }
    if(projectEndMount3 == 11){ $("#pem112").attr("selected","selected"); }
    if(projectEndMount3 == 12){ $("#pem122").attr("selected","selected"); }

    var projectEndMount4 = '{{ $projectmonthend4 }}';
    if(projectEndMount4 == 1){ $("#pem13").attr("selected","selected"); }
    if(projectEndMount4 == 2){ $("#pem23").attr("selected","selected"); }
    if(projectEndMount4 == 3){ $("#pem33").attr("selected","selected"); }
    if(projectEndMount4 == 4){ $("#pem43").attr("selected","selected"); }
    if(projectEndMount4 == 5){ $("#pem53").attr("selected","selected"); }
    if(projectEndMount4 == 6){ $("#pem63").attr("selected","selected"); }
    if(projectEndMount4 == 7){ $("#pem73").attr("selected","selected"); }
    if(projectEndMount4 == 8){ $("#pem83").attr("selected","selected"); }
    if(projectEndMount4 == 9){ $("#pem93").attr("selected","selected"); }
    if(projectEndMount4 == 10){ $("#pem103").attr("selected","selected"); }
    if(projectEndMount4 == 11){ $("#pem113").attr("selected","selected"); }
    if(projectEndMount4 == 12){ $("#pem123").attr("selected","selected"); }

    @section('pn1')
    {{ $getproject2->ProjectTitle }}
    @endsection

    @section('psm1')
    {{ $projectmonthstart2 }}
    @endsection

    @section('psy1')
    {{ $projectyearstart2 }}
    @endsection

    @section('pem1')
    {{ $projectmonthend2 }}
    @endsection

    @section('pey1')
    {{ $projectyearend2 }}
    @endsection

    @section('pe1')
    {{ $getproject2->ProjectEmployer }}
    @endsection

    @section('pl1')
    {{ $getproject2->ProjectLink }}
    @endsection

    @section('pn2')
    {{ $getproject3->ProjectTitle }}
    @endsection

    @section('psm2')
    {{ $projectmonthstart3 }}
    @endsection

    @section('psy2')
    {{ $projectyearstart3 }}
    @endsection

    @section('pem2')
    {{ $projectmonthend3 }}
    @endsection

    @section('pey2')
    {{ $projectyearend3 }}
    @endsection

    @section('pe2')
    {{ $getproject3->ProjectEmployer }}
    @endsection

    @section('pl2')
    {{ $getproject3->ProjectLink }}
    @endsection



    @section('pn3')
    {{ $getproject4->ProjectTitle }}
    @endsection

    @section('psm3')
    {{ $projectmonthstart4 }}
    @endsection

    @section('psy3')
    {{ $projectyearstart4 }}
    @endsection

    @section('pem3')
    {{ $projectmonthend4 }}
    @endsection

    @section('pey3')
    {{ $projectyearend4 }}
    @endsection

    @section('pe3')
    {{ $getproject4->ProjectEmployer }}
    @endsection

    @section('pl3')
    {{ $getproject4->ProjectLink }}
    @endsection

    <!-- //skill get value -->
    @for($i=0;$i<$ss_n;$i++)
    $("#btn-add-skills").click();
    @endfor

    $("#skillsName1").val('{{ $getskill2->SkillsName }}');
    $("#skillsName2").val('{{ $getskill3->SkillsName }}');
    $("#skillsName3").val('{{ $getskill4->SkillsName }}');
    $("#skillsName4").val('{{ $getskill5->SkillsName }}');

    var skillName2 = '{{ $getskill2->SkillsLevel }}';
    if(skillName2 == 'خیلی‌کم'){ $("#ss11").attr("selected","selected"); }
    if(skillName2 == '‌کم'){ $("#ss21").attr("selected","selected"); }
    if(skillName2 == 'متوسط'){ $("#ss31").attr("selected","selected"); }
    if(skillName2 == 'زیاد'){ $("#ss41").attr("selected","selected"); }
    if(skillName2 == 'خیلی‌زیاد'){ $("#ss51").attr("selected","selected"); }

    var skillName3 = '{{ $getskill3->SkillsLevel }}';
    if(skillName3 == 'خیلی‌کم'){ $("#ss12").attr("selected","selected"); }
    if(skillName3 == '‌کم'){ $("#ss22").attr("selected","selected"); }
    if(skillName3 == 'متوسط'){ $("#ss32").attr("selected","selected"); }
    if(skillName3 == 'زیاد'){ $("#ss42").attr("selected","selected"); }
    if(skillName3 == 'خیلی‌زیاد'){ $("#ss52").attr("selected","selected"); }

    var skillName4 = '{{ $getskill4->SkillsLevel }}';
    if(skillName4 == 'خیلی‌کم'){ $("#ss13").attr("selected","selected"); }
    if(skillName4 == '‌کم'){ $("#ss23").attr("selected","selected"); }
    if(skillName4 == 'متوسط'){ $("#ss33").attr("selected","selected"); }
    if(skillName4 == 'زیاد'){ $("#ss43").attr("selected","selected"); }
    if(skillName4 == 'خیلی‌زیاد'){ $("#ss53").attr("selected","selected"); }

    var skillName5 = '{{ $getskill5->SkillsLevel }}';
    if(skillName5 == 'خیلی‌کم'){ $("#ss14").attr("selected","selected"); }
    if(skillName5 == '‌کم'){ $("#ss24").attr("selected","selected"); }
    if(skillName5 == 'متوسط'){ $("#ss34").attr("selected","selected"); }
    if(skillName5 == 'زیاد'){ $("#ss44").attr("selected","selected"); }
    if(skillName5 == 'خیلی‌زیاد'){ $("#ss54").attr("selected","selected"); }

    @section('ct1')
        {{$getcourse2->CoursesType}}
    @endsection

    @section('cn1')
        {{$getcourse2->CoursesTitle}}
    @endsection

    @section('cy1')
        {{$getcourse2->CoursesDate}}
    @endsection

    @section('cin1')
        {{$getcourse2->CoursesInstitute}}
    @endsection

    @section('ct2')
        {{$getcourse3->CoursesType}}
    @endsection

    @section('cn2')
        {{$getcourse3->CoursesTitle}}
    @endsection

    @section('cy2')
        {{$getcourse3->CoursesDate}}
    @endsection

    @section('cin2')
        {{$getcourse3->CoursesInstitute}}
    @endsection

    @section('sn1')
        {{ $getskill2->SkillsName }}
    @endsection

    @section('sl1')
        {{ $getskill2->SkillsLevel }}
    @endsection

    @section('sn2')
    {{ $getskill3->SkillsName }}
    @endsection

    @section('sl2')
    {{ $getskill3->SkillsLevel }}
    @endsection

    @section('sn3')
    {{ $getskill4->SkillsName }}
    @endsection

    @section('sl3')
    {{ $getskill4->SkillsLevel }}
    @endsection

    @section('sn4')
    {{ $getskill5->SkillsName }}
    @endsection

    @section('sl4')
    {{ $getskill5->SkillsLevel }}
    @endsection
@endsection






