    <!-- دکمه اضافه -->
    <div class="form-group float-left" style="position: relative;right: 10px;top:18px;">
        <button type="button" class="btn rounded-circle position-relative border-orange" id="btn-add-skills"
            style="top:25px;background: #9c3200;border:1px solid #000;width:40px;height:40px;"><span class="glyphicon glyphicon-plus"
                style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <!-- دکمه حذف -->
    <div class="form-group float-right" style="position: relative;right: -10px;top:18px;">
        <button type="button" class="btn rounded-circle position-relative border-orange" id="btn-remove-skills"
            style="top:25px;background: #9c3200;border:1px solid #000;width:40px;height:40px;"><span class="glyphicon glyphicon-minus"
                style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <h5 class="position-relative panel-title p-2" style="<?php echo $__env->yieldContent('stylepanel-9'); ?>;top:0px;">مهارت های تجربی</h5>
            <!-- hidden input -->
            <input type="hidden" name="skillsName1Z"  value="<?php echo $__env->yieldContent('sn1'); ?>" id="skillsName1Z"/>
            <input type="hidden" name="skillsLevel1Z" value="<?php echo $__env->yieldContent('sl1'); ?>" id="skillsLevel1Z"/>
            <input type="hidden" name="skillsName2Z"  value="<?php echo $__env->yieldContent('sn2'); ?>" id="skillsName2Z"/>
            <input type="hidden" name="skillsLevel2Z" value="<?php echo $__env->yieldContent('sl2'); ?>" id="skillsLevel2Z"/>
            <input type="hidden" name="skillsName3Z"  value="<?php echo $__env->yieldContent('sn3'); ?>" id="skillsName3Z"/>
            <input type="hidden" name="skillsLevel3Z" value="<?php echo $__env->yieldContent('sl3'); ?>" id="skillsLevel3Z"/>
            <input type="hidden" name="skillsName4Z"  value="<?php echo $__env->yieldContent('sn4'); ?>" id="skillsName4Z"/>
            <input type="hidden" name="skillsLevel4Z" value="<?php echo $__env->yieldContent('sl4'); ?>" id="skillsLevel4Z"/>

            <!-- End hidden input -->

            


    <div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" id="divskills" style="<?php echo $__env->yieldContent('backpanel-9'); ?>">

        <div class="form-row mt28" id="formskills">
            <div id="divskillx0">
            <!-- نام مهارت -->
                <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 175px;">
                    <label for="skillsName0">نام مهارت<span class="text-danger">*</span></label>
                    <input type="text" name="skillsName0" value="<?php echo $__env->yieldContent('skillsName_0'); ?>" id="skillsName0" tabindex="101" size="25"
                        class="form-control border-orange" d>
                </div>
                <!-- سطح -->
                <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 140px;">
                    <label for="skillsLevel0">سطح<span class="text-danger">*</span></label>
                    <select type="text" name="skillsLevel0" id="skillsLevel0" tabindex="102"
                        class="form-control border-orange" d>
                        <option value="" selected>انتخاب کنید</option>
                        <option <?php echo e(old('skillsLevel0')=='خیلی‌کم' ? 'selected' : ''); ?> <?php echo e(@$getskill1->SkillsLevel=='خیلی‌کم' ? 'selected' : ''); ?> value="خیلی‌کم">خیلی‌کم</option>
                        <option <?php echo e(old('skillsLevel0')=='کم' ? 'selected' : ''); ?> <?php echo e(@$getskill1->SkillsLevel=='کم' ? 'selected' : ''); ?> value="کم">‌کم</option>
                        <option <?php echo e(old('skillsLevel0')=='متوسط' ? 'selected' : ''); ?> <?php echo e(@$getskill1->SkillsLevel=='متوسط' ? 'selected' : ''); ?> value="متوسط">متوسط</option>
                        <option <?php echo e(old('skillsLevel0')=='زیاد' ? 'selected' : ''); ?> <?php echo e(@$getskill1->SkillsLevel=='زیاد' ? 'selected' : ''); ?> value="زیاد">زیاد</option>
                        <option <?php echo e(old('skillsLevel0')=='خیلی‌زیاد' ? 'selected' : ''); ?> <?php echo e(@$getskill1->SkillsLevel=='خیلی‌زیاد' ? 'selected' : ''); ?> value="خیلی‌زیاد">خیلی‌زیاد</option>
                    </select>
            </div>
        </div>
        </div>
    </div>
<script>
$("#skillsName0").change(function () {
    $("#textskills").text("مهارت‌های تجربی: ");
    $("#SkillTitlex0").text($("#skillsName0").val());
});
$("#skillsLevel0").change(function () {
    if($("#skillsLevel0").val() == "خیلی‌کم")
    {
        $("#SRx0x1").removeClass("bg-dark");
        $("#SRx0x2").removeClass("bg-dark");
        $("#SRx0x3").removeClass("bg-dark");
        $("#SRx0x4").removeClass("bg-dark");
        $("#SRx0x5").removeClass("bg-dark");
        $("#SkillRatingx0").css('visibility','visible');
        $("#SRx0x1").addClass("bg-dark");
    }
    if($("#skillsLevel0").val() == "کم")
    {
        $("#SRx0x1").removeClass("bg-dark");
        $("#SRx0x2").removeClass("bg-dark");
        $("#SRx0x3").removeClass("bg-dark");
        $("#SRx0x4").removeClass("bg-dark");
        $("#SRx0x5").removeClass("bg-dark");
        $("#SkillRatingx0").css('visibility','visible');
        $("#SRx0x1").addClass("bg-dark");
        $("#SRx0x2").addClass("bg-dark");
    }
    if($("#skillsLevel0").val() == "متوسط")
    {
        $("#SRx0x1").removeClass("bg-dark");
        $("#SRx0x2").removeClass("bg-dark");
        $("#SRx0x3").removeClass("bg-dark");
        $("#SRx0x4").removeClass("bg-dark");
        $("#SRx0x5").removeClass("bg-dark");
        $("#SkillRatingx0").css('visibility','visible');
        $("#SRx0x1").addClass("bg-dark");
        $("#SRx0x2").addClass("bg-dark");
        $("#SRx0x3").addClass("bg-dark");
    }
    if($("#skillsLevel0").val() == "زیاد")
    {
        $("#SRx0x1").removeClass("bg-dark");
        $("#SRx0x2").removeClass("bg-dark");
        $("#SRx0x3").removeClass("bg-dark");
        $("#SRx0x4").removeClass("bg-dark");
        $("#SRx0x5").removeClass("bg-dark");
        $("#SkillRatingx0").css('visibility','visible');
        $("#SRx0x1").addClass("bg-dark");
        $("#SRx0x2").addClass("bg-dark");
        $("#SRx0x3").addClass("bg-dark");
        $("#SRx0x4").addClass("bg-dark");
    }
    if($("#skillsLevel0").val() == "خیلی‌زیاد")
    {
        $("#SRx0x1").removeClass("bg-dark");
        $("#SRx0x2").removeClass("bg-dark");
        $("#SRx0x3").removeClass("bg-dark");
        $("#SRx0x4").removeClass("bg-dark");
        $("#SRx0x5").removeClass("bg-dark");
        $("#SkillRatingx0").css('visibility','visible');
        $("#SRx0x1").addClass("bg-dark");
        $("#SRx0x2").addClass("bg-dark");
        $("#SRx0x3").addClass("bg-dark");
        $("#SRx0x4").addClass("bg-dark");
        $("#SRx0x5").addClass("bg-dark");
    }
});
</script>
<script>
$("#skillsName1").change(function () {
    $("#textskills").text("مهارت‌های تجربی: ");
    $("#SkillTitlex1").text($("#skillsName1").val());
});
$("#skillsLevel1").change(function () {
    if($("#skillsLevel1").val() == "خیلی‌کم")
    {
        $("#SRx1x1").removeClass("bg-dark");
        $("#SRx1x2").removeClass("bg-dark");
        $("#SRx1x3").removeClass("bg-dark");
        $("#SRx1x4").removeClass("bg-dark");
        $("#SRx1x5").removeClass("bg-dark");
        $("#SkillRatingx1").css('visibility','visible');
        $("#SRx1x1").addClass("bg-dark");
    }
    if($("#skillsLevel1").val() == "کم")
    {
        $("#SRx1x1").removeClass("bg-dark");
        $("#SRx1x2").removeClass("bg-dark");
        $("#SRx1x3").removeClass("bg-dark");
        $("#SRx1x4").removeClass("bg-dark");
        $("#SRx1x5").removeClass("bg-dark");
        $("#SkillRatingx1").css('visibility','visible');
        $("#SRx1x1").addClass("bg-dark");
        $("#SRx1x2").addClass("bg-dark");
    }
    if($("#skillsLevel1").val() == "متوسط")
    {
        $("#SRx1x1").removeClass("bg-dark");
        $("#SRx1x2").removeClass("bg-dark");
        $("#SRx1x3").removeClass("bg-dark");
        $("#SRx1x4").removeClass("bg-dark");
        $("#SRx1x5").removeClass("bg-dark");
        $("#SkillRatingx1").css('visibility','visible');
        $("#SRx1x1").addClass("bg-dark");
        $("#SRx1x2").addClass("bg-dark");
        $("#SRx1x3").addClass("bg-dark");
    }
    if($("#skillsLevel1").val() == "زیاد")
    {
        $("#SRx1x1").removeClass("bg-dark");
        $("#SRx1x2").removeClass("bg-dark");
        $("#SRx1x3").removeClass("bg-dark");
        $("#SRx1x4").removeClass("bg-dark");
        $("#SRx1x5").removeClass("bg-dark");
        $("#SkillRatingx1").css('visibility','visible');
        $("#SRx1x1").addClass("bg-dark");
        $("#SRx1x2").addClass("bg-dark");
        $("#SRx1x3").addClass("bg-dark");
        $("#SRx1x4").addClass("bg-dark");
    }
    if($("#skillsLevel1").val() == "خیلی‌زیاد")
    {
        $("#SRx1x1").removeClass("bg-dark");
        $("#SRx1x2").removeClass("bg-dark");
        $("#SRx1x3").removeClass("bg-dark");
        $("#SRx1x4").removeClass("bg-dark");
        $("#SRx1x5").removeClass("bg-dark");
        $("#SkillRatingx1").css('visibility','visible');
        $("#SRx1x1").addClass("bg-dark");
        $("#SRx1x2").addClass("bg-dark");
        $("#SRx1x3").addClass("bg-dark");
        $("#SRx1x4").addClass("bg-dark");
        $("#SRx1x5").addClass("bg-dark");
    }
});
</script>

<script src="<?php echo e(asset('js/add-s.js')); ?>"></script><?php /**PATH C:\xampp\mysite\resources\views/component/skills.blade.php ENDPATH**/ ?>