@extends('component.panel')

@section('formName')
NewCVForm
@endsection

@section('actionPath')
/save-chnage-and-add-picture
@endsection

@section('button-title')
&nbsp; ذخیره اطلاعات و اضافه‌کردن تصویر در ادامه
@endsection

@section('button-icon')
{{ asset('img/save.png') }}
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

@section('secman')
    $("#avatarxx").attr("src","{{ asset('img/avatar/man.png') }}");
    $("#avatar").val("img/avatar/man.png");
@endsection

@section('secwoman')
    $("#avatarxx").attr("src","{{ asset('img/avatar/woman.png') }}");
    $("#avatar").val("img/avatar/woman.png");
@endsection

@section('s-title')
فرم ساخت رزومه سریع فارسی
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

@section('base_name')
{{ old('base-name') }}
@endsection

@section('base_family')
{{ old('base-family') }}
@endsection

@section('base_work')
{{ old('base-work') }}
@endsection

@section('base_city')
{{ old('base-city') }}
@endsection

@section('base_mobile')
{{ old('base-mobile') }}
@endsection

@section('base_pre_number_country')
{{ old('base-pre-number-country') }}
@endsection

@section('base_birthday')
{{ old('base-day-birth') }}
@endsection

@section('base_month_birth')
{{ old('base-month-birth') }}
@endsection

@section('base_year_birth')
{{ old('base-year-birth') }}
@endsection

@section('base_telephone')
{{ old('base-telephone') }}
@endsection

@section('base_sex')
{{ old('base-sex') }}
@endsection

@section('base_pre')
{{ old('base-pre-number-state') }}
@endsection

@section('base_email')
{{ old('base-email') }}
@endsection

@section('base_weblog')
{{ old('base-weblog') }}
@endsection

@section('base_instagram')
{{ old('base-instagram') }}
@endsection

@section('base_desc')
{{ old('base-desc') }}
@endsection

@section('snow')
        <!-- در حال تحصیل -->
        <div class="form-group float-left m-1 m-md-3" style="min-width:0px;margin-left: 0px !important;margin-right: 0px !important;">

            <input type="checkbox" class="custom-control custom-checkbox" title="در حال تحصیل" name="education-now" id="education-now">
                        <label for="education-now" style="display:none;position:relative;top: -20px;left: -20px;" class="nowsl">در حال تحصیل</label>
        </div>
@endsection

@section('cources_Type0')
{{ old('courcesType0') }}
@endsection

@section('cources_Name0')
{{ old('courcesName0') }}
@endsection

@section('cources_Year0')
{{ old('courcesYear0') }}
@endsection

@section('courcesInstitution_Name0')
{{ old('courcesInstitutionName0') }}
@endsection

@section('education_FS0')
{{ old('educationFS0') }}
@endsection

@section('education_AD0')
{{ old('educationAD0') }}
@endsection

@section('education_University0')
{{ old('educationUniversity0') }}
@endsection

@section('GPA_University0')
{{ old('GPAUniversity0') }}
@endsection

@section('langName_0')
{{ old('langName0') }}
@endsection

@section('workPost_0')
{{ old('workPost0') }}
@endsection

@section('workTitleCenter_0')
{{ old('workTitleCenter0') }}
@endsection

@section('projectName0')
{{ old('projecName0') }}
@endsection

@section('projectStartYear_0')
{{ old('projectStartYear0') }}
@endsection

@section('projectEndYear_0')
{{ old('projectEndYear0') }}
@endsection

@section('projectEmployer_0')
{{ old('projectEmployer0') }}
@endsection

@section('projectLink_0')
{{ old('projectLink0') }}
@endsection

@section('thesisTitle_0')
{{ old('thesisTitle0') }}
@endsection

@section('year_0')
{{ old('year0') }}
@endsection

@section('thesisTitle_1')
{{ old('thesisTitle1') }}
@endsection

@section('year_1')
{{ old('year1') }}
@endsection

@section('skillsName_0')
{{ old('skillsName0') }}
@endsection

@section('base_avatar')
{{ old('base-avatar') }}
@endsection


@section('scripts')

if($("#name").val() != '')
{
    $("#btn-add-edu").click();
    $("#btn-add-edu").click();
    $("#btn-add-lang").click();
    $("#btn-add-lang").click();
    $("#btn-add-work").click();
    $("#btn-add-work").click();
    $("#btn-add-cources").click();
    $("#btn-add-cources").click();
    $("#btn-add-project").click();
    $("#btn-add-project").click();
    $("#btn-add-project").click();
    $("#btn-add-skills").click();
    $("#btn-add-skills").click();
    $("#btn-add-skills").click();
    $("#btn-add-skills").click();
}

<!-- برای سوابق تحصیلی - شروع -->
var gr1z = $("#grade1Z").val();
gr1z = gr1z.replace(/\n/ig,'');
var gr2z = $("#grade2Z").val();
gr2z = gr2z.replace(/\n/ig,'');

if(gr1z == "زیر دیپلم"){$("#es01").attr("selected","selected");}
if(gr1z == "دیپلم"){$("#es11").attr("selected","selected");}
if(gr1z == "فوق دیپلم"){$("#es21").attr("selected","selected");}
if(gr1z == "کارشناسی ناپیوسته"){$("#es31").attr("selected","selected");}
if(gr1z == "کارشناسی پیوسته"){$("#es41").attr("selected","selected");}
if(gr1z == "کارشناسی ارشد"){$("#es51").attr("selected","selected");}
if(gr1z == "دکتری"){$("#es61").attr("selected","selected");}

if(gr2z == "زیر دیپلم"){$("#es02").attr("selected","selected");}
if(gr2z == "دیپلم"){$("#es12").attr("selected","selected");}
if(gr2z == "فوق دیپلم"){$("#es22").attr("selected","selected");}
if(gr2z == "کارشناسی ناپیوسته"){$("#es32").attr("selected","selected");}
if(gr2z == "کارشناسی پیوسته"){$("#es42").attr("selected","selected");}
if(gr2z == "کارشناسی ارشد"){$("#es52").attr("selected","selected");}
if(gr2z == "دکتری"){$("#es62").attr("selected","selected");}


$("#FS1").val($("#FS1Z").val());
$("#AD1").val($("#AD1Z").val());
$("#university1").val($("#University1Z").val());
$("#GPA1").val($("#GPA1Z").val());
$("#FS2").val($("#FS2Z").val());
$("#AD2").val($("#AD2Z").val());
$("#university2").val($("#University2Z").val());
$("#GPA2").val($("#GPA2Z").val());

<!-- شروع برای پروژه -->
$("#projecName1").val($("#projecName1Z").val());
$("#projectStartYear1").val($("#projectStartYear1Z").val());
$("#projectEndYear1").val($("#projectEndYear1Z").val());
$("#projectEmployer1").val($("#projectEmployer1Z").val());
$("#projectLink1").val($("#projectLink1Z").val());

$("#projecName2").val($("#projecName2Z").val());
$("#projectStartYear2").val($("#projectStartYear2Z").val());
$("#projectEndYear2").val($("#projectEndYear2Z").val());
$("#projectEmployer2").val($("#projectEmployer2Z").val());
$("#projectLink2").val($("#projectLink2Z").val());

$("#projecName3").val($("#projecName3Z").val());
$("#projectStartYear3").val($("#projectStartYear3Z").val());
$("#projectEndYear3").val($("#projectEndYear3Z").val());
$("#projectEmployer3").val($("#projectEmployer3Z").val());
$("#projectLink3").val($("#projectLink3Z").val());

var pms1z = $("#projectStartMonth1Z").val();
pms1z = pms1z.replace(/\n/ig,'');


if(pms1z == 1){$("#psm11").attr("selected","selected");}
if(pms1z == 2){$("#psm21").attr("selected","selected");}
if(pms1z == 3){$("#psm31").attr("selected","selected");}
if(pms1z == 4){$("#psm41").attr("selected","selected");}
if(pms1z == 5){$("#psm51").attr("selected","selected");}
if(pms1z == 6){$("#psm61").attr("selected","selected");}
if(pms1z == 7){$("#psm71").attr("selected","selected");}
if(pms1z == 8){$("#psm81").attr("selected","selected");}
if(pms1z == 9){$("#psm91").attr("selected","selected");}
if(pms1z == 10){$("#psm101").attr("selected","selected");}
if(pms1z == 11){$("#psm111").attr("selected","selected");}
if(pms1z == 12){$("#psm121").attr("selected","selected");}

var pms2z = $("#projectStartMonth2Z").val();
pms2z = pms2z.replace(/\n/ig,'');


if(pms2z == 1){$("#psm12").attr("selected","selected");}
if(pms2z == 2){$("#psm22").attr("selected","selected");}
if(pms2z == 3){$("#psm32").attr("selected","selected");}
if(pms2z == 4){$("#psm42").attr("selected","selected");}
if(pms2z == 5){$("#psm52").attr("selected","selected");}
if(pms2z == 6){$("#psm62").attr("selected","selected");}
if(pms2z == 7){$("#psm72").attr("selected","selected");}
if(pms2z == 8){$("#psm82").attr("selected","selected");}
if(pms2z == 9){$("#psm92").attr("selected","selected");}
if(pms2z == 10){$("#psm102").attr("selected","selected");}
if(pms2z == 11){$("#psm112").attr("selected","selected");}
if(pms2z == 12){$("#psm122").attr("selected","selected");}



var pms3z = $("#projectStartMonth3Z").val();
pms3z = pms3z.replace(/\n/ig,'');


if(pms3z == 1){$("#psm13").attr("selected","selected");}
if(pms3z == 2){$("#psm23").attr("selected","selected");}
if(pms3z == 3){$("#psm33").attr("selected","selected");}
if(pms3z == 4){$("#psm43").attr("selected","selected");}
if(pms3z == 5){$("#psm53").attr("selected","selected");}
if(pms3z == 6){$("#psm63").attr("selected","selected");}
if(pms3z == 7){$("#psm73").attr("selected","selected");}
if(pms3z == 8){$("#psm83").attr("selected","selected");}
if(pms3z == 9){$("#psm93").attr("selected","selected");}
if(pms3z == 10){$("#psm103").attr("selected","selected");}
if(pms3z == 11){$("#psm113").attr("selected","selected");}
if(pms3z == 12){$("#psm123").attr("selected","selected");}


var pme1z = $("#projectEndMonth1Z").val();
pme1z = pme1z.replace(/\n/ig,'');

if(pme1z == 1){$("#pem11").attr("selected","selected");}
if(pme1z == 2){$("#pem21").attr("selected","selected");}
if(pme1z == 3){$("#pem31").attr("selected","selected");}
if(pme1z == 4){$("#pem41").attr("selected","selected");}
if(pme1z == 5){$("#pem51").attr("selected","selected");}
if(pme1z == 6){$("#pem61").attr("selected","selected");}
if(pme1z == 7){$("#pem71").attr("selected","selected");}
if(pme1z == 8){$("#pem81").attr("selected","selected");}
if(pme1z == 9){$("#pem91").attr("selected","selected");}
if(pme1z == 10){$("#pem101").attr("selected","selected");}
if(pme1z == 11){$("#pem111").attr("selected","selected");}
if(pme1z == 12){$("#pem121").attr("selected","selected");}


var pme2z = $("#projectEndMonth2Z").val();
pme2z = pme2z.replace(/\n/ig,'');

if(pme2z == 1){$("#pem12").attr("selected","selected");}
if(pme2z == 2){$("#pem22").attr("selected","selected");}
if(pme2z == 3){$("#pem32").attr("selected","selected");}
if(pme2z == 4){$("#pem42").attr("selected","selected");}
if(pme2z == 5){$("#pem52").attr("selected","selected");}
if(pme2z == 6){$("#pem62").attr("selected","selected");}
if(pme2z == 7){$("#pem72").attr("selected","selected");}
if(pme2z == 8){$("#pem82").attr("selected","selected");}
if(pme2z == 9){$("#pem92").attr("selected","selected");}
if(pme2z == 10){$("#pem102").attr("selected","selected");}
if(pme2z == 11){$("#pem112").attr("selected","selected");}
if(pme2z == 12){$("#pem122").attr("selected","selected");}


var pme3z = $("#projectEndMonth3Z").val();
pme3z = pme3z.replace(/\n/ig,'');

if(pme3z == 1){$("#pem13").attr("selected","selected");}
if(pme3z == 2){$("#pem23").attr("selected","selected");}
if(pme3z == 3){$("#pem33").attr("selected","selected");}
if(pme3z == 4){$("#pem43").attr("selected","selected");}
if(pme3z == 5){$("#pem53").attr("selected","selected");}
if(pme3z == 6){$("#pem63").attr("selected","selected");}
if(pme3z == 7){$("#pem73").attr("selected","selected");}
if(pme3z == 8){$("#pem83").attr("selected","selected");}
if(pme3z == 9){$("#pem93").attr("selected","selected");}
if(pme3z == 10){$("#pem103").attr("selected","selected");}
if(pme3z == 11){$("#pem113").attr("selected","selected");}
if(pme3z == 12){$("#pem123").attr("selected","selected");}
<!-- پایان برای پروژه -->

<!--شروع برای دوره آموزشی -->
$("#courcesType1").val($("#courcesType1Z").val());
$("#courcesName1").val($("#courcesName1Z").val());
$("#courcesYear1").val($("#courcesYear1Z").val());
$("#courcesInstitutionName1").val($("#courcesInstitutionName1Z").val());
$("#courcesType2").val($("#courcesType2Z").val());
$("#courcesName2").val($("#courcesName2Z").val());
$("#courcesYear2").val($("#courcesYear2Z").val());
$("#courcesInstitutionName2").val($("#courcesInstitutionName2Z").val());
<!--پایان برای دوره آموزشی -->

<!--شروع برای زبان -->
$("#langName1").val($("#langName1Z").val());

var lr1z = $("#langReading1Z").val();
lr1z = lr1z.replace(/\n/ig,'');

if(lr1z == "1"){$("#l11").attr("selected","selected");}
if(lr1z == "2"){$("#l21").attr("selected","selected");}
if(lr1z == "3"){$("#l31").attr("selected","selected");}
if(lr1z == "4"){$("#l41").attr("selected","selected");}
if(lr1z == "5"){$("#l51").attr("selected","selected");}

var lw1z = $("#langWriting1Z").val();
lw1z = lw1z.replace(/\n/ig,'');

if(lw1z == "1"){$("#w11").attr("selected","selected");}
if(lw1z == "2"){$("#w21").attr("selected","selected");}
if(lw1z == "3"){$("#w31").attr("selected","selected");}
if(lw1z == "4"){$("#w41").attr("selected","selected");}
if(lw1z == "5"){$("#w51").attr("selected","selected");}

var ls1z = $("#langSpeech1Z").val();
ls1z = ls1z.replace(/\n/ig,'');

if(ls1z == "1"){$("#s11").attr("selected","selected");}
if(ls1z == "2"){$("#s21").attr("selected","selected");}
if(ls1z == "3"){$("#s31").attr("selected","selected");}
if(ls1z == "4"){$("#s41").attr("selected","selected");}
if(ls1z == "5"){$("#s51").attr("selected","selected");}

var ll1z = $("#langListening1Z").val();
ll1z = ll1z.replace(/\n/ig,'');

if(ll1z == "1"){$("#ls11").attr("selected","selected");}
if(ll1z == "2"){$("#ls21").attr("selected","selected");}
if(ll1z == "3"){$("#ls31").attr("selected","selected");}
if(ll1z == "4"){$("#ls41").attr("selected","selected");}
if(ll1z == "5"){$("#ls51").attr("selected","selected");}

$("#langName2").val($("#langName2Z").val());

var lr2z = $("#langReading2Z").val();
lr2z = lr2z.replace(/\n/ig,'');

if(lr2z == "1"){$("#l12").attr("selected","selected");}
if(lr2z == "2"){$("#l22").attr("selected","selected");}
if(lr2z == "3"){$("#l32").attr("selected","selected");}
if(lr2z == "4"){$("#l42").attr("selected","selected");}
if(lr2z == "5"){$("#l52").attr("selected","selected");}

var lw2z = $("#langWriting2Z").val();
lw2z = lw2z.replace(/\n/ig,'');

if(lw2z == "1"){$("#w12").attr("selected","selected");}
if(lw2z == "2"){$("#w22").attr("selected","selected");}
if(lw2z == "3"){$("#w32").attr("selected","selected");}
if(lw2z == "4"){$("#w42").attr("selected","selected");}
if(lw2z == "5"){$("#w52").attr("selected","selected");}

var ls2z = $("#langSpeech2Z").val();
ls2z = ls2z.replace(/\n/ig,'');

if(ls2z == "1"){$("#s12").attr("selected","selected");}
if(ls2z == "2"){$("#s22").attr("selected","selected");}
if(ls2z == "3"){$("#s32").attr("selected","selected");}
if(ls2z == "4"){$("#s42").attr("selected","selected");}
if(ls2z == "5"){$("#s52").attr("selected","selected");}

var ll2z = $("#langListening2Z").val();
ll2z = ll2z.replace(/\n/ig,'');

if(ll2z == "1"){$("#ls12").attr("selected","selected");}
if(ll2z == "2"){$("#ls22").attr("selected","selected");}
if(ll2z == "3"){$("#ls32").attr("selected","selected");}
if(ll2z == "4"){$("#ls42").attr("selected","selected");}
if(ll2z == "5"){$("#ls52").attr("selected","selected");}

<!--پایان برای زبان -->


<!-- شروع برای مهارتی -->
$("#skillsName1").val($("#skillsName1Z").val());
$("#skillsName2").val($("#skillsName2Z").val());
$("#skillsName3").val($("#skillsName3Z").val());
$("#skillsName4").val($("#skillsName4Z").val());


var sl1z = $("#skillsLevel1Z").val();
sl1z = sl1z.replace(/\n/ig,'');

if(sl1z == "خیلی‌کم"){$("#ss11").attr("selected","selected");}
if(sl1z == "کم"){$("#ss21").attr("selected","selected");}
if(sl1z == "متوسط"){$("#ss31").attr("selected","selected");}
if(sl1z == "زیاد"){$("#ss41").attr("selected","selected");}
if(sl1z == "خیلی‌زیاد"){$("#ss51").attr("selected","selected");}

var sl2z = $("#skillsLevel2Z").val();
sl2z = sl2z.replace(/\n/ig,'');

if(sl2z == "خیلی‌کم"){$("#ss12").attr("selected","selected");}
if(sl2z == "کم"){$("#ss22").attr("selected","selected");}
if(sl2z == "متوسط"){$("#ss32").attr("selected","selected");}
if(sl2z == "زیاد"){$("#ss42").attr("selected","selected");}
if(sl2z == "خیلی‌زیاد"){$("#ss52").attr("selected","selected");}


var sl3z = $("#skillsLevel3Z").val();
sl3z = sl3z.replace(/\n/ig,'');

if(sl3z == "خیلی‌کم"){$("#ss13").attr("selected","selected");}
if(sl3z == "کم"){$("#ss23").attr("selected","selected");}
if(sl3z == "متوسط"){$("#ss33").attr("selected","selected");}
if(sl3z == "زیاد"){$("#ss43").attr("selected","selected");}
if(sl3z == "خیلی‌زیاد"){$("#ss53").attr("selected","selected");}


var sl4z = $("#skillsLevel4Z").val();
sl4z = sl4z.replace(/\n/ig,'');

if(sl4z == "خیلی‌کم"){$("#ss14").attr("selected","selected");}
if(sl4z == "کم"){$("#ss24").attr("selected","selected");}
if(sl4z == "متوسط"){$("#ss34").attr("selected","selected");}
if(sl4z == "زیاد"){$("#ss44").attr("selected","selected");}
if(sl4z == "خیلی‌زیاد"){$("#ss54").attr("selected","selected");}

<!-- پایان برای مهارتی -->

<!-- شروع برای سابقه شغلی -->
$("#workPost1").val($("#workPost1Z").val());
$("#workTitleCenter1").val($("#workTitleCenter1Z").val());
$("#workPost2").val($("#workPost2Z").val());
$("#workTitleCenter2").val($("#workTitleCenter2Z").val());

var wc1z = $("#workCenter1Z").val();
wc1z = wc1z.replace(/\n/ig,'');

if(wc1z == "موسسه"){$("#wc11").attr("selected","selected");}
if(wc1z == "شرکت"){$("#wc21").attr("selected","selected");}
if(wc1z == "سازمان"){$("#wc31").attr("selected","selected");}
if(wc1z == "نهاد"){$("#wc41").attr("selected","selected");}
if(wc1z == "خود‌اشتغال"){$("#wc51").attr("selected","selected");}
if(wc1z == "فریلسنر"){$("#wc61").attr("selected","selected");}
if(wc1z == "بیمارستان"){$("#wc71").attr("selected","selected");}
if(wc1z == "بیمارستان روانی"){$("#wc81").attr("selected","selected");}
if(wc1z == "کلینیک"){$("#wc91").attr("selected","selected");}
if(wc1z == "بنیاد"){$("#wc101").attr("selected","selected");}
if(wc1z == "دانشگاه"){$("#wc111").attr("selected","selected");}
if(wc1z == "مدرسه"){$("#wc121").attr("selected","selected");}
if(wc1z == "حوزه علمیه"){$("#wc131").attr("selected","selected");}
if(wc1z == "آموزشگاه"){$("#wc141").attr("selected","selected");}
if(wc1z == "مرکز"){$("#wc151").attr("selected","selected");}
if(wc1z == "کارگاه"){$("#wc161").attr("selected","selected");}
if(wc1z == "اداره آب"){$("#wc171").attr("selected","selected");}
if(wc1z == "اداره گاز"){$("#wc181").attr("selected","selected");}
if(wc1z == "اداره برق"){$("#wc191").attr("selected","selected");}
if(wc1z == "بیمه"){$("#wc201").attr("selected","selected");}
if(wc1z == "آتشنشانی"){$("#wc211").attr("selected","selected");}
if(wc1z == "اورژانش"){$("#wc221").attr("selected","selected");}
if(wc1z == "داروخانه"){$("#wc231").attr("selected","selected");}
if(wc1z == "فروشگاه زنجیره‌ای"){$("#wc241").attr("selected","selected");}


var wo1z = $("#workCooperate1Z").val();
wo1z = wo1z.replace(/\n/ig,'');

if(wo1z == "تمام‌وقت"){$("#wo11").attr("selected","selected");}
if(wo1z == "پاره‌وقت"){$("#wo21").attr("selected","selected");}
if(wo1z == "پروژه‌ای"){$("#wo31").attr("selected","selected");}
if(wo1z == "ساعتی"){$("#wo41").attr("selected","selected");}
if(wo1z == "دورکاری"){$("#wo51").attr("selected","selected");}
if(wo1z == "کارآموزی"){$("#wo61").attr("selected","selected");}

var wc2z = $("#workCenter2Z").val();
wc2z = wc2z.replace(/\n/ig,'');

if(wc2z == "موسسه"){$("#wc12").attr("selected","selected");}
if(wc2z == "شرکت"){$("#wc22").attr("selected","selected");}
if(wc2z == "سازمان"){$("#wc32").attr("selected","selected");}
if(wc2z == "نهاد"){$("#wc42").attr("selected","selected");}
if(wc2z == "خود‌اشتغال"){$("#wc52").attr("selected","selected");}
if(wc2z == "فریلسنر"){$("#wc62").attr("selected","selected");}
if(wc2z == "بیمارستان"){$("#wc72").attr("selected","selected");}
if(wc2z == "بیمارستان روانی"){$("#wc82").attr("selected","selected");}
if(wc2z == "کلینیک"){$("#wc92").attr("selected","selected");}
if(wc2z == "بنیاد"){$("#wc102").attr("selected","selected");}
if(wc2z == "دانشگاه"){$("#wc112").attr("selected","selected");}
if(wc2z == "مدرسه"){$("#wc122").attr("selected","selected");}
if(wc2z == "حوزه علمیه"){$("#wc132").attr("selected","selected");}
if(wc2z == "آموزشگاه"){$("#wc142").attr("selected","selected");}
if(wc2z == "مرکز"){$("#wc152").attr("selected","selected");}
if(wc2z == "کارگاه"){$("#wc162").attr("selected","selected");}
if(wc2z == "اداره آب"){$("#wc172").attr("selected","selected");}
if(wc2z == "اداره گاز"){$("#wc182").attr("selected","selected");}
if(wc2z == "اداره برق"){$("#wc192").attr("selected","selected");}
if(wc2z == "بیمه"){$("#wc202").attr("selected","selected");}
if(wc2z == "آتشنشانی"){$("#wc212").attr("selected","selected");}
if(wc2z == "اورژانش"){$("#wc222").attr("selected","selected");}
if(wc2z == "داروخانه"){$("#wc232").attr("selected","selected");}
if(wc2z == "فروشگاه زنجیره‌ای"){$("#wc242").attr("selected","selected");}


var wo2z = $("#workCooperate2Z").val();
wo2z = wo2z.replace(/\n/ig,'');

if(wo2z == "تمام‌وقت"){$("#wo12").attr("selected","selected");}
if(wo2z == "پاره‌وقت"){$("#wo22").attr("selected","selected");}
if(wo2z == "پروژه‌ای"){$("#wo32").attr("selected","selected");}
if(wo2z == "ساعتی"){$("#wo42").attr("selected","selected");}
if(wo2z == "دورکاری"){$("#wo52").attr("selected","selected");}
if(wo2z == "کارآموزی"){$("#wo62").attr("selected","selected");}

<!-- پایان برای سابقه شغلی -->

var g1z = $("#grade1Z").val();
g1z = g1z.replace(/\n/ig,'');
if(g1z == '')
{
    $("#btn-remove-edu").click();
}
var g2z = $("#grade2Z").val();
g2z = g2z.replace(/\n/ig,'');
if(g2z == '')
{
    $("#btn-remove-edu").click();
}


var ln1z = $("#langName1Z").val();
ln1z = ln1z.replace(/\n/ig,'');
if(ln1z == '')
{
    $("#btn-remove-lang").click();
}
var ln2z = $("#langName2Z").val();
ln2z = ln2z.replace(/\n/ig,'');
if(ln2z == '')
{
    $("#btn-remove-lang").click();
}



var wp1z = $("#workPost1Z").val();
wp1z = wp1z.replace(/\n/ig,'');
if(wp1z == '')
{
    $("#btn-remove-work").click();
}
var wp2z = $("#workPost2Z").val();
wp2z = wp2z.replace(/\n/ig,'');
if(wp2z == '')
{
    $("#btn-remove-work").click();
}



var ct1z = $("#courcesType1Z").val();
ct1z = ct1z.replace(/\n/ig,'');
if(ct1z == '')
{
    $("#btn-remove-cources").click();
}
var ct2z = $("#courcesType2Z").val();
ct2z = ct2z.replace(/\n/ig,'');
if(ct2z == '')
{
    $("#btn-remove-cources").click();
}


var pn1z = $("#projecName1Z").val();
pn1z = pn1z.replace(/\n/ig,'');
if(pn1z == '')
{
    $("#btn-remove-project").click();
}
var pn2z = $("#projecName2Z").val();
pn2z = pn2z.replace(/\n/ig,'');
if(pn2z == '')
{
    $("#btn-remove-project").click();
}
var pn3z = $("#projecName3Z").val();
pn3z = pn3z.replace(/\n/ig,'');
if(pn3z == '')
{
    $("#btn-remove-project").click();
}


var sn1z = $("#skillsName1Z").val();
sn1z = sn1z.replace(/\n/ig,'');
if(sn1z == '')
{
    $("#btn-remove-skills").click();
}
var sn2z = $("#skillsName2Z").val();
sn2z = sn2z.replace(/\n/ig,'');
if(sn2z == '')
{
    $("#btn-remove-skills").click();
}
var sn3z = $("#skillsName3Z").val();
sn3z = sn3z.replace(/\n/ig,'');
if(sn3z == '')
{
    $("#btn-remove-skills").click();
}
var sn4z = $("#skillsName4Z").val();
sn4z = sn4z.replace(/\n/ig,'');
if(sn4z == '')
{
    $("#btn-remove-skills").click();
}



@endsection

@section('eg1')
{{ old('education-grade1Z') }}
@endsection

@section('ef1')
{{ old('educationFS1Z') }}
@endsection

@section('ea1')
{{ old('educationAD1Z') }}
@endsection

@section('eu1')
{{ old('educationUniversity1Z') }}
@endsection

@section('egpu1')
{{ old('GPAUniversity1Z') }}
@endsection

@section('eg2')
{{ old('education-grade2Z') }}
@endsection

@section('ef2')
{{ old('educationFS2Z') }}
@endsection

@section('ea2')
{{ old('educationAD2Z') }}
@endsection

@section('eu2')
{{ old('educationUniversity2Z') }}
@endsection

@section('egpu2')
{{ old('GPAUniversity2Z') }}
@endsection
<!-- برای سوابق تحصیلی - پایان - پایان - پایان -->

<!-- برای زبان - شروع -->
@section('ln1')
{{ old('langName1Z') }}
@endsection

@section('lr1')
{{ old('langReading1Z') }}
@endsection

@section('lw1')
{{ old('langWriting1Z') }}
@endsection

@section('ls1')
{{ old('langSpeech1Z') }}
@endsection

@section('ll1')
{{ old('langListening1Z') }}
@endsection

@section('ln2')
{{ old('langName2Z') }}
@endsection

@section('lr2')
{{ old('langReading2Z') }}
@endsection

@section('lw2')
{{ old('langWriting2Z') }}
@endsection

@section('ls2')
{{ old('langSpeech2Z') }}
@endsection

@section('ll2')
{{ old('langListening2Z') }}
@endsection
<!-- برای سوابق زبان - پایان - پایان - پایان -->

<!-- برای سوابق شغلی - شروع -->
@section('wp1')
{{ old('workPost1Z') }}
@endsection

@section('wc1')
{{ old('workCenter1Z') }}
@endsection

@section('wt1')
{{ old('workTitleCenter1Z') }}
@endsection

@section('wo1')
{{ old('workCooperate1Z') }}
@endsection

@section('wp2')
{{ old('workPost2Z') }}
@endsection

@section('wc2')
{{ old('workCenter2Z') }}
@endsection

@section('wt2')
{{ old('workTitleCenter2Z') }}
@endsection

@section('wo2')
{{ old('workCooperate2Z') }}
@endsection

<!-- برای سوابق شغلی - پایان - پایان - پایان -->


<!-- برای دوره های آموزشی - شروع -->
@section('ct1')
{{ old('courcesType1Z') }}
@endsection

@section('cn1')
{{ old('courcesName1Z') }}
@endsection

@section('cy1')
{{ old('courcesYear1Z') }}
@endsection

@section('cin1')
{{ old('courcesInstitutionName1Z') }}
@endsection

@section('ct2')
{{ old('courcesType2Z') }}
@endsection

@section('cn2')
{{ old('courcesName2Z') }}
@endsection

@section('cy2')
{{ old('courcesYear2Z') }}
@endsection

@section('cin2')
{{ old('courcesInstitutionName2Z') }}
@endsection
<!-- برای دوره های آموزشی - پایان - پایان - پایان -->


<!-- برای پروژه - شروع -->
@section('pn1')
{{ old('projectName1Z') }}
@endsection

@section('psm1')
{{ old('projecttStartMonth1Z') }}
@endsection

@section('psy1')
{{ old('projecttStartYear1Z') }}
@endsection

@section('pem1')
{{ old('projectEndMonth1Z') }}
@endsection

@section('pey1')
{{ old('projectEndYear1Z') }}
@endsection

@section('pe1')
{{ old('projectEmployer1Z') }}
@endsection

@section('pl1')
{{ old('projectLink1Z') }}
@endsection


@section('pn2')
{{ old('projecName2Z') }}
@endsection

@section('psm2')
{{ old('projectStartMonth2Z') }}
@endsection

@section('psy2')
{{ old('projectStartYear2Z') }}
@endsection

@section('pem2')
{{ old('projectEndMonth2Z') }}
@endsection

@section('pey2')
{{ old('projectEndYear2Z') }}
@endsection

@section('pe2')
{{ old('projectEmployer2Z') }}
@endsection

@section('pl2')
{{ old('projectLink2Z') }}
@endsection


@section('pn3')
{{ old('projecName3Z') }}
@endsection

@section('psm3')
{{ old('projectStartMonth3Z') }}
@endsection

@section('psy3')
{{ old('projectStartYear3Z') }}
@endsection

@section('pem3')
{{ old('projectEndMonth3Z') }}
@endsection

@section('pey3')
{{ old('projectEndYear3Z') }}
@endsection

@section('pe3')
{{ old('projectEmployer3Z') }}
@endsection

@section('pl3')
{{ old('projectLink3Z') }}
@endsection
<!-- برای پروژه - پایان - پایان - پایان -->

<!-- برای مهارت - شروع -->
@section('sn1')
{{ old('skillsName1Z') }}
@endsection

@section('sl1')
{{ old('skillsLevel1Z') }}
@endsection

@section('sn2')
{{ old('skillsName2Z') }}
@endsection

@section('sl2')
{{ old('skillsLevel2Z') }}
@endsection

@section('sn3')
{{ old('skillsName3Z') }}
@endsection

@section('sl3')
{{ old('skillsLevel3Z') }}
@endsection

@section('sn4')
{{ old('skillsName4Z') }}
@endsection

@section('sl4')
{{ old('skillsLevel4Z') }}
@endsection

@section('sn5')
{{ old('skillsName5Z') }}
@endsection

@section('sl5')
{{ old('skillsLevel5Z') }}
@endsection
<!-- برای مهارت - پایان -->





