    <!-- دکمه اضافه -->
    <div class="form-group float-left" style="position: relative;right: 10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-brown" id="btn-add-cources" style="top:25px;background: #8c5400;border:1px solid #8c5400;width:40px;height:40px;"><span class="glyphicon glyphicon-plus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <!-- دکمه حذف -->
    <div class="form-group float-right" style="position: relative;right: -10px;top:18px">
        <button type="button" class="btn rounded-circle position-relative border-brown" id="btn-remove-cources" style="top:25px;background: #8c5400;border:1px solid #8c5400;width:40px;height:40px;"><span class="glyphicon glyphicon-minus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
<h5 class="position-relative panel-title p-2" style="<?php echo $__env->yieldContent('stylepanel-5'); ?>;top:0px;">دوره‌های آموزشی</h5>   
<div class="jumbotron w-100 border-2 p-xs-1 p-5 mb-6 br-4 shadow" id="divcources" style="<?php echo $__env->yieldContent('backpanel-5'); ?>">
<h5 class="text-center" style="font-size: 14px !important;position: relative;top: -15px;color:#222;margin-right: 20px;margin-left: 20px;">برای نوشتن دوره‌های آموزشی ترتیب زمانی معکوس را رعایت کنید و از آخرین دوره آموزشی که داشتید یا دارید، شروع به نوشتن کنید.</h5>
        <!-- hidden input -->
        <input type="hidden" name="courcesType1Z" value="<?php echo $__env->yieldContent('ct1'); ?>" id="courcesType1Z"/>
        <input type="hidden" name="courcesName1Z" value="<?php echo $__env->yieldContent('cn1'); ?>" id="courcesName1Z"/>
        <input type="hidden" name="courcesYear1Z" value="<?php echo $__env->yieldContent('cy1'); ?>" id="courcesYear1Z"/>
        <input type="hidden" name="courcesInstitutionName1Z" value="<?php echo $__env->yieldContent('cin1'); ?>" id="courcesInstitutionName1Z"/>

        <input type="hidden" name="courcesType2Z" value="<?php echo $__env->yieldContent('ct2'); ?>" id="courcesType2Z"/>
        <input type="hidden" name="courcesName2Z" value="<?php echo $__env->yieldContent('cn2'); ?>" id="courcesName2Z"/>
        <input type="hidden" name="courcesYear2Z" value="<?php echo $__env->yieldContent('cy2'); ?>" id="courcesYear2Z"/>
        <input type="hidden" name="courcesInstitutionName2Z" value="<?php echo $__env->yieldContent('cin2'); ?>" id="courcesInstitutionName2Z"/>
        <!-- end hidden input -->
    <div class="form-row" id="formcources0">

        <!-- نوع دوره -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="courcesType0">نوع دوره<span class="text-danger">*</span></label>
            <input type="text" name="courcesType0" list="courcesTypedata0" id="courcesType0" tabindex="60" size="29" value="<?php echo $__env->yieldContent('cources_Type0'); ?>" class="form-control border-brown" required>
            <datalist id="courcesTypedata0">
                <?php $__currentLoopData = $getcources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cources): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option style="direction:rtl;"><?php echo e($cources); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>   
        </div>

        <!-- نام دوره -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="courcesName0">نام دوره<span class="text-danger">*</span></label>
            <input type="text" name="courcesName0"  id="courcesName0" tabindex="61" size="29" value="<?php echo $__env->yieldContent('cources_Name0'); ?>" class="form-control border-brown" required> 
        </div>

        <!-- سال برگزاری دوره  -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 170px;">
            <label for="courcesyYear0">سال برگزاری<span class="text-danger">*</span></label>
            <input type="text" name="courcesYear0" pattern="13[6-9]+[0-9]$" id="courcesYear0" value="<?php echo $__env->yieldContent('cources_Year0'); ?>" list="courcesYearData0" tabindex="62" size="7" maxlength="4"  class="form-control border-brown text-center" required>
            <datalist id="courcesYearData0">
                <?php $__currentLoopData = $getyear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option style="direction:rtl;"><?php echo e($year); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>   
        </div>

        <!-- نام موسسه -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 200px;">
            <label for="courcesInstitutionName0">نام موسسه<span class="text-danger">*</span></label>
            <input type="text" name="courcesInstitutionName0" id="courcesInstitutionName0" tabindex="63" size="31" value="<?php echo $__env->yieldContent('courcesInstitution_Name0'); ?>" class="form-control border-brown" required>
        </div>



    </div>
    <script>
        $("#courcesType0").change(function () {
            $("#CourceTypex0").text(" دوره "+ $("#courcesType0").val() + " - ");
            $("#courcesName0").focus();
        });
        $("#courcesName0").change(function () {
            $("#CourceNamex0").text($("#courcesName0").val()); 
        });
        $("#courcesYear0").change(function () {
            $("#courcesInstitutionName0").focus();
            $("#CourceYearx0").text($("#courcesYear0").val()); 
            $("#CourceYearx0").css('background-color','#120048');
        });
        $("#courcesInstitutionName0").change(function () {
            $("#CourceInstitutex0").text($("#courcesInstitutionName0").val()); 
        });

        $("#courcesType1").change(function () {
            $("#CourceTypex1").text(" دوره "+ $("#courcesType1").val() + " - ");
            $("#courcesName1").focus();
        });
        $("#courcesName1").change(function () {
            $("#CourceNamex1").text($("#courcesName1").val()); 
        });
        $("#courcesYear1").change(function () {
            $("#courcesInstitutionName1").focus();
            $("#CourceYearx1").text($("#courcesYear1").val()); 
            $("#CourceYearx1").css('background-color','#120048');
        });
        $("#courcesInstitutionName1").change(function () {
            $("#CourceInstitutex1").text($("#courcesInstitutionName1").val()); 
        });

        
        $("#courcesType2").change(function () {
            $("#CourceTypex2").text(" دوره "+ $("#courcesType2").val() + " - ");
            $("#courcesName2").focus();
        });
        $("#courcesName2").change(function () {
            $("#CourceNamex2").text($("#courcesName2").val()); 
        });
        $("#courcesYear2").change(function () {
            $("#courcesInstitutionName2").focus();
            $("#CourceYearx2").text($("#courcesYear2").val()); 
            $("#CourceYearx2").css('background-color','#120048');
        });
        $("#courcesInstitutionName2").change(function () {
            $("#CourceInstitutex2").text($("#courcesInstitutionName2").val()); 
        });
    </script>
    <script src="<?php echo e(asset('js/add-c.js')); ?>"></script>


</div><?php /**PATH /home/emzaapp1/mysite/resources/views/component/courses.blade.php ENDPATH**/ ?>