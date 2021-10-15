<?php echo $__env->make('component.resumex.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex.gender', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex.birthdate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('component.resumex.call', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="d-flex m-5" style="position: relative;top: -35px;">
    <div class="p-2 flex-fill">
        <?php echo $__env->make('component.resumex.academic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="p-2 flex-fill">
            <?php echo $__env->make('component.resumex.cources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="p-2 flex-fill">
                <?php echo $__env->make('component.resumex.work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="d-flex m-5" style="position: relative;top: -75px;">
            <div class="p-2 flex-fill">
                <?php echo $__env->make('component.resumex.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('component.resumex.thesis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <div class="p-2 flex-fill">

                <?php echo $__env->make('component.resumex.project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </div>

        <?php echo $__env->make('component.resumex.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>


</div>
<script>
    $(document).ready(function () {
        $("#name").focus();
        $("#namex").text($("#name").val());
        $("#familyx").text($("#family").val());
        $("#jobx").text($("#job").val());

        $("#sexx").text($("#sex").val());
        var sextype = $("#sex").val();
        if (sextype == 'زن') {
            $("#MS0").css("display", "none");
            $("#MS1").css("display", "none");
            $("#MilitaryServicex").css("display", "none");
            $("#avatarx").attr("src", "<?php echo e(asset('img/avatar/woman.png')); ?>");
            $("#base-avatar").val("img/avatar/woman.png");
        }
        if (sextype == 'مرد') {
            $("#MS0").css("display", "inline-block");
            $("#MS1").css("display", "inline-block");
            $("#MilitaryServicex").css("display", "inline-block");
            $("#avatarx").attr("src", "<?php echo e(asset('img/avatar/man.png')); ?>");
            $("#base-avatar").val("img/avatar/man.png");
        }

        $("#descx").text($("#desc").val());

        if($("#birthday").val() != null)
        {
        $("#birthdayx").text("/" + $("#birthday").val());
        }
        if($("#month").val() != null)
        {
        $("#birthmonthx").text("/" + $("#month").val());
        }
        if($("#year").val() != '')
        {
        $("#birthyearx").text($("#year").val());
        }
        $("#maritalx").text($("#martial").val());
        $("#MilitaryServicex").text($("#MilitaryService").val());
        $("#cityx").text($("#city").val());
        if($("#pre").val() != '')
        {
        $("#prenumberx").text($("#pre").val() + "-");
        }
        $("#phonex").text($("#telephone").val());
        $("#mobilex").text($("#mobile").val());
        $("#emailx").text($("#email").val());
        $("#weblogx").text($("#weblog").val());
        if($("#instagram").val() != '')
        {
            $("#instagramx").text($("#instagram").val() + "@");
        }


        //education
        $("#gradex0").text($("#grade0").val());
        if($("#FS0").val() != ''){
        $("#fsx0").text($("#FS0").val() + " - ");
        }
        $("#adx0").text($("#AD0").val());
        $("#universityx0").text($("#university0").val());
        $("#gpax0").text($("#GPA0").val());
        if($("#GPA0").val() != ''){
        $("#gpax0").css('background-color', '#5a0036');
        }
        $("#gradex1").text($("#grade1Z").val());
        if($("#FS1").val() != '' && $("#FS1").val() != undefined){
        $("#fsx1").text($("#FS1Z").val() + " - ");
        }
        $("#adx1").text($("#AD1Z").val());
        $("#universityx1").text($("#University1Z").val());
        $("#gpax1").text($("#GPA1Z").val());
        if($("#GPA1").val() != '' && $("#GPA1").val() != undefined){
        $("#gpax1").css('background-color', '#5a0036');
        }
        $("#gradex2").text($("#grade2Z").val());
        if($("#FS2").val() != '' && $("#FS2").val() != undefined){
        $("#fsx2").text($("#FS2Z").val() + " - ");
        }
        $("#adx2").text($("#AD2Z").val());
        $("#universityx2").text($("#University2Z").val());
        $("#gpax2").text($("#GPA2Z").val());
        if($("#GPA2").val() != '' && $("#GPA2").val() != undefined){
        $("#gpax2").css('background-color', '#5a0036');
        }

        //language
        $("#langname0x").text($("#langName0").val());
    
        
        if($("#langReading0").val() == ''){
            $("#LR0Xx1").css('visibility', 'hidden');  
        }
        else{
            $("#LR0Xx1").css('visibility', 'visible');
        }

        var LR = $("#langReading0").val();
        for (i = 0; i <= LR; i++) {
            $("#LR0X" + i).addClass("bg-dark");
 
        }

        if($("#langWriting0").val() == ''){
            $("#LR0Xx2").css('visibility', 'hidden');  
        }
        else{
            $("#LR0Xx2").css('visibility', 'visible');
        }

        var LR = $("#langWriting0").val();
        for (i = 0; i <= LR; i++) {
            $("#LW0X" + i).addClass("bg-dark");
        }

        if($("#langSpeech0").val() == ''){
            $("#LR0Xx3").css('visibility', 'hidden');  
        }
        else{
            $("#LR0Xx3").css('visibility', 'visible');
        }

        var LR = $("#langSpeech0").val();
        for (i = 0; i <= LR; i++) {
            $("#LS0X" + i).addClass("bg-dark");

        }

        if($("#langListening0").val() == ''){
            $("#LR0Xx4").css('visibility', 'hidden');  
        }
        else{
            $("#LR0Xx4").css('visibility', 'visible');
        }

        var LR = $("#langListening0").val();
        for (i = 0; i <= LR; i++) {
            $("#LL0X" + i).addClass("bg-dark");
        }


    $("#langname1x").text($("#langName1Z").val());
    
        
    if($("#langReading1Z").val() == ''){
        $("#LR1Xx1").css('visibility', 'hidden');  
    }
    else{
        $("#LR1Xx1").css('visibility', 'hidden');
    }

    var LR = $("#langReading1Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LR1X" + i).addClass("bg-dark");

    }

    if($("#langWriting1Z").val() == ''){
        $("#LR1Xx2").css('visibility', 'hidden');  
    }
    else{
        $("#LR1Xx2").css('visibility', 'hidden');
    }

    var LR = $("#langWriting1Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LW1X" + i).addClass("bg-dark");
    }

    if($("#langSpeech1Z").val() == ''){
        $("#LR1Xx3").css('visibility', 'hidden');  
    }
    else{
        $("#LR1Xx3").css('visibility', 'hidden');
    }

    var LR = $("#langSpeech1Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LS1X" + i).addClass("bg-dark");

    }

    if($("#langListening1Z").val() == ''){
        $("#LR1Xx4").css('visibility', 'hidden');  
    }
    else{
        $("#LR1Xx4").css('visibility', 'hidden');
    }

    var LR = $("#langListening1Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LL1X" + i).addClass("bg-dark");
    }


    $("#langname2x").text($("#langName2Z").val());
    
        
    if($("#langReading2Z").val() == ''){
        $("#LR2Xx1").css('visibility', 'hidden');  
    }
    else{
        $("#LR2Xx1").css('visibility', 'hidden');
    }

    var LR = $("#langReading2Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LR2X" + i).addClass("bg-dark");

    }

    if($("#langWriting2Z").val() == ''){
        $("#LR2Xx2").css('visibility', 'hidden');  
    }
    else{
        $("#LR2Xx2").css('visibility', 'hidden');
    }

    var LR = $("#langWriting2Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LW2X" + i).addClass("bg-dark");
    }

    if($("#langSpeech2Z").val() == ''){
        $("#LR2Xx3").css('visibility', 'hidden');  
    }
    else{
        $("#LR2Xx3").css('visibility', 'hidden');
    }

    var LR = $("#langSpeech2Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LS2X" + i).addClass("bg-dark");

    }

    if($("#langListening2Z").val() == ''){
        $("#LR2Xx4").css('visibility', 'hidden');  
    }
    else{
        $("#LR2Xx4").css('visibility', 'hidden');
    }

    var LR = $("#langListening2Z").val();
    for (i = 0; i <= LR; i++) {
        $("#LL2X" + i).addClass("bg-dark");
    }

        

        //courses
        if($("#courcesType0").val() != '')
        {
        $("#CourceTypex0").text(" دوره " + $("#courcesType0").val() + " - ");
        }
        $("#CourceNamex0").text($("#courcesName0").val());
        $("#CourceYearx0").text($("#courcesYear0").val());
        if($("#courcesYear0").val() != '')
        {
        $("#CourceYearx0").css('background-color', '#120048');
        }
        $("#CourceInstitutex0").text($("#courcesInstitutionName0").val());

        if($("#courcesType1").val() != '' && $("#courcesType1").val() != undefined)
        {
        $("#CourceTypex1").text(" دوره " + $("#courcesType1Z").val() + " - ");
        }
        $("#CourceNamex1").text($("#courcesName1Z").val());
        $("#CourceYearx1").text($("#courcesYear1Z").val());
        if($("#courcesYear1").val() != '' && $("#courcesYear1").val() != undefined)
        {
        $("#CourceYearx1").css('background-color', '#120048');
        }
        $("#CourceInstitutex1").text($("#courcesInstitutionName1Z").val());

        if($("#courcesType2Z").val() != '' && $("#courcesType2").val() != undefined)
        {
        $("#CourceTypex2").text(" دوره " + $("#courcesType2Z").val() + " - ");
        }
        $("#CourceNamex2").text($("#courcesName2Z").val());
        $("#CourceYearx2").text($("#courcesYear2Z").val());
        if($("#courcesYear2").val() != '' && $("#courcesYear2").val() != undefined)
        {
        $("#CourceYearx2").css('background-color', '#120048');
        }
        $("#CourceInstitutex2").text($("#courcesInstitutionName2Z").val());


        //work
        $("#centername0").text($("#workCenter0").val());
        $("#workCenterx0").text($("#workCenter0").val());
        if($("#workPost0").val() != '' )
        {
        $("#workPostx0").text($("#workPost0").val() + " - ");
        }
        $("#workCooperatex0").text($("#workCooperate0").val());
        $("#workCenterTitlex0").text($("#workTitleCenter0").val());

        $("#centername1").text($("#workPost1Z").val());
        $("#workCenterx1").text($("#workCenter1Z").val());
        if($("#workPost1").val() != '' && $("#workPost1").val() != undefined)
        {
        $("#workPostx1").text($("#workPost1Z").val() + " - ");
        }
        $("#workCooperatex1").text($("#workCooperate1Z").val());
        $("#workCenterTitlex1").text($("#workTitleCenter1Z").val());

        $("#centername2").text($("#workCenter2Z").val());
        $("#workCenterx2").text($("#workCenter2Z").val());
        if($("#workPost2").val() != '' && $("#workPost2").val() != undefined)
        {
        $("#workPostx2").text($("#workPost2Z").val() + " - ");
        }
        $("#workCooperatex2").text($("#workCooperate2Z").val());
        $("#workCenterTitlex2").text($("#workTitleCenter2Z").val());

        //thesis
        $("#thesisDefenceDayx0").text($("#defensDate0").val());
        if($("#month0").val() != null){
            $("#thesisDefenceMonthx0").append($("#month0").val() + "/");
        }
        if($("#year0").val() != ''){
        $("#thesisDefenceYearx0").append($("#year0").val() + "/");
        }
        $("#thesisTitlex0").text($("#thesisTitle0").val());
        if($("#defensDate0").val() != null){
            $("#thesisDefenceTextx0").text("تاریخ دفاع: ");
        }
        $("#thesisTitlex1").text($("#thesisTitle1").val());
        if($("#defensDate1").val() != null){
        $("#thesisDefenceTextx1").text("تاریخ دفاع: ");
        }
        $("#thesisDefenceDayx1").text($("#defensDate1").val());
        if($("#month1").val() != null){
            $("#thesisDefenceMonthx1").append($("#month1").val() + "/");
        }
        if($("#year1").val() != ''){
            $("#thesisDefenceYearx1").append($("#year1").val() + "/");
        }


        //project
        $("#projectTitlex0").text($("#projecName0").val());
        if($("#projectStartMonth0").val() != null)
        {
            $("#textStartP0").text('شروع: ');
        }
        var PSM = $("#projectStartMonth0").val();
        if (PSM == 1) {
            $("#projectMEx0").text('فروردین');
        }
        if (PSM == 2) {
            $("#projectMEx0").text('اردیبهشت');
        }
        if (PSM == 3) {
            $("#projectMEx0").text('خرداد');
        }
        if (PSM == 4) {
            $("#projectMEx0").text('تیر');
        }
        if (PSM == 5) {
            $("#projectMEx0").text('مرداد');
        }
        if (PSM == 6) {
            $("#projectMEx0").text('شهریور');
        }
        if (PSM == 7) {
            $("#projectMEx0").text('مهر');
        }
        if (PSM == 8) {
            $("#projectMEx0").text('آبان');
        }
        if (PSM == 9) {
            $("#projectMEx0").text('آذر');
        }
        if (PSM == 10) {
            $("#projectMEx0").text('دی');
        }
        if (PSM == 11) {
            $("#projectMEx0").text('بهمن');
        }
        if (PSM == 12) {
            $("#projectMEx0").text('اسفند');
        }

        $("#projectYEx0").text($("#projectStartYear0").val());
        if($("#projectEndMonth0").val() != null)
        {
        $("#textEndP0").text('پایان: ');
        }
        var PEM = $("#projectEndMonth0").val();
        if (PEM == 1) {
            $("#projectMEEx0").text('فروردین');
        }
        if (PEM == 2) {
            $("#projectMEEx0").text('اردیبهشت');
        }
        if (PEM == 3) {
            $("#projectMEEx0").text('خرداد');
        }
        if (PEM == 4) {
            $("#projectMEEx0").text('تیر');
        }
        if (PEM == 5) {
            $("#projectMEEx0").text('مرداد');
        }
        if (PEM == 6) {
            $("#projectMEEx0").text('شهریور');
        }
        if (PEM == 7) {
            $("#projectMEEx0").text('مهر');
        }
        if (PEM == 8) {
            $("#projectMEEx0").text('آبان');
        }
        if (PEM == 9) {
            $("#projectMEEx0").text('آذر');
        }
        if (PEM == 10) {
            $("#projectMEEx0").text('دی');
        }
        if (PEM == 11) {
            $("#projectMEEx0").text('بهمن');
        }
        if (PEM == 12) {
            $("#projectMEEx0").text('اسفند');
        }
        $("#projectYEEx0").text($("#projectEndYear0").val());
        $("#ProjectEmployerx0").text($("#projectEmployer0").val());
        if($("#projectEmployer0").val() != '')
        {
            $("#EmployerText0").text('کارفرما :');
        }
        if($("#projectLink0").val() != '')
        {
        $("#ProjectLink0").text('لینک پروژه');
        }
        $("#ProjectLink0").attr("href", $("#projectLink0").val());



        $("#projectTitlex1").text($("#projecName1").val());
        if($("#projectStartMonth1").val() != null)
        {
            $("#textStartP1").text('شروع: ');
        }
        var PSM = $("#projectStartMonth1").val();
        if (PSM == 1) {
            $("#projectMEx1").text('فروردین');
        }
        if (PSM == 2) {
            $("#projectMEx1").text('اردیبهشت');
        }
        if (PSM == 3) {
            $("#projectMEx1").text('خرداد');
        }
        if (PSM == 4) {
            $("#projectMEx1").text('تیر');
        }
        if (PSM == 5) {
            $("#projectMEx1").text('مرداد');
        }
        if (PSM == 6) {
            $("#projectMEx1").text('شهریور');
        }
        if (PSM == 7) {
            $("#projectMEx1").text('مهر');
        }
        if (PSM == 8) {
            $("#projectMEx1").text('آبان');
        }
        if (PSM == 9) {
            $("#projectMEx1").text('آذر');
        }
        if (PSM == 10) {
            $("#projectMEx1").text('دی');
        }
        if (PSM == 11) {
            $("#projectMEx1").text('بهمن');
        }
        if (PSM == 12) {
            $("#projectMEx1").text('اسفند');
        }

        $("#projectYEx1").text($("#projectStartYear1").val());
        if($("#projectEndMonth1").val() != null)
        {
        $("#textEndP1").text('پایان: ');
        }
        var PEM = $("#projectEndMonth1").val();
        if (PEM == 1) {
            $("#projectMEEx1").text('فروردین');
        }
        if (PEM == 2) {
            $("#projectMEEx1").text('اردیبهشت');
        }
        if (PEM == 3) {
            $("#projectMEEx1").text('خرداد');
        }
        if (PEM == 4) {
            $("#projectMEEx1").text('تیر');
        }
        if (PEM == 5) {
            $("#projectMEEx1").text('مرداد');
        }
        if (PEM == 6) {
            $("#projectMEEx1").text('شهریور');
        }
        if (PEM == 7) {
            $("#projectMEEx1").text('مهر');
        }
        if (PEM == 8) {
            $("#projectMEEx1").text('آبان');
        }
        if (PEM == 9) {
            $("#projectMEEx1").text('آذر');
        }
        if (PEM == 10) {
            $("#projectMEEx1").text('دی');
        }
        if (PEM == 11) {
            $("#projectMEEx1").text('بهمن');
        }
        if (PEM == 12) {
            $("#projectMEEx1").text('اسفند');
        }
        $("#projectYEEx1").text($("#projectEndYear1").val());
        $("#ProjectEmployerx1").text($("#projectEmployer1").val());
        if($("#projectEmployer1").val() != '' && $("#projectEmployer3").val() != undefined)
        {
            $("#EmployerText1").text('کارفرما :');
        }
        if($("#projectLink1").val() != '' && $("#projectLink3").val() != undefined)
        {
            $("#ProjectLink1").text('لینک پروژه');
        }
        $("#ProjectLink1").attr("href", $("#projectLink1").val());


        
        $("#projectTitlex2").text($("#projecName2").val());
        if($("#projectStartMonth2").val() != null)
        {
            $("#textStartP2").text('شروع: ');
        }
        var PSM = $("#projectStartMonth2").val();
        if (PSM == 1) {
            $("#projectMEx2").text('فروردین');
        }
        if (PSM == 2) {
            $("#projectMEx2").text('اردیبهشت');
        }
        if (PSM == 3) {
            $("#projectMEx2").text('خرداد');
        }
        if (PSM == 4) {
            $("#projectMEx2").text('تیر');
        }
        if (PSM == 5) {
            $("#projectMEx2").text('مرداد');
        }
        if (PSM == 6) {
            $("#projectMEx2").text('شهریور');
        }
        if (PSM == 7) {
            $("#projectMEx2").text('مهر');
        }
        if (PSM == 8) {
            $("#projectMEx2").text('آبان');
        }
        if (PSM == 9) {
            $("#projectMEx2").text('آذر');
        }
        if (PSM == 10) {
            $("#projectMEx2").text('دی');
        }
        if (PSM == 11) {
            $("#projectMEx2").text('بهمن');
        }
        if (PSM == 12) {
            $("#projectMEx2").text('اسفند');
        }

        $("#projectYEx2").text($("#projectStartYear2").val());
        if($("#projectEndMonth2").val() != null)
        {
        $("#textEndP2").text('پایان: ');
        }
        var PEM = $("#projectEndMonth2").val();
        if (PEM == 1) {
            $("#projectMEEx2").text('فروردین');
        }
        if (PEM == 2) {
            $("#projectMEEx2").text('اردیبهشت');
        }
        if (PEM == 3) {
            $("#projectMEEx2").text('خرداد');
        }
        if (PEM == 4) {
            $("#projectMEEx2").text('تیر');
        }
        if (PEM == 5) {
            $("#projectMEEx2").text('مرداد');
        }
        if (PEM == 6) {
            $("#projectMEEx2").text('شهریور');
        }
        if (PEM == 7) {
            $("#projectMEEx2").text('مهر');
        }
        if (PEM == 8) {
            $("#projectMEEx2").text('آبان');
        }
        if (PEM == 9) {
            $("#projectMEEx2").text('آذر');
        }
        if (PEM == 10) {
            $("#projectMEEx2").text('دی');
        }
        if (PEM == 11) {
            $("#projectMEEx2").text('بهمن');
        }
        if (PEM == 12) {
            $("#projectMEEx2").text('اسفند');
        }
        $("#projectYEEx2").text($("#projectEndYear2").val());
        $("#ProjectEmployerx2").text($("#projectEmployer2").val());
        if($("#projectEmployer2").val() != '' && $("#projectEmployer3").val() != undefined)
        {
            $("#EmployerText2").text('کارفرما :');
        }
        if($("#projectLink2").val() != '' && $("#projectLink3").val() != undefined)
        {
        $("#ProjectLink2").text('لینک پروژه');
        }
        $("#ProjectLink2").attr("href", $("#projectLink2").val());



        $("#projectTitlex3").text($("#projecName3").val());
        if($("#projectStartMonth3").val() != null)
        {
            $("#textStartP3").text('شروع: ');
        }
        var PSM = $("#projectStartMonth3").val();
        if (PSM == 1) {
            $("#projectMEx3").text('فروردین');
        }
        if (PSM == 2) {
            $("#projectMEx3").text('اردیبهشت');
        }
        if (PSM == 3) {
            $("#projectMEx3").text('خرداد');
        }
        if (PSM == 4) {
            $("#projectMEx3").text('تیر');
        }
        if (PSM == 5) {
            $("#projectMEx3").text('مرداد');
        }
        if (PSM == 6) {
            $("#projectMEx3").text('شهریور');
        }
        if (PSM == 7) {
            $("#projectMEx3").text('مهر');
        }
        if (PSM == 8) {
            $("#projectMEx3").text('آبان');
        }
        if (PSM == 9) {
            $("#projectMEx3").text('آذر');
        }
        if (PSM == 10) {
            $("#projectMEx3").text('دی');
        }
        if (PSM == 11) {
            $("#projectMEx3").text('بهمن');
        }
        if (PSM == 12) {
            $("#projectMEx3").text('اسفند');
        }

        $("#projectYEx3").text($("#projectStartYear3").val());
        if($("#projectEndMonth3").val() != null)
        {
        $("#textEndP3").text('پایان: ');
        }
        var PEM = $("#projectEndMonth3").val();
        if (PEM == 1) {
            $("#projectMEEx3").text('فروردین');
        }
        if (PEM == 2) {
            $("#projectMEEx3").text('اردیبهشت');
        }
        if (PEM == 3) {
            $("#projectMEEx3").text('خرداد');
        }
        if (PEM == 4) {
            $("#projectMEEx3").text('تیر');
        }
        if (PEM == 5) {
            $("#projectMEEx3").text('مرداد');
        }
        if (PEM == 6) {
            $("#projectMEEx3").text('شهریور');
        }
        if (PEM == 7) {
            $("#projectMEEx3").text('مهر');
        }
        if (PEM == 8) {
            $("#projectMEEx3").text('آبان');
        }
        if (PEM == 9) {
            $("#projectMEEx3").text('آذر');
        }
        if (PEM == 10) {
            $("#projectMEEx3").text('دی');
        }
        if (PEM == 11) {
            $("#projectMEEx3").text('بهمن');
        }
        if (PEM == 12) {
            $("#projectMEEx3").text('اسفند');
        }
        $("#projectYEEx3").text($("#projectEndYear3").val());
        $("#ProjectEmployerx3").text($("#projectEmployer3").val());
        if($("#projectEmployer3").val() != '' && $("#projectEmployer3").val() != undefined)
        {
            $("#EmployerText3").text('کارفرما :');
        }
        if($("#projectLink3").val() != '' && $("#projectLink3").val() != undefined)
        {
        $("#ProjectLink3").text('لینک پروژه');
        }
        $("#ProjectLink3").attr("href", $("#projectLink3").val());


        //skills
        $("#textskills").text("مهارت‌های تجربی: ");
        $("#SkillTitlex0").text($("#skillsName0").val());
        if ($("#skillsLevel0").val() == "خیلی‌کم") {
            $("#SRx0x1").removeClass("bg-dark");
            $("#SRx0x2").removeClass("bg-dark");
            $("#SRx0x3").removeClass("bg-dark");
            $("#SRx0x4").removeClass("bg-dark");
            $("#SRx0x5").removeClass("bg-dark");
            $("#SkillRatingx0").css('visibility', 'visible');
            $("#SRx0x1").addClass("bg-dark");
        }
        if ($("#skillsLevel0").val() == "کم") {
            $("#SRx0x1").removeClass("bg-dark");
            $("#SRx0x2").removeClass("bg-dark");
            $("#SRx0x3").removeClass("bg-dark");
            $("#SRx0x4").removeClass("bg-dark");
            $("#SRx0x5").removeClass("bg-dark");
            $("#SkillRatingx0").css('visibility', 'visible');
            $("#SRx0x1").addClass("bg-dark");
            $("#SRx0x2").addClass("bg-dark");
        }
        if ($("#skillsLevel0").val() == "متوسط") {
            $("#SRx0x1").removeClass("bg-dark");
            $("#SRx0x2").removeClass("bg-dark");
            $("#SRx0x3").removeClass("bg-dark");
            $("#SRx0x4").removeClass("bg-dark");
            $("#SRx0x5").removeClass("bg-dark");
            $("#SkillRatingx0").css('visibility', 'visible');
            $("#SRx0x1").addClass("bg-dark");
            $("#SRx0x2").addClass("bg-dark");
            $("#SRx0x3").addClass("bg-dark");
        }
        if ($("#skillsLevel0").val() == "زیاد") {
            $("#SRx0x1").removeClass("bg-dark");
            $("#SRx0x2").removeClass("bg-dark");
            $("#SRx0x3").removeClass("bg-dark");
            $("#SRx0x4").removeClass("bg-dark");
            $("#SRx0x5").removeClass("bg-dark");
            $("#SkillRatingx0").css('visibility', 'visible');
            $("#SRx0x1").addClass("bg-dark");
            $("#SRx0x2").addClass("bg-dark");
            $("#SRx0x3").addClass("bg-dark");
            $("#SRx0x4").addClass("bg-dark");
        }
        if ($("#skillsLevel0").val() == "خیلی‌زیاد") {
            $("#SRx0x1").removeClass("bg-dark");
            $("#SRx0x2").removeClass("bg-dark");
            $("#SRx0x3").removeClass("bg-dark");
            $("#SRx0x4").removeClass("bg-dark");
            $("#SRx0x5").removeClass("bg-dark");
            $("#SkillRatingx0").css('visibility', 'visible');
            $("#SRx0x1").addClass("bg-dark");
            $("#SRx0x2").addClass("bg-dark");
            $("#SRx0x3").addClass("bg-dark");
            $("#SRx0x4").addClass("bg-dark");
            $("#SRx0x5").addClass("bg-dark");
        }


        $("#SkillTitlex1").text($("#skillsName1").val());
        if ($("#skillsLevel1").val() == "خیلی‌کم") {
            $("#SRx1x1").removeClass("bg-dark");
            $("#SRx1x2").removeClass("bg-dark");
            $("#SRx1x3").removeClass("bg-dark");
            $("#SRx1x4").removeClass("bg-dark");
            $("#SRx1x5").removeClass("bg-dark");
            $("#SkillRatingx1").css('visibility', 'visible');
            $("#SRx1x1").addClass("bg-dark");
        }
        if ($("#skillsLevel1").val() == "کم") {
            $("#SRx1x1").removeClass("bg-dark");
            $("#SRx1x2").removeClass("bg-dark");
            $("#SRx1x3").removeClass("bg-dark");
            $("#SRx1x4").removeClass("bg-dark");
            $("#SRx1x5").removeClass("bg-dark");
            $("#SkillRatingx1").css('visibility', 'visible');
            $("#SRx1x1").addClass("bg-dark");
            $("#SRx1x2").addClass("bg-dark");
        }
        if ($("#skillsLevel1").val() == "متوسط") {
            $("#SRx1x1").removeClass("bg-dark");
            $("#SRx1x2").removeClass("bg-dark");
            $("#SRx1x3").removeClass("bg-dark");
            $("#SRx1x4").removeClass("bg-dark");
            $("#SRx1x5").removeClass("bg-dark");
            $("#SkillRatingx1").css('visibility', 'visible');
            $("#SRx1x1").addClass("bg-dark");
            $("#SRx1x2").addClass("bg-dark");
            $("#SRx1x3").addClass("bg-dark");
        }
        if ($("#skillsLevel1").val() == "زیاد") {
            $("#SRx1x1").removeClass("bg-dark");
            $("#SRx1x2").removeClass("bg-dark");
            $("#SRx1x3").removeClass("bg-dark");
            $("#SRx1x4").removeClass("bg-dark");
            $("#SRx1x5").removeClass("bg-dark");
            $("#SkillRatingx1").css('visibility', 'visible');
            $("#SRx1x1").addClass("bg-dark");
            $("#SRx1x2").addClass("bg-dark");
            $("#SRx1x3").addClass("bg-dark");
            $("#SRx1x4").addClass("bg-dark");
        }
        if ($("#skillsLevel1").val() == "خیلی‌زیاد") {
            $("#SRx1x1").removeClass("bg-dark");
            $("#SRx1x2").removeClass("bg-dark");
            $("#SRx1x3").removeClass("bg-dark");
            $("#SRx1x4").removeClass("bg-dark");
            $("#SRx1x5").removeClass("bg-dark");
            $("#SkillRatingx1").css('visibility', 'visible');
            $("#SRx1x1").addClass("bg-dark");
            $("#SRx1x2").addClass("bg-dark");
            $("#SRx1x3").addClass("bg-dark");
            $("#SRx1x4").addClass("bg-dark");
            $("#SRx1x5").addClass("bg-dark");
        }


        $("#SkillTitlex2").text($("#skillsName2").val());
        if ($("#skillsLevel2").val() == "خیلی‌کم") {
            $("#SRx2x1").removeClass("bg-dark");
            $("#SRx2x2").removeClass("bg-dark");
            $("#SRx2x3").removeClass("bg-dark");
            $("#SRx2x4").removeClass("bg-dark");
            $("#SRx2x5").removeClass("bg-dark");
            $("#SkillRatingx2").css('visibility', 'visible');
            $("#SRx2x1").addClass("bg-dark");
        }
        if ($("#skillsLevel2").val() == "کم") {
            $("#SRx2x1").removeClass("bg-dark");
            $("#SRx2x2").removeClass("bg-dark");
            $("#SRx2x3").removeClass("bg-dark");
            $("#SRx2x4").removeClass("bg-dark");
            $("#SRx2x5").removeClass("bg-dark");
            $("#SkillRatingx2").css('visibility', 'visible');
            $("#SRx2x1").addClass("bg-dark");
            $("#SRx2x2").addClass("bg-dark");
        }
        if ($("#skillsLevel2").val() == "متوسط") {
            $("#SRx2x1").removeClass("bg-dark");
            $("#SRx2x2").removeClass("bg-dark");
            $("#SRx2x3").removeClass("bg-dark");
            $("#SRx2x4").removeClass("bg-dark");
            $("#SRx2x5").removeClass("bg-dark");
            $("#SkillRatingx2").css('visibility', 'visible');
            $("#SRx2x1").addClass("bg-dark");
            $("#SRx2x2").addClass("bg-dark");
            $("#SRx2x3").addClass("bg-dark");
        }
        if ($("#skillsLevel2").val() == "زیاد") {
            $("#SRx2x1").removeClass("bg-dark");
            $("#SRx2x2").removeClass("bg-dark");
            $("#SRx2x3").removeClass("bg-dark");
            $("#SRx2x4").removeClass("bg-dark");
            $("#SRx2x5").removeClass("bg-dark");
            $("#SkillRatingx2").css('visibility', 'visible');
            $("#SRx2x1").addClass("bg-dark");
            $("#SRx2x2").addClass("bg-dark");
            $("#SRx2x3").addClass("bg-dark");
            $("#SRx2x4").addClass("bg-dark");
        }
        if ($("#skillsLevel2").val() == "خیلی‌زیاد") {
            $("#SRx2x1").removeClass("bg-dark");
            $("#SRx2x2").removeClass("bg-dark");
            $("#SRx2x3").removeClass("bg-dark");
            $("#SRx2x4").removeClass("bg-dark");
            $("#SRx2x5").removeClass("bg-dark");
            $("#SkillRatingx2").css('visibility', 'visible');
            $("#SRx2x1").addClass("bg-dark");
            $("#SRx2x2").addClass("bg-dark");
            $("#SRx2x3").addClass("bg-dark");
            $("#SRx2x4").addClass("bg-dark");
            $("#SRx2x5").addClass("bg-dark");
        }

        $("#SkillTitlex3").text($("#skillsName3").val());
        if ($("#skillsLevel3").val() == "خیلی‌کم") {
            $("#SRx3x1").removeClass("bg-dark");
            $("#SRx3x2").removeClass("bg-dark");
            $("#SRx3x3").removeClass("bg-dark");
            $("#SRx3x4").removeClass("bg-dark");
            $("#SRx3x5").removeClass("bg-dark");
            $("#SkillRatingx3").css('visibility', 'visible');
            $("#SRx3x1").addClass("bg-dark");
        }
        if ($("#skillsLevel3").val() == "کم") {
            $("#SRx3x1").removeClass("bg-dark");
            $("#SRx3x2").removeClass("bg-dark");
            $("#SRx3x3").removeClass("bg-dark");
            $("#SRx3x4").removeClass("bg-dark");
            $("#SRx3x5").removeClass("bg-dark");
            $("#SkillRatingx3").css('visibility', 'visible');
            $("#SRx3x1").addClass("bg-dark");
            $("#SRx3x2").addClass("bg-dark");
        }
        if ($("#skillsLevel3").val() == "متوسط") {
            $("#SRx3x1").removeClass("bg-dark");
            $("#SRx3x2").removeClass("bg-dark");
            $("#SRx3x3").removeClass("bg-dark");
            $("#SRx3x4").removeClass("bg-dark");
            $("#SRx3x5").removeClass("bg-dark");
            $("#SkillRatingx3").css('visibility', 'visible');
            $("#SRx3x1").addClass("bg-dark");
            $("#SRx3x2").addClass("bg-dark");
            $("#SRx3x3").addClass("bg-dark");
        }
        if ($("#skillsLevel3").val() == "زیاد") {
            $("#SRx3x1").removeClass("bg-dark");
            $("#SRx3x2").removeClass("bg-dark");
            $("#SRx3x3").removeClass("bg-dark");
            $("#SRx3x4").removeClass("bg-dark");
            $("#SRx3x5").removeClass("bg-dark");
            $("#SkillRatingx3").css('visibility', 'visible');
            $("#SRx3x1").addClass("bg-dark");
            $("#SRx3x2").addClass("bg-dark");
            $("#SRx3x3").addClass("bg-dark");
            $("#SRx3x4").addClass("bg-dark");
        }
        if ($("#skillsLevel3").val() == "خیلی‌زیاد") {
            $("#SRx3x1").removeClass("bg-dark");
            $("#SRx3x2").removeClass("bg-dark");
            $("#SRx3x3").removeClass("bg-dark");
            $("#SRx3x4").removeClass("bg-dark");
            $("#SRx3x5").removeClass("bg-dark");
            $("#SkillRatingx3").css('visibility', 'visible');
            $("#SRx3x1").addClass("bg-dark");
            $("#SRx3x2").addClass("bg-dark");
            $("#SRx3x3").addClass("bg-dark");
            $("#SRx3x4").addClass("bg-dark");
            $("#SRx3x5").addClass("bg-dark");
        }


        $("#SkillTitlex4").text($("#skillsName4").val());
        if ($("#skillsLevel4").val() == "خیلی‌کم") {
            $("#SRx4x1").removeClass("bg-dark");
            $("#SRx4x2").removeClass("bg-dark");
            $("#SRx4x3").removeClass("bg-dark");
            $("#SRx4x4").removeClass("bg-dark");
            $("#SRx4x5").removeClass("bg-dark");
            $("#SkillRatingx4").css('visibility', 'visible');
            $("#SRx4x1").addClass("bg-dark");
        }
        if ($("#skillsLevel4").val() == "کم") {
            $("#SRx4x1").removeClass("bg-dark");
            $("#SRx4x2").removeClass("bg-dark");
            $("#SRx4x3").removeClass("bg-dark");
            $("#SRx4x4").removeClass("bg-dark");
            $("#SRx4x5").removeClass("bg-dark");
            $("#SkillRatingx4").css('visibility', 'visible');
            $("#SRx4x1").addClass("bg-dark");
            $("#SRx4x2").addClass("bg-dark");
        }
        if ($("#skillsLevel4").val() == "متوسط") {
            $("#SRx4x1").removeClass("bg-dark");
            $("#SRx4x2").removeClass("bg-dark");
            $("#SRx4x3").removeClass("bg-dark");
            $("#SRx4x4").removeClass("bg-dark");
            $("#SRx4x5").removeClass("bg-dark");
            $("#SkillRatingx4").css('visibility', 'visible');
            $("#SRx4x1").addClass("bg-dark");
            $("#SRx4x2").addClass("bg-dark");
            $("#SRx4x3").addClass("bg-dark");
        }
        if ($("#skillsLevel4").val() == "زیاد") {
            $("#SRx4x1").removeClass("bg-dark");
            $("#SRx4x2").removeClass("bg-dark");
            $("#SRx4x3").removeClass("bg-dark");
            $("#SRx4x4").removeClass("bg-dark");
            $("#SRx4x5").removeClass("bg-dark");
            $("#SkillRatingx4").css('visibility', 'visible');
            $("#SRx4x1").addClass("bg-dark");
            $("#SRx4x2").addClass("bg-dark");
            $("#SRx4x3").addClass("bg-dark");
            $("#SRx4x4").addClass("bg-dark");
        }
        if ($("#skillsLevel4").val() == "خیلی‌زیاد") {
            $("#SRx4x1").removeClass("bg-dark");
            $("#SRx4x2").removeClass("bg-dark");
            $("#SRx4x3").removeClass("bg-dark");
            $("#SRx4x4").removeClass("bg-dark");
            $("#SRx4x5").removeClass("bg-dark");
            $("#SkillRatingx4").css('visibility', 'visible');
            $("#SRx4x1").addClass("bg-dark");
            $("#SRx4x2").addClass("bg-dark");
            $("#SRx4x3").addClass("bg-dark");
            $("#SRx4x4").addClass("bg-dark");
            $("#SRx4x5").addClass("bg-dark");
        }

    });
</script><?php /**PATH /home/emzaapp1/mysite/resources/views/component/resume.blade.php ENDPATH**/ ?>