    <!-- دکمه اضافه -->
    <div class="form-group float-left" style="position: relative;right: 10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-dark-green" id="btn-add-work" style="top:25px;background: #008c86;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-plus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <!-- دکمه حذف -->
    <div class="form-group float-right" style="position: relative;right: -10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-dark-green" id="btn-remove-work" style="top:25px;background: #008c86;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-minus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <h5 class="position-relative panel-title p-2 ml-5" style="<?php echo $__env->yieldContent('stylepanel-6'); ?>;top:0px;">سوابق شغلی</h5>   


<div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" id="divwork" style="<?php echo $__env->yieldContent('backpanel-6'); ?>">
<h5 class="text-center" style="font-size: 14px !important;position: relative;top: -15px;color:#222;margin-right: 40px;margin-left: 40px;margin-top:20px">برای نوشتن سوابق شغلی ترتیب زمانی معکوس را رعایت کنید و از آخرین شغلی که داشتید یا دارید، شروع به نوشتن کنید.</h5>
        <!-- hidden input -->
        <input type="hidden" name="workPost1Z" value="<?php echo $__env->yieldContent('wp1'); ?>" id="workPost1Z"/>
        <input type="hidden" name="workCenter1Z" value="<?php echo $__env->yieldContent('wc1'); ?>" id="workCenter1Z"/>
        <input type="hidden" name="workTitleCenter1Z" value="<?php echo $__env->yieldContent('wt1'); ?>" id="workTitleCenter1Z"/>
        <input type="hidden" name="workCooperate1Z" value="<?php echo $__env->yieldContent('wo1'); ?>" id="workCooperate1Z"/>

        <input type="hidden" name="workPost2Z" value="<?php echo $__env->yieldContent('wp2'); ?>" id="workPost2Z"/>
        <input type="hidden" name="workCenter2Z" value="<?php echo $__env->yieldContent('wc2'); ?>" id="workCenter2Z"/>
        <input type="hidden" name="workTitleCenter2Z" value="<?php echo $__env->yieldContent('wt2'); ?>" id="workTitleCenter2Z"/>
        <input type="hidden" name="workCooperate2Z" value="<?php echo $__env->yieldContent('wo2'); ?>" id="workCooperate2Z"/>
        <!-- End hidden input -->
    <div class="form-row" id="formwork0">

        <!-- سمت شغلی -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="workPost0">سمت شغلی<span class="text-danger">*</span></label>
            <input type="text" name="workPost0" value="<?php echo $__env->yieldContent('workPost_0'); ?>" list="workPostdata0" id="workPost0" tabindex="48" size="29"  class="form-control border-dark-green" d>
            <datalist id="workPostdata0">
                <?php $__currentLoopData = $getvocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vocation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($vocation->name); ?>"  style="direction:rtl;"><?php echo e($vocation->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>   
        </div>

        <!-- مرکز اشتغال -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="workCenter0">مرکز اشتغال<span class="text-danger">*</span></label>
            <select name="workCenter0" list="workCenter0" id="workCenter0" tabindex="49" class="form-control border-dark-green" d>
            <option selected value="">انتخاب کنید</option>
            <option <?php echo e(old('workCenter0')=='موسسه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='موسسه' ? 'selected' : ''); ?> value="موسسه">موسسه</option>
            <option <?php echo e(old('workCenter0')=='شرکت' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='شرکت' ? 'selected' : ''); ?> value="شرکت">شرکت</option>
            <option <?php echo e(old('workCenter0')=='سازمان' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='سازمان' ? 'selected' : ''); ?> value="سازمان">سازمان</option>
            <option <?php echo e(old('workCenter0')=='نهاد' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='نهاد' ? 'selected' : ''); ?> value="نهاد">نهاد</option>
            <option <?php echo e(old('workCenter0')=='خوداشتغال' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='خود‌اشتغال' ? 'selected' : ''); ?> value="خود‌اشتغال">خود‌اشتغال</option>
            <option <?php echo e(old('workCenter0')=='فریلسنر' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='فریلسنر' ? 'selected' : ''); ?> value="فریلسنر">فریلسنر</option>
            <option <?php echo e(old('workCenter0')=='بانک' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='بانک' ? 'selected' : ''); ?> value="بانک">بانک</option>
            <option <?php echo e(old('workCenter0')=='بیمارستان' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='بیمارستان' ? 'selected' : ''); ?> value="بیمارستان">بیمارستان</option>
            <option <?php echo e(old('workCenter0')=='بیمارستان روانی' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='بیمارستان روانی' ? 'selected' : ''); ?> value="بیمارستان روانی">بیمارستان روانی</option>
            <option <?php echo e(old('workCenter0')=='کلینیک' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='کلینیک' ? 'selected' : ''); ?> value="کلینیک">کلینیک</option>
            <option <?php echo e(old('workCenter0')=='بنیاد' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='بنیاد' ? 'selected' : ''); ?> value="بنیاد">بنیاد</option>
            <option <?php echo e(old('workCenter0')=='دانشگاه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='دانشگاه' ? 'selected' : ''); ?> value="دانشگاه">دانشگاه</option>
            <option <?php echo e(old('workCenter0')=='مدرسه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='مدرسه' ? 'selected' : ''); ?> value="مدرسه">مدرسه</option>
            <option <?php echo e(old('workCenter0')=='حوزه علمیه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='حوزه علمیه' ? 'selected' : ''); ?> value="حوزه علمیه">حوزه علمیه</option>
            <option <?php echo e(old('workCenter0')=='آموزشگاه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='آموزشگاه' ? 'selected' : ''); ?> value="آموزشگاه">آموزشگاه</option>
            <option <?php echo e(old('workCenter0')=='مرکز' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='مرکز' ? 'selected' : ''); ?> value="مرکز">مرکز</option>
            <option <?php echo e(old('workCenter0')=='کارگاه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='کارگاه' ? 'selected' : ''); ?> value="کارگاه">کارگاه</option>
            <option <?php echo e(old('workCenter0')=='اداره آب' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='اداره آب' ? 'selected' : ''); ?> value="اداره آب">اداره آب</option>
            <option <?php echo e(old('workCenter0')=='اداره گاز' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='اداره گاز' ? 'selected' : ''); ?> value="اداره گاز">اداره گاز</option>
            <option <?php echo e(old('workCenter0')=='اداره برق' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='اداره برق' ? 'selected' : ''); ?> value="اداره برق">اداره برق</option>
            <option <?php echo e(old('workCenter0')=='بیمه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='بیمه' ? 'selected' : ''); ?> value="بیمه">بیمه</option>
            <option <?php echo e(old('workCenter0')=='آتشنشانی' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='آتشنشانی' ? 'selected' : ''); ?> value="آتشنشانی">آتش‌نشانی</option>
            <option <?php echo e(old('workCenter0')=='اورژانش' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='اورژانش' ? 'selected' : ''); ?> value="اورژانش"> اورژانش</option>
            <option <?php echo e(old('workCenter0')=='داروخانه' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='داروخانه' ? 'selected' : ''); ?> value="داروخانه">داروخانه</option>
            <option <?php echo e(old('workCenter0')=='فروشگاه زنجیره‌ای' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCenter=='فروشگاه زنجیره‌ای' ? 'selected' : ''); ?> value="فروشگاه زنجیره‌ای">فروشگاه زنجیره‌ای</option>
            </select>       
        </div>

        <!-- نام مرکز -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 200px;">
            <label for="workTitleCenter0"> نام <span id="centername0">مرکز</span><span class="text-danger">*</span></label>
            <input type="text" name="workTitleCenter0" value="<?php echo $__env->yieldContent('workTitleCenter_0'); ?>" id="workTitleCenter0" tabindex="50" size="31"  class="form-control border-dark-green" d>
        </div>

        <!-- نحوه همکاری  -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 170px;">
            <label for="workCooperate0">نحوه همکاری<span class="text-danger">*</span></label>
            <select name="workCooperate0" id="workCooperate0" tabindex="51" class="form-control border-dark-green" d>
                <option selected value="">انتخاب کنید</option>
                <option <?php echo e(old('workCooperate0')=='تمام‌وقت' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='تمام‌وقت' ? 'selected' : ''); ?> value="تمام‌وقت">تمام‌وقت</option>
                <option <?php echo e(old('workCooperate0')=='پاره‌وقت' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='پاره‌وقت' ? 'selected' : ''); ?> value="پاره‌وقت">پاره‌وقت</option>
                <option <?php echo e(old('workCooperate0')=='پروژه‌ای' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='پروژه‌ای' ? 'selected' : ''); ?> value="پروژه‌ای">پروژه‌ای</option>
                <option <?php echo e(old('workCooperate0')=='ساعتی' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='ساعتی' ? 'selected' : ''); ?> value="ساعتی">ساعتی</option>
                <option <?php echo e(old('workCooperate0')=='دورکاری' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='دورکاری' ? 'selected' : ''); ?> value="دورکاری">دورکاری</option>
                <option <?php echo e(old('workCooperate0')=='کارآموزی' ? 'selected' : ''); ?> <?php echo e(@$getwork1->WorkCooperation=='کارآموزی' ? 'selected' : ''); ?> value="کارآموزی">کارآموزی</option>
            </select>       
        </div>

    </div>
</div>
<script>
$("#workCenter0").change(function () {
    $("#centername0").text($("#workCenter0").val()); 
    $("#workCenterx0").text($("#workCenter0").val());
    $("#workTitleCenter0").focus();
});
$("#workPost0").change(function () {
    $("#workCenter0").focus();
    $("#workPostx0").text($("#workPost0").val() + " - ");
});
$("#workCooperate0").change(function () {
    $("#workCooperatex0").text($("#workCooperate0").val());
});
$("#workTitleCenter0").change(function () {
    $("#workCenterTitlex0").text($("#workTitleCenter0").val());
});
$("#workCenter1").change(function () {
    $("#centername1").text($("#workCenter1").val()); 
    $("#workCenterx1").text($("#workCenter1").val());
    $("#workTitleCenter1").focus();
});
$("#workPost1").change(function () {
    $("#workCenter1").focus();
    $("#workPostx1").text($("#workPost1").val() + " - ");
});
$("#workCooperate1").change(function () {
    $("#workCooperatex1").text($("#workCooperate1").val());
});
$("#workTitleCenter1").change(function () {
    $("#workCenterTitlex1").text($("#workTitleCenter1").val());
});
$("#workCenter2").change(function () {
    $("#centername2").text($("#workCenter2").val()); 
    $("#workCenterx2").text($("#workCenter2").val());
    $("#workTitleCenter2").focus();
});
$("#workPost2").change(function () {
    $("#workCenter2").focus();
    $("#workPostx2").text($("#workPost2").val() + " - ");
});
$("#workCooperate2").change(function () {
    $("#workCooperatex2").text($("#workCooperate2").val());
});
$("#workTitleCenter2").change(function () {
    $("#workCenterTitlex2").text($("#workTitleCenter2").val());
});
</script>



<script src="<?php echo e(asset('js/add-w.js')); ?>"></script><?php /**PATH C:\xampp\mysite\resources\views/component/work.blade.php ENDPATH**/ ?>