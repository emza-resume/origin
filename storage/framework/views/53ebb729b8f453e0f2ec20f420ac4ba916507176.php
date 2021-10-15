<h5 class="position-relative panel-title p-2 ml-5" style="<?php echo $__env->yieldContent('stylepanel-7'); ?>;top:0px;">پایان‌نامه</h5>


<div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" id="divthesis" style="<?php echo $__env->yieldContent('backpanel-7'); ?>">
    <div class="form-row" id="formthesis0">

        <!-- عنوان پایان نامه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="thesisTitle0">عنوان پایان‌نامه<span class="text-danger">*</span></label>
            <input type="text" name="thesisTitle0" id="thesisTitle0" tabindex="73" size="36"
                class="form-control border-dark-blue" value="<?php echo $__env->yieldContent('thesisTitle_0'); ?>">
        </div>

        <!-- تاریخ دفاع پایان نامه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input">
            <label for="birthday">تاریخ دفاع<span class="text-danger">*</span></label>
            <div class="mobile-input">
                <select d class="form-control border-dark-blue float-left mx-1 m5p" tabindex="74"
                    style="width: auto;" id="defensDate0" name="defensDate0" >
                    <option  value="" disabled="" selected="">روز</option>
                    <option <?php echo e(old('defensDate0')=='1' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='1' ? 'selected' : ''); ?> value="1">1</option>
                    <option <?php echo e(old('defensDate0')=='2' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='2' ? 'selected' : ''); ?> value="2">2</option>
                    <option <?php echo e(old('defensDate0')=='3' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='3' ? 'selected' : ''); ?> value="3">4</option>
                    <option <?php echo e(old('defensDate0')=='4' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='4' ? 'selected' : ''); ?> value="4">6</option>
                    <option <?php echo e(old('defensDate0')=='5' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='5' ? 'selected' : ''); ?> value="5">5</option>
                    <option <?php echo e(old('defensDate0')=='6' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='6' ? 'selected' : ''); ?> value="6">6</option>
                    <option <?php echo e(old('defensDate0')=='7' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='7' ? 'selected' : ''); ?> value="7">7</option>
                    <option <?php echo e(old('defensDate0')=='8' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='8' ? 'selected' : ''); ?> value="8">8</option>
                    <option <?php echo e(old('defensDate0')=='9' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='9' ? 'selected' : ''); ?> value="9">9</option>
                    <option <?php echo e(old('defensDate0')=='10' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='10' ? 'selected' : ''); ?> value="10">10</option>
                    <option <?php echo e(old('defensDate0')=='11' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='11' ? 'selected' : ''); ?> value="11">11</option>
                    <option <?php echo e(old('defensDate0')=='12' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='12' ? 'selected' : ''); ?> value="12">12</option>
                    <option <?php echo e(old('defensDate0')=='13' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='13' ? 'selected' : ''); ?> value="13">13</option>
                    <option <?php echo e(old('defensDate0')=='14' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='14' ? 'selected' : ''); ?> value="14">14</option>
                    <option <?php echo e(old('defensDate0')=='15' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='15' ? 'selected' : ''); ?> value="15">15</option>
                    <option <?php echo e(old('defensDate0')=='16' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='16' ? 'selected' : ''); ?> value="16">16</option>
                    <option <?php echo e(old('defensDate0')=='17' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='17' ? 'selected' : ''); ?> value="17">17</option>
                    <option <?php echo e(old('defensDate0')=='18' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='18' ? 'selected' : ''); ?> value="18">18</option>
                    <option <?php echo e(old('defensDate0')=='19' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='19' ? 'selected' : ''); ?> value="19">19</option>
                    <option <?php echo e(old('defensDate0')=='20' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='20' ? 'selected' : ''); ?> value="20">20</option>
                    <option <?php echo e(old('defensDate0')=='21' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='21' ? 'selected' : ''); ?> value="21">21</option>
                    <option <?php echo e(old('defensDate0')=='22' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='22' ? 'selected' : ''); ?> value="22">22</option>
                    <option <?php echo e(old('defensDate0')=='23' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='23' ? 'selected' : ''); ?> value="23">23</option>
                    <option <?php echo e(old('defensDate0')=='24' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='24' ? 'selected' : ''); ?> value="24">24</option>
                    <option <?php echo e(old('defensDate0')=='25' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='25' ? 'selected' : ''); ?> value="25">25</option>
                    <option <?php echo e(old('defensDate0')=='26' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='26' ? 'selected' : ''); ?> value="26">26</option>
                    <option <?php echo e(old('defensDate0')=='27' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='27' ? 'selected' : ''); ?> value="27">27</option>
                    <option <?php echo e(old('defensDate0')=='28' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='28' ? 'selected' : ''); ?> value="28">28</option>
                    <option <?php echo e(old('defensDate0')=='29' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='29' ? 'selected' : ''); ?> value="29">29</option>
                    <option <?php echo e(old('defensDate0')=='30' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='30' ? 'selected' : ''); ?> value="30">30</option>
                    <option <?php echo e(old('defensDate0')=='31' ? 'selected' : ''); ?> <?php echo e(@$dayt1=='31' ? 'selected' : ''); ?> value="31" id="day-31">31</option>
                </select>
                <select d class="form-control border-dark-blue w-auto float-left mx-1 m5p" tabindex="74"
                     id="month0" name="month0" >
                    <option value="" disabled="" selected="">ماه</option>
                    <option <?php echo e(old('month0')=='1' ? 'selected' : ''); ?> <?php echo e(@$montht1=='1' ? 'selected' : ''); ?> value="1">فروردین</option>
                    <option <?php echo e(old('month0')=='2' ? 'selected' : ''); ?> <?php echo e(@$montht1=='2' ? 'selected' : ''); ?> value="2">اردیبهشت</option>
                    <option <?php echo e(old('month0')=='3' ? 'selected' : ''); ?> <?php echo e(@$montht1=='3' ? 'selected' : ''); ?> value="3">خرداد</option>
                    <option <?php echo e(old('month0')=='4' ? 'selected' : ''); ?> <?php echo e(@$montht1=='4' ? 'selected' : ''); ?> value="4">تیر</option>
                    <option <?php echo e(old('month0')=='5' ? 'selected' : ''); ?> <?php echo e(@$montht1=='5' ? 'selected' : ''); ?> value="5">مرداد</option>
                    <option <?php echo e(old('month0')=='6' ? 'selected' : ''); ?> <?php echo e(@$montht1=='6' ? 'selected' : ''); ?> value="6">شهریور</option>
                    <option <?php echo e(old('month0')=='7' ? 'selected' : ''); ?> <?php echo e(@$montht1=='7' ? 'selected' : ''); ?> value="7" id="d-7">مهر</option>
                    <option <?php echo e(old('month0')=='8' ? 'selected' : ''); ?> <?php echo e(@$montht1=='8' ? 'selected' : ''); ?> value="8" id="d-8">آبان</option>
                    <option <?php echo e(old('month0')=='9' ? 'selected' : ''); ?> <?php echo e(@$montht1=='9' ? 'selected' : ''); ?> value="9" id="d-9">آذر</option>
                    <option <?php echo e(old('month0')=='10' ? 'selected' : ''); ?> <?php echo e(@$montht1=='10' ? 'selected' : ''); ?> value="10" id="d-10">دی</option>
                    <option <?php echo e(old('month0')=='11' ? 'selected' : ''); ?> <?php echo e(@$montht1=='11' ? 'selected' : ''); ?> value="11" id="d-11">بهمن</option>
                    <option <?php echo e(old('month0')=='12' ? 'selected' : ''); ?> <?php echo e(@$montht1=='12' ? 'selected' : ''); ?> value="12" id="d-12">اسفند</option>
                </select>


                <input min="1300" max="1400" data-score="2" tabindex="75"
                    class="form-control border-dark-blue w-auto float-left mx-1 m5p" placeholder="سال" maxlength="4"
                    style="width: 85px !important;" pattern="13[0-9]+[0-9]$" list="year-list-1" id="year0" name="year0" value="<?php echo $__env->yieldContent('year_0'); ?>" >


                <datalist id="year-list-1">
                    <?php for($i=1300;$i<=1399;$i++): ?>
                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </datalist>
            </div>

        </div>

                <!-- عنوان پایان نامه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input mt28" style="min-width: 220px;">
            <label for="thesisTitle1">عنوان پایان‌نامه</label>
            <input type="text" name="thesisTitle1" id="thesisTitle1" value="<?php echo $__env->yieldContent('thesisTitle_1'); ?>" tabindex="76" size="36"
                class="form-control border-dark-blue">
        </div>

        <!-- تاریخ دفاع پایان نامه -->
        <div class="form-group float-left m-1 m-md-3 position-relative mobile-input topt" style="top:-5px">
            <label for="birthday">تاریخ دفاع</label>
            <input type="checkbox" class="date-no" name="date-no" id="date-no" title="تاریخ دفاع ندارد" style="display: inline-block;position: relative;top: 3px;">
            تاریخ دفاع ندارد 
            <div class="mobile-input">
                <select  class="form-control border-dark-blue float-left mx-1 m5p" tabindex="77"
                    style="width: auto;" id="defensDate1" name="defensDate1">
                    <option value="" disabled="" selected="">روز</option>
                    <option <?php echo e(old('defensDate1')=='1' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='1' ? 'selected' : ''); ?> value="1">1</option>
                    <option <?php echo e(old('defensDate1')=='2' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='2' ? 'selected' : ''); ?> value="2">2</option>
                    <option <?php echo e(old('defensDate1')=='3' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='3' ? 'selected' : ''); ?> value="3">4</option>
                    <option <?php echo e(old('defensDate1')=='4' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='4' ? 'selected' : ''); ?> value="4">6</option>
                    <option <?php echo e(old('defensDate1')=='5' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='5' ? 'selected' : ''); ?> value="5">5</option>
                    <option <?php echo e(old('defensDate1')=='6' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='6' ? 'selected' : ''); ?> value="6">6</option>
                    <option <?php echo e(old('defensDate1')=='7' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='7' ? 'selected' : ''); ?> value="7">7</option>
                    <option <?php echo e(old('defensDate1')=='8' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='8' ? 'selected' : ''); ?> value="8">8</option>
                    <option <?php echo e(old('defensDate1')=='9' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='9' ? 'selected' : ''); ?> value="9">9</option>
                    <option <?php echo e(old('defensDate1')=='10' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='10' ? 'selected' : ''); ?> value="10">10</option>
                    <option <?php echo e(old('defensDate1')=='11' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='11' ? 'selected' : ''); ?> value="11">11</option>
                    <option <?php echo e(old('defensDate1')=='12' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='12' ? 'selected' : ''); ?> value="12">12</option>
                    <option <?php echo e(old('defensDate1')=='13' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='13' ? 'selected' : ''); ?> value="13">13</option>
                    <option <?php echo e(old('defensDate1')=='14' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='14' ? 'selected' : ''); ?> value="14">14</option>
                    <option <?php echo e(old('defensDate1')=='15' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='15' ? 'selected' : ''); ?> value="15">15</option>
                    <option <?php echo e(old('defensDate1')=='16' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='16' ? 'selected' : ''); ?> value="16">16</option>
                    <option <?php echo e(old('defensDate1')=='17' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='17' ? 'selected' : ''); ?> value="17">17</option>
                    <option <?php echo e(old('defensDate1')=='18' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='18' ? 'selected' : ''); ?> value="18">18</option>
                    <option <?php echo e(old('defensDate1')=='19' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='19' ? 'selected' : ''); ?> value="19">19</option>
                    <option <?php echo e(old('defensDate1')=='20' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='20' ? 'selected' : ''); ?> value="20">20</option>
                    <option <?php echo e(old('defensDate1')=='21' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='21' ? 'selected' : ''); ?> value="21">21</option>
                    <option <?php echo e(old('defensDate1')=='22' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='22' ? 'selected' : ''); ?> value="22">22</option>
                    <option <?php echo e(old('defensDate1')=='23' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='23' ? 'selected' : ''); ?> value="23">23</option>
                    <option <?php echo e(old('defensDate1')=='24' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='24' ? 'selected' : ''); ?> value="24">24</option>
                    <option <?php echo e(old('defensDate1')=='25' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='25' ? 'selected' : ''); ?> value="25">25</option>
                    <option <?php echo e(old('defensDate1')=='26' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='26' ? 'selected' : ''); ?> value="26">26</option>
                    <option <?php echo e(old('defensDate1')=='27' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='27' ? 'selected' : ''); ?> value="27">27</option>
                    <option <?php echo e(old('defensDate1')=='28' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='28' ? 'selected' : ''); ?> value="28">28</option>
                    <option <?php echo e(old('defensDate1')=='29' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='29' ? 'selected' : ''); ?> value="29">29</option>
                    <option <?php echo e(old('defensDate1')=='30' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='30' ? 'selected' : ''); ?> value="30">30</option>
                    <option <?php echo e(old('defensDate1')=='31' ? 'selected' : ''); ?> <?php echo e(@$dayt2=='31' ? 'selected' : ''); ?> value="31" id="day-31">31</option>
                </select>
                <select  class="form-control border-dark-blue w-auto float-left mx-1 m5p" tabindex="78"
                     id="month1" name="month1">
                    <option value="" disabled="" selected="">ماه</option>
                    <option <?php echo e(old('month1')=='1' ? 'selected' : ''); ?> <?php echo e(@$montht2=='1' ? 'selected' : ''); ?> value="1">فروردین</option>
                    <option <?php echo e(old('month1')=='2' ? 'selected' : ''); ?> <?php echo e(@$montht2=='2' ? 'selected' : ''); ?> value="2">اردیبهشت</option>
                    <option <?php echo e(old('month1')=='3' ? 'selected' : ''); ?> <?php echo e(@$montht2=='3' ? 'selected' : ''); ?> value="3">خرداد</option>
                    <option <?php echo e(old('month1')=='4' ? 'selected' : ''); ?> <?php echo e(@$montht2=='4' ? 'selected' : ''); ?> value="4">تیر</option>
                    <option <?php echo e(old('month1')=='5' ? 'selected' : ''); ?> <?php echo e(@$montht2=='5' ? 'selected' : ''); ?> value="5">مرداد</option>
                    <option <?php echo e(old('month1')=='6' ? 'selected' : ''); ?> <?php echo e(@$montht2=='6' ? 'selected' : ''); ?> value="6">شهریور</option>
                    <option <?php echo e(old('month1')=='7' ? 'selected' : ''); ?> <?php echo e(@$montht2=='7' ? 'selected' : ''); ?> value="7" id="dd-7">مهر</option>
                    <option <?php echo e(old('month1')=='8' ? 'selected' : ''); ?> <?php echo e(@$montht2=='8' ? 'selected' : ''); ?> value="8" id="dd-8">آبان</option>
                    <option <?php echo e(old('month1')=='9' ? 'selected' : ''); ?> <?php echo e(@$montht2=='9' ? 'selected' : ''); ?> value="9" id="dd-9">آذر</option>
                    <option <?php echo e(old('month1')=='10' ? 'selected' : ''); ?> <?php echo e(@$montht2=='10' ? 'selected' : ''); ?> value="10" id="dd-10">دی</option>
                    <option <?php echo e(old('month1')=='11' ? 'selected' : ''); ?> <?php echo e(@$montht2=='11' ? 'selected' : ''); ?> value="11" id="dd-11">بهمن</option>
                    <option <?php echo e(old('month1')=='12' ? 'selected' : ''); ?> <?php echo e(@$montht2=='12' ? 'selected' : ''); ?> value="12" id="dd-12">اسفند</option>
                </select>
                <input  min="1300" max="1400" data-score="2" tabindex="79"
                    class="form-control border-dark-blue w-auto float-left mx-1 m5p mobile-input" placeholder="سال" maxlength="4"
                    style="width: 85px !important;" pattern="13[0-9]+[0-9]$" list="year-list-2" id="year1" name="year1" value="<?php echo $__env->yieldContent('year_1'); ?>">

                <datalist id="year-list-2">
                    <?php for($i=1300;$i<=1399;$i++): ?>
                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </datalist>
            </div>

        </div>


    </div>
</div>
<script>
// بررسی انتخاب روز 31 
var d31 = 0;

$("#defensDate0").change(function () {
    var dayNumberT = $("#defensDate0").val();
    $("#thesisDefenceDayx0").text($("#defensDate0").val());
        if (dayNumberT == 31) {
            d31 = 1;
        }
        if (dayNumberT != 31) {
            d31 = 0;
        }
        if (d31 == 0) {
            $("#d-7").removeAttr("disabled");
            $("#d-8").removeAttr("disabled");
            $("#d-9").removeAttr("disabled");
            $("#d-10").removeAttr("disabled");
            $("#d-11").removeAttr("disabled");
            $("#d-12").removeAttr("disabled");
        }
        if (d31 == 1) {
            $("#d-7").attr('disabled', 'disabled');
            $("#d-8").attr('disabled', 'disabled');
            $("#d-9").attr('disabled', 'disabled');
            $("#d-10").attr('disabled', 'disabled');
            $("#d-11").attr('disabled', 'disabled');
            $("#d-12").attr('disabled', 'disabled');
        }
    $("#month0").focus();
});

$("#month0").change(function () {
    $("#thesisDefenceMonthx0").append($("#month0").val()+"/");
    $("#year0").focus();
});

$("#year0").change(function () {
    $("#thesisTitle1").focus();
    $("#thesisDefenceYearx0").append($("#year0").val()+"/");
});

$("#thesisTitle0").change(function () {
    $("#thesisTitlex0").text($("#thesisTitle0").val());
    $("#thesisDefenceTextx0").text("تاریخ دفاع: ");
    
});
$("#thesisTitle1").change(function () {
    $("#thesisTitlex1").text($("#thesisTitle1").val());
    $("#thesisDefenceTextx1").text("تاریخ دفاع: ");
});

$("#defensDate1").change(function () {
    var dayNumberTT = $("#defensDate1").val();
    $("#thesisDefenceDayx1").text($("#defensDate1").val());
if (dayNumberTT == 31) {
    dd31 = 1;
}
if (dayNumberTT != 31) {
    dd31 = 0;
}
if (dd31 == 0) {
    $("#dd-7").removeAttr("disabled");
    $("#dd-8").removeAttr("disabled");
    $("#dd-9").removeAttr("disabled");
    $("#dd-10").removeAttr("disabled");
    $("#dd-11").removeAttr("disabled");
    $("#dd-12").removeAttr("disabled");
}
if (dd31 == 1) {
    $("#dd-7").attr('disabled', 'disabled');
    $("#dd-8").attr('disabled', 'disabled');
    $("#dd-9").attr('disabled', 'disabled');
    $("#dd-10").attr('disabled', 'disabled');
    $("#dd-11").attr('disabled', 'disabled');
    $("#dd-12").attr('disabled', 'disabled');
}
    $("#month1").focus();
});

$("#month1").change(function () {
    $("#thesisDefenceMonthx1").append($("#month1").val()+"/");

    $("#year1").focus();
});

$("#year1").change(function () {
    $("#thesisDefenceYearx1").append($("#year1").val()+"/");
});

$("#date-no").click(function () {
    
    $("#month1").removeAttr("disabled");
    $("#defensDate1").removeAttr("disabled");
    $("#year1").removeAttr("disabled");
    
    if($("#date-no:checked")) 
    {
        $("#month1").attr("disabled","disabled");
        $("#defensDate1").attr("disabled","disabled");
        $("#year1").attr("disabled","disabled");
    }


});
</script>
<?php /**PATH C:\xampp\mysite\resources\views/component/thesis.blade.php ENDPATH**/ ?>