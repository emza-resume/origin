<h5 class="position-relative panel-title p-2 ml-5" style="@yield('stylepanel-1');top:0px;">اطلاعات پایه</h5>
<div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" style="@yield('backpanel-1')">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-row">

        <!-- نام -->
        <div class="form-group float-left m-1 m-md-3 mobile-input">
            <label for="name">نام<span class="text-danger">*</span></label>
            <input required type="text" name="base-name" tabindex="1" autofocus class="form-control height-40 border-green input-h" value="@yield('base_name')" maxlength="15" size="15" id="name">
            <input type="hidden" name="batchNumber"  value="@yield('batch')" id="batchNumber">

        </div>

        <input type="hidden" name="base-avatar" value="@yield('sec_avatar')" id="avatar">

        <!-- نام خانوادگی -->
        <div class="form-group float-left m-1 m-md-3 mobile-input">
            <label for="family">نام خانوادگی<span class="text-danger">*</span></label>
            <input required type="text" name="base-family" tabindex="2" class="form-control height-40 border-green" maxlength="25" value="@yield('base_family')" size="25" id="family">
        </div>


        <!-- عنوان حرفه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 250px;">
            <label for="job">عنوان حرفه<span class="text-danger">*</span></label>
            <input required type="text" list="v-list" name="base-work" tabindex="3" class="form-control border-green" value="@yield('base_work')" maxlength="55" id="job">
            <datalist id="v-list"  style="direction:rtl;">
            @foreach($getvocation as $vocation)
                <option value="{{ $vocation->name }}"  style="direction:rtl;">{{ $vocation->name }}</option>
            @endforeach
            </datalist>
        </div>


        <!-- جنسیت -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 153px;">
            <label for="sex">جنسیت<span class="text-danger">*</span></label>
            <input type="hidden" id="base-sex-value" name="base-sex-value" value="@yield('base_sex_value')">
            <select id="sex" class="form-control border-green" tabindex="4" name="base-sex" required>
                <option value="" selected >جنسیت</option>
                <option id="man" {{ old('base-sex')=='مرد' ? 'selected' : '' }} {{ @$getbases_b->BaseSex=='مرد' ? 'selected' : '' }} value="مرد">مرد</option>
                <option id="woman" {{ old('base-sex')=='زن' ? 'selected' : '' }} {{ @$getbases_b->BaseSex=='زن' ? 'selected' : '' }} value="زن">زن</option>
            </select>
        </div>


        <!-- وضعیت تاهل -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 153px;">
            <label for="marital">وضعیت تاهل<span class="text-danger" id="sexstar">*</span></label>
            <input type="hidden" id="base-marital-status-value" value="@yield('base_marital')">
            <select required id="martial" name="base-marital"  class="form-control border-green" tabindex="4" required>
                <option selected value="">وضعیت تاهل</option>
                <option id="single" {{ old('base-marital')=='مجرد' ? 'selected' : '' }} {{ @$getbases->BaseMarital=='مجرد' ? 'selected' : '' }} value="مجرد">مجرد</option>
                <option id="married" {{ old('base-marital')=='متاهل' ? 'selected' : '' }} {{ @$getbases->BaseMarital=='متاهل' ? 'selected' : '' }} value="متاهل">متاهل</option>
            </select>
        </div>


        <!-- وضعیت سربازی -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 153px;">
            <label for="MilitaryService">وضعیت سربازی<span class="text-danger" id="MSstar">*</span></label>
            <select id="MilitaryService" name="base-MS"  class="form-control border-green" tabindex="5" required>
                <option selected value="">وضعیت خدمت</option>
                <option {{ old('base-MS')=='مشمول' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='مشمول' ? 'selected' : '' }} value="مشمول">مشمول</option>
                <option {{ old('base-MS')=='معاف' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='معاف' ? 'selected' : '' }} value="معاف">معاف</option>
                <option {{ old('base-MS')=='در حال خدمت' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='در حال خدمت' ? 'selected' : '' }} value="در حال خدمت">در حال خدمت</option>
                <option {{ old('base-MS')=='پایان خدمت' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='پایان خدمت' ? 'selected' : '' }} value="پایان خدمت">پایان خدمت</option>
                <option {{ old('base-MS')=='معافیت تحصیلی' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='معافیت تحصیلی' ? 'selected' : '' }} value="معافیت تحصیلی">معافیت تحصیلی</option>
                <option {{ old('base-MS')=='معافیت پزشکی' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='معافیت پزشکی' ? 'selected' : '' }} value="معافیت پزشکی">معافیت پزشکی</option>
                <option {{ old('base-MS')=='معافیت غیرپزشکی' ? 'selected' : '' }} {{ @$getbases->BaseSolider=='معافیت غیرپزشکی' ? 'selected' : '' }} value="معافیت غیرپزشکی">معافیت غیرپزشکی</option>
            </select>
        </div>


        <!-- شهر -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 153px;">
            <label for="city">شهر<span class="text-danger">*</span></label>
            <input type="text" name="base-city" id="city" list="clist"  tabindex="6" value="@yield('base_city')"  class="form-control border-green" required>
            <datalist id="clist"  style="direction:rtl;">
            <option>انتخاب شهر</option>
            @foreach($getcities as $cities)
                <option value="{{ $cities->name }}"  style="direction:rtl;">{{ $cities->name }}</option>
            @endforeach
            </datalist>
        </div>



    <div class="m-2">
        <!-- موبایل -->
        <div class="form-group float-left mr-md-1 ml-md-3 mt-md-2 mobile-input-0" style="min-width: 125px;">
            <label for="mobile">موبایل<span class="text-danger">*</span></label>

                <input required  type="tel" name="base-mobile" value="@yield('base_mobile')"  pattern="09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}" class="form-control border-green text-right" tabindex="8" style="direction:ltr"
                maxlength="11" size="13" id="mobile">

        </div>
            <!--  پیش شماره کشور -->
        <div class="form-group float-left mt-2 ml-1 mt-md-3 mobile-input-0" >
            <label for="preCountry"></label>
                
            <select required type="tel" name="base-pre-number-country" tabindex="1000" class="form-control border-green text-right" maxlength="5"
                id="preCountry" list="preCountrylist" style="width: 70px;direction:rtl;">
                <option value="98" selected>98+</option>

            @foreach($codeC as $cc)
                <option value="{{ $cc }}">{{ $cc }}+</option>
            @endforeach
            </select>    
        </div>
    </div>


        <!-- تاریخ تولد -->
        <div class="form-group float-left m-1 m-md-3">
            <label for="birthday">تاریخ تولد<span class="text-danger">*</span></label>
            <div class="mobile-input">
                <select required class="form-control border-green float-left mx-1 mtx" tabindex="9" style="width: auto;" id="birthday" value="@yield('base_birthday')" name="base-day-birth">
                    <option value="" disabled="" selected="">روز</option>
                    <option {{ old('base-day-birth')=='1' ? 'selected' : '' }} {{ @$day=='1' ? 'selected' : '' }} value="1">1</option>
                    <option {{ old('base-day-birth')=='2' ? 'selected' : '' }} {{ @$day=='2' ? 'selected' : '' }} value="2">2</option>
                    <option {{ old('base-day-birth')=='3' ? 'selected' : '' }} {{ @$day=='3' ? 'selected' : '' }} value="3">4</option>
                    <option {{ old('base-day-birth')=='4' ? 'selected' : '' }} {{ @$day=='4' ? 'selected' : '' }} value="4">6</option>
                    <option {{ old('base-day-birth')=='5' ? 'selected' : '' }} {{ @$day=='5' ? 'selected' : '' }} value="5">5</option>
                    <option {{ old('base-day-birth')=='6' ? 'selected' : '' }} {{ @$day=='6' ? 'selected' : '' }} value="6">6</option>
                    <option {{ old('base-day-birth')=='7' ? 'selected' : '' }} {{ @$day=='7' ? 'selected' : '' }} value="7">7</option>
                    <option {{ old('base-day-birth')=='8' ? 'selected' : '' }} {{ @$day=='8' ? 'selected' : '' }} value="8">8</option>
                    <option {{ old('base-day-birth')=='9' ? 'selected' : '' }} {{ @$day=='9' ? 'selected' : '' }} value="9">9</option>
                    <option {{ old('base-day-birth')=='10' ? 'selected' : '' }} {{ @$day=='10' ? 'selected' : '' }} value="10">10</option>
                    <option {{ old('base-day-birth')=='11' ? 'selected' : '' }} {{ @$day=='11' ? 'selected' : '' }} value="11">11</option>
                    <option {{ old('base-day-birth')=='12' ? 'selected' : '' }} {{ @$day=='12' ? 'selected' : '' }} value="12">12</option>
                    <option {{ old('base-day-birth')=='13' ? 'selected' : '' }} {{ @$day=='13' ? 'selected' : '' }} value="13">13</option>
                    <option {{ old('base-day-birth')=='14' ? 'selected' : '' }} {{ @$day=='14' ? 'selected' : '' }} value="14">14</option>
                    <option {{ old('base-day-birth')=='15' ? 'selected' : '' }} {{ @$day=='15' ? 'selected' : '' }} value="15">15</option>
                    <option {{ old('base-day-birth')=='16' ? 'selected' : '' }} {{ @$day=='16' ? 'selected' : '' }} value="16">16</option>
                    <option {{ old('base-day-birth')=='17' ? 'selected' : '' }} {{ @$day=='17' ? 'selected' : '' }} value="17">17</option>
                    <option {{ old('base-day-birth')=='18' ? 'selected' : '' }} {{ @$day=='18' ? 'selected' : '' }} value="18">18</option>
                    <option {{ old('base-day-birth')=='19' ? 'selected' : '' }} {{ @$day=='19' ? 'selected' : '' }} value="19">19</option>
                    <option {{ old('base-day-birth')=='20' ? 'selected' : '' }} {{ @$day=='20' ? 'selected' : '' }} value="20">20</option>
                    <option {{ old('base-day-birth')=='21' ? 'selected' : '' }} {{ @$day=='21' ? 'selected' : '' }} value="21">21</option>
                    <option {{ old('base-day-birth')=='22' ? 'selected' : '' }} {{ @$day=='22' ? 'selected' : '' }} value="22">22</option>
                    <option {{ old('base-day-birth')=='23' ? 'selected' : '' }} {{ @$day=='23' ? 'selected' : '' }} value="23">23</option>
                    <option {{ old('base-day-birth')=='24' ? 'selected' : '' }} {{ @$day=='24' ? 'selected' : '' }} value="24">24</option>
                    <option {{ old('base-day-birth')=='25' ? 'selected' : '' }} {{ @$day=='25' ? 'selected' : '' }} value="25">25</option>
                    <option {{ old('base-day-birth')=='26' ? 'selected' : '' }} {{ @$day=='26' ? 'selected' : '' }} value="26">26</option>
                    <option {{ old('base-day-birth')=='27' ? 'selected' : '' }} {{ @$day=='27' ? 'selected' : '' }} value="27">27</option>
                    <option {{ old('base-day-birth')=='28' ? 'selected' : '' }} {{ @$day=='28' ? 'selected' : '' }} value="28">28</option>
                    <option {{ old('base-day-birth')=='29' ? 'selected' : '' }} {{ @$day=='29' ? 'selected' : '' }} value="29">29</option>
                    <option {{ old('base-day-birth')=='30' ? 'selected' : '' }} {{ @$day=='30' ? 'selected' : '' }} value="30">30</option>
                    <option {{ old('base-day-birth')=='31' ? 'selected' : '' }} {{ @$day=='31' ? 'selected' : '' }} value="31" id="day-31">31</option>
                </select>
                <select required class="form-control border-green w-auto float-left mx-1 mobile-input mtx" tabindex="10" value="@yield('base_month_birth')" name="base-month-birth" id="month">
                    <option value="" disabled="" selected="">ماه</option>
                    <option {{ old('base-month-birth')=='1' ? 'selected' : '' }} {{ @$month=='1' ? 'selected' : '' }} value="1">فروردین</option>
                    <option {{ old('base-month-birth')=='2' ? 'selected' : '' }} {{ @$month=='2' ? 'selected' : '' }} value="2">اردیبهشت</option>
                    <option {{ old('base-month-birth')=='3' ? 'selected' : '' }} {{ @$month=='3' ? 'selected' : '' }} value="4">خرداد</option>
                    <option {{ old('base-month-birth')=='4' ? 'selected' : '' }} {{ @$month=='4' ? 'selected' : '' }} value="6">تیر</option>
                    <option {{ old('base-month-birth')=='5' ? 'selected' : '' }} {{ @$month=='5' ? 'selected' : '' }} value="5">مرداد</option>
                    <option {{ old('base-month-birth')=='6' ? 'selected' : '' }} {{ @$month=='6' ? 'selected' : '' }} value="6">شهریور</option>
                    <option {{ old('base-month-birth')=='7' ? 'selected' : '' }} {{ @$month=='7' ? 'selected' : '' }} value="7"  id="m-7">مهر</option>
                    <option {{ old('base-month-birth')=='8' ? 'selected' : '' }} {{ @$month=='8' ? 'selected' : '' }} value="8"  id="m-8">آبان</option>
                    <option {{ old('base-month-birth')=='9' ? 'selected' : '' }} {{ @$month=='9' ? 'selected' : '' }} value="9"  id="m-9">آذر</option>
                    <option {{ old('base-month-birth')=='10' ? 'selected' : '' }} {{ @$month=='10' ? 'selected' : '' }} value="10"  id="m-10">دی</option>
                    <option {{ old('base-month-birth')=='11' ? 'selected' : '' }} {{ @$month=='11' ? 'selected' : '' }} value="11" id="m-11">بهمن</option>
                    <option {{ old('base-mount-birth')=='12' ? 'selected' : '' }} {{ @$month=='12' ? 'selected' : '' }} value="12" id="m-12">اسفند</option>
                </select>


                <input required min="1300" max="1390" pattern="^(13(?:[0-8]\d|90))$" data-score="2" tabindex="11"
                    class="form-control border-green w-auto float-left mx-1 mobile-input mtx" placeholder="سال" maxlength="4"
                    style="width: 85px !important;" list="year-list" id="year" name="base-year-birth" value="@yield('base_year_birth')">


                <datalist id="year-list">
                @for($i=1300;$i<=1390;$i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </datalist>   
            </div>

        </div>

        <div class="m-2">
            <!-- تلفن -->
            <div class="form-group float-left mr-md-1 ml-md-3 mt-md-2 mobile-input-0">
                <label for="telephone">تلفن<span class="text-danger">*</span></label>
                <input required type="tel" class="form-control border-green text-right" value="@yield('base_telephone')" pattern="\d{8}$" tabindex="13" maxlength="8" id="telephone"
                    style="width: 120px;direction:rtl;" name="base-telephone">
            </div>

            <!-- پیش شماره -->
            <div class="form-group float-left float-left mt-2 ml-1 mt-md-3 mobile-input-0">
                <label for="telephone"></label>
                <input required type="tel" name="base-pre-number-state" tabindex="12" value="@yield('base_pre')" class="form-control border-green text-right" maxlength="3"
                    id="pre" list="prenumber" style="width: 70px;direction:rtl;">
                <datalist id="prenumber">
                @foreach($code as $c)
                    <option value="{{ $c }}">{{ $c }}</option>
                @endforeach
                </datalist>    
            </div>
        </div>

        <!-- ایمیل -->
        <div class="form-group  float-left m-1 m-md-3 mobile-input" style="min-width: 244px;">
            <label for="email">ایمیل<span class="text-danger">*</span></label>
            <input required spellcheck="false" type="email" name="base-email" value="@yield('base_email')" class="form-control border-green vaziren-font text-right" id="email" tabindex="14">
        </div>


        <!-- آدرس وبلاگ -->
        <div class="form-group  float-left m-1 m-md-3 mobile-input" style="min-width: 253px;">
            <label for="weblog">آدرس وبلاگ<span class="text-danger"></span></label>
            <div class="mb-3" style="direction: ltr;">

            <input  type="text"  spellcheck="false" name="base-weblog" value="@yield('base_weblog')" class="form-control border-green vaziren-font text-right border-fix" tabindex="15" style="direction:ltr;border-radius: 0.25rem !important;"
                maxlength="100" id="weblog">
            </div>
        </div>


        <!-- آی دی اینستاگرام -->
        <div class="form-group  float-left m-1 m-md-3 mobile-input" style="min-width: 180px;">
            <label for="instagram">آی دی اینستاگرام<span class="text-danger"></span></label>

            <div class="input-group mb-3" style="direction: ltr;">
                <div class="input-group-prepend">
                    <span class="input-group-text green-label">@</span>
                </div>
            <input  type="text" spellcheck="false" pattern="^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$" name="base-instagram" value="@yield('base_instagram')" placeholder="example2020" class="form-control border-green vaziren-font text-right border-fix" tabindex="16" style="direction:ltr"
            maxlength="100" id="instagram">
            </div>

        </div>


        <!-- توصیف خلاصه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 250px;">
            <label for="desc">توصیف خلاصه از خود<span class="text-danger"></span></label>
            <input  type="text" name="base-desc" value="@yield('base_desc')" tabindex="17" autofocus class="form-control border-green" maxlength="92" size="92" id="desc">
        </div>


    </div>
</div>
</div>
<script src="{{ asset('js/cv.js') }}"></script>
<script>
//name
$("#name").keyup(function () {
    $("#namex").text($("#name").val()); 
});

//family
$("#family").keyup(function () {
    $("#familyx").text($("#family").val()); 
});

//job
$("#job").keyup(function () {
    $("#jobx").text($("#job").val()); 
});

//sex
$("#sex").keyup(function () {
    $("#sexx").text($("#sex").val()); 
    if(sextype == 'زن')
    {
        $("#MS0").css("display","none");
        $("#MS1").css("display","none");
        $("#MilitaryServicex").css("display","none");
    }
    if(sextype == 'مرد')
    {
        $("#MS0").css("display","inline-block");
        $("#MS1").css("display","inline-block");
        $("#MilitaryServicex").css("display","inline-block");
    }
});
$("#sex").change(function () {
    $("#sexx").text($("#sex").val()); 
    var sextype = $("#sex").val();
    if(sextype == 'زن')
    {
        $("#MS0").css("display","none");
        $("#MS1").css("display","none");
        $("#MilitaryServicex").css("display","none");
        @yield('secwoman')
    }
    if(sextype == 'مرد')
    {
        $("#MS0").css("display","inline-block");
        $("#MS1").css("display","inline-block");
        $("#MilitaryServicex").css("display","inline-block");
        @yield('secman')
    }
});

//job
$("#desc").keyup(function () {
    $("#descx").text($("#desc").val()); 
});

//birthdate
$("#birthday").keyup(function () {
    $("#birthdayx").text("/"+$("#birthday").val()); 
});
$("#birthday").change(function () {
    $("#birthdayx").text("/"+$("#birthday").val()); 
});

//birthmonth
$("#month").keyup(function () {
    $("#birthmonthx").text("/"+$("#month").val()); 
});
$("#month").change(function () {
    $("#birthmonthx").text("/"+$("#month").val()); 
});

//birthyear
$("#year").keyup(function () {
    $("#birthyearx").text($("#year").val()); 
});
$("#year").change(function () {
    $("#birthyearx").text($("#year").val()); 
});

//marital
$("#martial").change(function () {
    $("#maritalx").text($("#martial").val()); 
});

//MilitaryService
$("#MilitaryService").change(function () {
    $("#MilitaryServicex").text($("#MilitaryService").val()); 
});

//City
$("#city").change(function () {
    $("#cityx").text($("#city").val()); 
});

//prenumber
$("#pre").change(function () {
    $("#prenumberx").text($("#pre").val()+"-"); 
});

//telephone
$("#telephone").change(function () {
    $("#phonex").text($("#telephone").val()); 
});


//mobile
$("#mobile").change(function () {
    $("#mobilex").text($("#mobile").val()); 
});

//email
$("#email").change(function () {
    $("#emailx").text($("#email").val()); 
});

//weblog
$("#weblog").change(function () {
    $("#weblogx").text($("#weblog").val()); 
});

//instagram
$("#instagram").change(function () {
    $("#instagramx").text($("#instagram").val()+"@"); 
});

//precountery
$("#preCountry").change(function () {
    $("#precountryx").text("- "+$("#preCountry").val()+"+"); 
});

</script>




