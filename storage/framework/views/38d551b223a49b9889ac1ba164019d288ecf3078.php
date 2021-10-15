<script src="<?php echo e(asset('js/focus.js')); ?>" async></script>

<!-- دکمه اضافه -->
<div class="form-group float-left" style="position: relative;right: 10px;top:18px;">
    <button class="btn rounded-circle position-relative border-red" id="btn-add-edu" type="button"
        style="top:25px;background: #840000;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-plus"
            style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
</div>

<!-- دکمه حذف -->
<div class="form-group float-right" style="position: relative;right: -10px;top:18px;">
    <button class="btn rounded-circle position-relative border-red" id="btn-remove-edu" type="button"
        style="top:25px;background: #840000;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-minus"
            style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
</div>
<h5 class="position-relative panel-title p-2 ml-5" style="<?php echo $__env->yieldContent('stylepanel-2'); ?>;top:0px;">سوابق تحصیلی</h5>
<div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" id="divjum" style="<?php echo $__env->yieldContent('backpanel-2'); ?>">
<h5 class="text-center" style="font-size: 14px !important;position: relative;top: -15px;color:#222;margin-right: 40px;margin-left: 40px;margin-top:20px">برای نوشتن سوابق تحصیلی در رزومه، همیشه از بالاترین مدرک خود شروع به نوشتن کنید.</h5>
    <div class="form-row" id="form0">

        <!-- hidden input -->
        <input type="hidden" name="education-grade1Z" id="grade1Z" value="<?php echo $__env->yieldContent('eg1'); ?>" id="education-grade1Z"/>
        <input type="hidden" name="educationFS1Z" id="FS1Z" value="<?php echo $__env->yieldContent('ef1'); ?>" id="educationFS1Z"/>
        <input type="hidden" name="educationAD1Z" id="AD1Z" value="<?php echo $__env->yieldContent('ea1'); ?>" id="educationAD1Z"/>
        <input type="hidden" name="educationUniversity1Z" id="University1Z" value="<?php echo $__env->yieldContent('eu1'); ?>" id="educationUniversity1Z"/>
        <input type="hidden" name="GPAUniversity1Z" id="GPA1Z" value="<?php echo $__env->yieldContent('egpu1'); ?>" id="GPAUniversity1Z"/>

        <input type="hidden" name="education-grade2Z" id="grade2Z" value="<?php echo $__env->yieldContent('eg2'); ?>" id="education-grade2Z"/>
        <input type="hidden" name="educationFS2Z" id="FS2Z" value="<?php echo $__env->yieldContent('ef2'); ?>" id="educationFS2Z"/>
        <input type="hidden" name="educationAD2Z" id="AD2Z" value="<?php echo $__env->yieldContent('ea2'); ?>" id="educationAD2Z"/>
        <input type="hidden" name="educationUniversity2Z" id="University2Z" value="<?php echo $__env->yieldContent('eu2'); ?>" id="educationUniversity2Z"/>
        <input type="hidden" name="GPAUniversity2Z" id="GPA2Z" value="<?php echo $__env->yieldContent('egpu2'); ?>" id="GPAUniversity2Z"/>

        <!-- End input hidden -->

        <?php echo $__env->yieldContent('snow'); ?>

        <div class="form-group float-left m-1 m-md-3 mobile-input-90" style="min-width:187px;">

            <label for="grade[0]">مقطع تحصیلی<span class="text-danger">*</span></label>
            <select required class="form-control border-red" tabindex="18" id="grade0" name="education-grade0">
                <option value="" disabled="" selected="">انتخاب مقطع</option>
                <option id="g1" <?php echo e(old('education-grade0')=='زیر دیپلم' ? 'selected' : ''); ?> <?php echo e(@$section=='زیر دیپلم' ? 'selected' : ''); ?> value="زیر دیپلم">زیر دیپلم</option>
                <option id="g2[0]" <?php echo e(old('education-grade0')=='دیپلم' ? 'selected' : ''); ?> <?php echo e(@$section=='دیپلم' ? 'selected' : ''); ?> value="دیپلم">دیپلم</option>
                <option id="g3[0]" <?php echo e(old('education-grade0')=='فوق دیپلم' ? 'selected' : ''); ?> <?php echo e(@$section=='فوق دیپلم' ? 'selected' : ''); ?> value="فوق دیپلم">فوق دیپلم</option>
                <option id="g4[0]" <?php echo e(old('education-grade0')=='کارشناسی ناپیوسته' ? 'selected' : ''); ?> <?php echo e(@$section=='کارشناسی ناپیوسته' ? 'selected' : ''); ?> value="کارشناسی ناپیوسته">کارشناسی ناپیوسته</option>
                <option id="g5[0]" <?php echo e(old('education-grade0')=='کارشناسی پیوسته' ? 'selected' : ''); ?> <?php echo e(@$section=='کارشناسی پیوسته' ? 'selected' : ''); ?> value="کارشناسی پیوسته">کارشناسی پیوسته</option>
                <option id="g6[0]" <?php echo e(old('education-grade0')=='کارشناسی ارشد' ? 'selected' : ''); ?> <?php echo e(@$section=='کارشناسی ارشد' ? 'selected' : ''); ?> value="کارشناسی ارشد">کارشناسی ارشد</option>
                <option id="g7[0]" <?php echo e(old('education-grade0')=='دکتری' ? 'selected' : ''); ?> <?php echo e(@$section=='دکتری' ? 'selected' : ''); ?> value="دکتری">دکتری</option>
                
            </select>
        </div>

        <!-- رشته تحصیلی -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 170px;">
            <label for="FS0">رشته تحصیلی<span class="text-danger">*</span></label>
            <input type="text" name="educationFS0" id="FS0" list="FSlist[0]" value="<?php echo $__env->yieldContent('education_FS0'); ?>" tabindex="19" size="26"
                class="form-control border-red" required>
            <datalist id="FSlist[0]" class="fsl0" style="direction:rtl;">
                <?php $__currentLoopData = $gmajor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option style="direction:rtl;"><?php echo e($major); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>
        </div>


        <!-- گرایش تحصیلی -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 170px;">
            <label for="AD0">گرایش تحصیلی<span class="text-danger">*</span></label>
            <input type="text" name="educationAD0" id="AD0" tabindex="20" size="26" value="<?php echo $__env->yieldContent('education_AD0'); ?>" class="form-control border-red" required>
        </div>


        <!-- نام دانشگاه| موسسه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 170px;">
            <label for="university0" ><span id="unitype0">نام دانشگاه | موسسه</span><span class="text-danger">*</span></label>
            <input type="text" name="educationUniversity0" id="university0" value="<?php echo $__env->yieldContent('education_University0'); ?>" list="listUniversity[0]" tabindex="21"
                size="45" class="form-control border-red" required>
            <datalist id="listUniversity[0]" class="lu0" style="direction:rtl;">
                <?php $__currentLoopData = $guniversity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option style="direction:rtl;"><?php echo e($university); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>
        </div>

        <!-- معدل -->
        <div class="form-group float-left m-1 m-md-3 mobile-input">
            <label for="GPA0">معدل<span class="text-danger">*</span></label>
            <input type="text"  min="0" max="20" name="GPAUniversity0" id="GPA0" value="<?php echo $__env->yieldContent('GPA_University0'); ?>" pattern="^(?:1?\d(?:\.\d{1,2})?|20(?:\.0?0?)?)$" tabindex="22" size="7" maxlength="5"
                class="form-control border-red text-center" required>
        </div>


    </div>



</div>

<script async>
    $("#grade0").change(function () {
        var optionName = $("#grade0").val();
        if (optionName == "زیر دیپلم") {
            $("#unitype0").text("مدرسه");
        }
        if (optionName == "دیپلم") {
            $("#unitype0").text("دبیرستان | هنرستان");
        }
        if (optionName != "دیپلم" && optionName != "زیر دیپلم") {
            $("#unitype0").text("نام دانشگاه | موسسه");
        }
    });

</script>

<script src="<?php echo e(asset('js/cv.js')); ?>"></script>
<script src="<?php echo e(asset('js/add-e.js')); ?>"></script>
<script>

    $("#grade0").change(function () {
        $("#gradex0").text($("#grade0").val()); 
    });
    $("#FS0").change(function () {
        $("#fsx0").text($("#FS0").val()+" - "); 
    });
    $("#AD0").keyup(function () {
        $("#adx0").text($("#AD0").val()); 
    });
    $("#university0").change(function () {
        $("#universityx0").text($("#university0").val()); 
    });
    $("#GPA0").change(function () {
        $("#gpax0").text($("#GPA0").val()); 
        $("#gpax0").css('background-color','#5a0036');
    });




</script>



<?php /**PATH C:\xampp\mysite\resources\views/component/education.blade.php ENDPATH**/ ?>