    <!-- دکمه اضافه -->
    <div class="form-group float-left" style="position: relative;right: 10px;top:18px;">
        <button type="button" class="btn rounded-circle position-relative border-purple" id="btn-add-lang" style="top:25px;background: #8c007b;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-plus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
    <!-- دکمه حذف -->
    <div class="form-group float-right" style="position: relative;right: -10px;top:18px;">
        <button type="button" class="btn rounded-circle position-relative border-purple" id="btn-remove-lang" style="top:25px;background: #8c007b;border:1px solid #840000;width:40px;height:40px;"><span class="glyphicon glyphicon-minus" style="font-family: 'Glyphicons Halflings' !important;position: relative;top: 4px;color: #fff;"></span></button>
    </div>
<h5 class="position-relative panel-title p-2 ml-5" style="<?php echo $__env->yieldContent('stylepanel-4'); ?>;top:0px;">مهارت زبان</h5>
        <!-- hidden input -->
        <input type="hidden" name="langName1Z" value="<?php echo $__env->yieldContent('ln1'); ?>" id="langName1Z"/>
        <input type="hidden" name="langReading1Z" value="<?php echo $__env->yieldContent('lr1'); ?>" id="langReading1Z"/>
        <input type="hidden" name="langWriting1Z" value="<?php echo $__env->yieldContent('lw1'); ?>" id="langWriting1Z"/>
        <input type="hidden" name="langSpeech1Z" value="<?php echo $__env->yieldContent('ls1'); ?>" id="langSpeech1Z"/>
        <input type="hidden" name="langListening1Z" value="<?php echo $__env->yieldContent('ll1'); ?>" id="langListening1Z"/>
        <input type="hidden" name="langName2Z" value="<?php echo $__env->yieldContent('ln2'); ?>" id="langName2Z"/>
        <input type="hidden" name="langReading2Z" value="<?php echo $__env->yieldContent('lr2'); ?>" id="langReading2Z"/>
        <input type="hidden" name="langWriting2Z" value="<?php echo $__env->yieldContent('lw2'); ?>" id="langWriting2Z"/>
        <input type="hidden" name="langSpeech2Z" value="<?php echo $__env->yieldContent('ls2'); ?>" id="langSpeech2Z"/>
        <input type="hidden" name="langListening2Z" value="<?php echo $__env->yieldContent('ll2'); ?>" id="langListening2Z"/>


        <!-- End input hidden -->
<div class="jumbotron w-100 border-2 p-xs-1 p-4 mb-6 br-4 shadow" id="divlang" style="<?php echo $__env->yieldContent('backpanel-4'); ?>">

    <div class="form-row mt28" id="formlang0">

        <!-- نام زبان -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
            <label for="langName0">نام زبان<span class="text-danger">*</span></label>
            <input type="text" name="langName0" list="langname0" id="langName0" value="<?php echo $__env->yieldContent('langName_0'); ?>" tabindex="33" size="20"  class="form-control border-purple" required>
            <datalist id="langname0">
                <?php $__currentLoopData = $glang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($lang); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>   
        </div>

        <!-- مهارت خواندن -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
                <label for="langReading0">مهارت خواندن<span class="text-danger">*</span></label>
                <select name="langReading0" id="langReading0" tabindex="34"  class="form-control border-purple" required>
                    <option selected value="">انتخاب کنید</option>
                    <option <?php echo e(old('langReading0')=='1' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangReadingskills=='1' ? 'selected' : ''); ?> value="1">خیلی کم</option>
                    <option <?php echo e(old('langReading0')=='2' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangReadingskills=='2' ? 'selected' : ''); ?> value="2">کم</option>
                    <option <?php echo e(old('langReading0')=='3' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangReadingskills=='3' ? 'selected' : ''); ?> value="3">متوسط</option>
                    <option <?php echo e(old('langReading0')=='4' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangReadingskills=='4' ? 'selected' : ''); ?> value="4">زیاد</option>
                    <option <?php echo e(old('langReading0')=='5' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangReadingskills=='5' ? 'selected' : ''); ?> value="5">خیلی زیاد</option>
            </select>
        </div>

        <!-- مهارت نوشتن -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
                <label for="langWriting0">مهارت نوشتن<span class="text-danger">*</span></label>
                <select name="langWriting0" id="langWriting0" tabindex="35"  class="form-control border-purple" required>
                    <option selected value="">انتخاب کنید</option>
                    <option <?php echo e(old('langWriting0')=='1' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangWritingskills=='1' ? 'selected' : ''); ?> value="1">خیلی کم</option>
                    <option <?php echo e(old('langWriting0')=='2' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangWritingskills=='2' ? 'selected' : ''); ?> value="2">کم</option>
                    <option <?php echo e(old('langWriting0')=='3' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangWritingskills=='3' ? 'selected' : ''); ?> value="3">متوسط</option>
                    <option <?php echo e(old('langWriting0')=='4' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangWritingskills=='4' ? 'selected' : ''); ?> value="4">زیاد</option>
                    <option <?php echo e(old('langWriting0')=='5' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangWritingskills=='5' ? 'selected' : ''); ?> value="5">خیلی زیاد</option>
            </select>
        </div>

        <!-- مهارت گفتاری -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
                <label for="langSpeech0">مهارت گفتاری<span class="text-danger">*</span></label>
                <select name="langSpeech0" id="langSpeech0" tabindex="36"  class="form-control border-purple" required>
                    <option selected value="">انتخاب کنید</option>
                    <option <?php echo e(old('langSpeech0')=='1' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangTalkingskills=='1' ? 'selected' : ''); ?> value="1">خیلی کم</option>
                    <option <?php echo e(old('langSpeech0')=='2' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangTalkingskills=='2' ? 'selected' : ''); ?> value="2">کم</option>
                    <option <?php echo e(old('langSpeech0')=='3' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangTalkingskills=='3' ? 'selected' : ''); ?> value="3">متوسط</option>
                    <option <?php echo e(old('langSpeech0')=='4' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangTalkingskills=='4' ? 'selected' : ''); ?> value="4">زیاد</option>
                    <option <?php echo e(old('langSpeech0')=='5' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangTalkingskills=='5' ? 'selected' : ''); ?> value="5">خیلی زیاد</option>
            </select>
        </div>

        <!-- مهارت شنیداری -->
        <div class="form-group float-left m-1 m-md-3 mobile-input" style="min-width: 220px;">
                <label for="langListening0">مهارت شنیداری<span class="text-danger">*</span></label>
                <select name="langListening0" id="langListening0" tabindex="37"  class="form-control border-purple" required>
                    <option selected value="">انتخاب کنید</option>
                    <option <?php echo e(old('langListening0')=='1' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangListeningskills=='1' ? 'selected' : ''); ?> value="1">خیلی کم</option>
                    <option <?php echo e(old('langListening0')=='2' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangListeningskills=='2' ? 'selected' : ''); ?> value="2">کم</option>
                    <option <?php echo e(old('langListening0')=='3' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangListeningskills=='3' ? 'selected' : ''); ?> value="3">متوسط</option>
                    <option <?php echo e(old('langListening0')=='4' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangListeningskills=='4' ? 'selected' : ''); ?> value="4">زیاد</option>
                    <option <?php echo e(old('langListening0')=='5' ? 'selected' : ''); ?> <?php echo e(@$getlang1->LangListeningskills=='5' ? 'selected' : ''); ?> value="5">خیلی زیاد</option>
            </select>
        </div>

    </div>
    

</div>
<script>

$("#langName0").change(function () {
    $("#langReading0").focus();
    $("#langname0x").text($("#langName0").val());
});

$("#langReading0").change(function () {
    $("#LR0X1").removeClass("bg-dark");
    $("#LR0X2").removeClass("bg-dark");
    $("#LR0X3").removeClass("bg-dark");
    $("#LR0X4").removeClass("bg-dark");
    $("#LR0X5").removeClass("bg-dark");

    $("#LR0Xx1").css('visibility','visible');
    $("#langWriting0").focus();
     var LR = $("#langReading0").val();
     for(i = 0;i <= LR ;i++)
     {
        $("#LR0X"+i).addClass("bg-dark");
     }
     
});

$("#langWriting0").change(function () {
    $("#LW0X1").removeClass("bg-dark");
    $("#LW0X2").removeClass("bg-dark");
    $("#LW0X3").removeClass("bg-dark");
    $("#LW0X4").removeClass("bg-dark");
    $("#LW0X5").removeClass("bg-dark");
    $("#LR0Xx2").css('visibility','visible');
    $("#langSpeech0").focus();
    var LR = $("#langWriting0").val();
     for(i = 0;i <= LR; i++)
     {
        $("#LW0X"+i).addClass("bg-dark");
     }
});

$("#langSpeech0").change(function () {
    $("#LS0X1").removeClass("bg-dark");
    $("#LS0X2").removeClass("bg-dark");
    $("#LS0X3").removeClass("bg-dark");
    $("#LS0X4").removeClass("bg-dark");
    $("#LS0X5").removeClass("bg-dark");
    $("#langListening0").focus();
    $("#LR0Xx3").css('visibility','visible');
    var LR = $("#langSpeech0").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LS0X"+i).addClass("bg-dark");
    }
});

$("#langListening0").change(function () {
    $("#LL0X1").removeClass("bg-dark");
    $("#LL0X2").removeClass("bg-dark");
    $("#LL0X3").removeClass("bg-dark");
    $("#LL0X4").removeClass("bg-dark");
    $("#LL0X5").removeClass("bg-dark");
    $("#langListening0").focus();
    $("#LR0Xx4").css('visibility','visible');
    var LR = $("#langListening0").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LL0X"+i).addClass("bg-dark");
    }
});

$("#langName1").change(function () {
    $("#langReading1").focus();
    $("#langname1x").text($("#langName1").val());
});

$("#langReading1").change(function () {
    $("#LR1X1").removeClass("bg-dark");
    $("#LR1X2").removeClass("bg-dark");
    $("#LR1X3").removeClass("bg-dark");
    $("#LR1X4").removeClass("bg-dark");
    $("#LR1X5").removeClass("bg-dark");

    $("#LR1Xx1").css('visibility','visible');
    $("#langWriting1").focus();
     var LR = $("#langReading1").val();
     for(i = 0;i <= LR ;i++)
     {
        $("#LR1X"+i).addClass("bg-dark");
     }
     
});

$("#langWriting1").change(function () {
    $("#LW1X1").removeClass("bg-dark");
    $("#LW1X2").removeClass("bg-dark");
    $("#LW1X3").removeClass("bg-dark");
    $("#LW1X4").removeClass("bg-dark");
    $("#LW1X5").removeClass("bg-dark");
    $("#LR1Xx2").css('visibility','visible');
    $("#langSpeech1").focus();
    var LR = $("#langWriting1").val();
     for(i = 0;i <= LR; i++)
     {
        $("#LW1X"+i).addClass("bg-dark");
     }
});

$("#langSpeech1").change(function () {
    $("#LS1X1").removeClass("bg-dark");
    $("#LS1X2").removeClass("bg-dark");
    $("#LS1X3").removeClass("bg-dark");
    $("#LS1X4").removeClass("bg-dark");
    $("#LS1X5").removeClass("bg-dark");
    $("#langListening1").focus();
    $("#LR1Xx3").css('visibility','visible');
    var LR = $("#langSpeech1").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LS1X"+i).addClass("bg-dark");
    }
});

$("#langListening1").change(function () {
    $("#LL1X1").removeClass("bg-dark");
    $("#LL1X2").removeClass("bg-dark");
    $("#LL1X3").removeClass("bg-dark");
    $("#LL1X4").removeClass("bg-dark");
    $("#LL1X5").removeClass("bg-dark");
    $("#langListening1").focus();
    $("#LR1Xx4").css('visibility','visible');
    var LR = $("#langListening1").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LL1X"+i).addClass("bg-dark");
    }
});


$("#langName2").change(function () {
    $("#langReading2").focus();
    $("#langname2x").text($("#langName2").val());
});

$("#langReading2").change(function () {
    $("#LR2X1").removeClass("bg-dark");
    $("#LR2X2").removeClass("bg-dark");
    $("#LR2X3").removeClass("bg-dark");
    $("#LR2X4").removeClass("bg-dark");
    $("#LR2X5").removeClass("bg-dark");

    $("#LR2Xx2").css('visibility','visible');
    $("#langWriting2").focus();
     var LR = $("#langReading2").val();
     for(i = 0;i <= LR ;i++)
     {
        $("#LR2X"+i).addClass("bg-dark");
     }
     
});

$("#langWriting2").change(function () {
    $("#LW2X1").removeClass("bg-dark");
    $("#LW2X2").removeClass("bg-dark");
    $("#LW2X3").removeClass("bg-dark");
    $("#LW2X4").removeClass("bg-dark");
    $("#LW2X5").removeClass("bg-dark");
    $("#LR2Xx2").css('visibility','visible');
    $("#langSpeech2").focus();
    var LR = $("#langWriting2").val();
     for(i = 0;i <= LR; i++)
     {
        $("#LW2X"+i).addClass("bg-dark");
     }
});

$("#langSpeech2").change(function () {
    $("#LS2X1").removeClass("bg-dark");
    $("#LS2X2").removeClass("bg-dark");
    $("#LS2X3").removeClass("bg-dark");
    $("#LS2X4").removeClass("bg-dark");
    $("#LS2X5").removeClass("bg-dark");
    $("#langListening2").focus();
    $("#LR2Xx3").css('visibility','visible');
    var LR = $("#langSpeech2").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LS2X"+i).addClass("bg-dark");
    }
});

$("#langListening2").change(function () {
    $("#LL2X1").removeClass("bg-dark");
    $("#LL2X2").removeClass("bg-dark");
    $("#LL2X3").removeClass("bg-dark");
    $("#LL2X4").removeClass("bg-dark");
    $("#LL2X5").removeClass("bg-dark");
    $("#langListening2").focus();
    $("#LR2Xx4").css('visibility','visible');
    var LR = $("#langListening2").val();
    for(i = 0;i <= LR; i++)
    {
        $("#LL2X"+i).addClass("bg-dark");
    }
});

</script>

<script src="<?php echo e(asset('js/add-l.js')); ?>"></script>

<?php /**PATH C:\xampp\mysite\resources\views/component/language.blade.php ENDPATH**/ ?>