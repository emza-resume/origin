<?php $__env->startSection('formName'); ?>
UodateCVForm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actionPath'); ?>
/update-resume
<?php $__env->stopSection(); ?>

<?php $__env->startSection('s-title'); ?>
فرم ویرایش رزومه سریع فارسی
<?php $__env->stopSection(); ?>

<?php $__env->startSection('button-title'); ?>
&nbsp; به روزرسانی اطلاعات
<?php $__env->stopSection(); ?>

<?php $__env->startSection('button-icon'); ?>
<?php echo e(asset('img/update.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-1'); ?>
background-color: #ecfff7;
border-color:#00864e !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-2'); ?>
background-color: #ffecec;
border-color:#840000 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-3'); ?>
background-color: #edecff;
border-color:#0400ff !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-4'); ?>
background-color: #fdecff;
border-color:#8c007b !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-5'); ?>
background-color: #fff6ec;
border-color:#8c5400 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-6'); ?>
background-color: #ecfffa;
border-color:#008c86 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-7'); ?>
background-color: #ecf2ff;
border-color:#0027e8 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-8'); ?>
background-color: #ecdbff;
border-color: #320069 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backpanel-9'); ?>
background-color: #ffe8dd;
border-color: #9c3200 !important;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('batch'); ?>
<?php echo e($getbases->BaseBatch); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_name'); ?>
<?php echo e($getbases->BaseName); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sec_avatar'); ?>
<?php echo e($getbases->BaseAvatar); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_family'); ?>
<?php echo e($getbases->BaseFamily); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_work'); ?>
<?php echo e($getbases->BaseWorkTitle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_city'); ?>
<?php echo e($getbases_b->BaseCity); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_mobile'); ?>
<?php echo e($getbases->BaseMobile); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_pre_number_country'); ?>
<?php if($getbases_b->BaseCountry == 'ایران'): ?>
98+
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_birthday'); ?>
<?php echo e($day); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_month_birth'); ?>
<?php echo e($month); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_year_birth'); ?>
<?php echo e($year); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_telephone'); ?>
<?php echo e($tel); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_sex'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_pre'); ?>
<?php echo e($pretel); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_email'); ?>
<?php echo e($getbases->BaseEmail); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_weblog'); ?>
<?php echo e($getbases_b->BaseWeblog); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_instagram'); ?>
<?php echo e($getbases_b->BaseSocial); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('base_desc'); ?>
<?php echo e($getbases_b->BaseSummary); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cources_Type0'); ?>
<?php echo e($getcourse1->CoursesType); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cources_Name0'); ?>
<?php echo e($getcourse1->CoursesTitle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cources_Year0'); ?>
<?php echo e($getcourse1->CoursesDate); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('courcesInstitution_Name0'); ?>
<?php echo e($getcourse1->CoursesInstitute); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('snow'); ?>
        <!-- در حال تحصیل -->
        <div class="form-group float-left m-1 m-md-3" style="min-width:0px;position: relative;top: 30px;margin-left: 0px !important;margin-right: 0px !important;">
            <input type="checkbox" <?php if($getedus->EduNow == 'on'): ?> checked <?php endif; ?> class="custom-control custom-checkbox" title="در حال تحصیل" name="education-now" id="education-now">
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('education_FS0'); ?>
<?php echo e($getedus->EduMajor); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('education_AD0'); ?>
<?php echo e($getedus->EduOrientation); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('education_University0'); ?>
<?php echo e($getedus->EduLnstitute); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('GPA_University0'); ?>
<?php echo e($getedus->EduAverage); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('langName_0'); ?>
<?php echo e($getlang1->LangName); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('workPost_0'); ?>
<?php echo e($getwork1->WorkPost); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('workTitleCenter_0'); ?>
<?php echo e($getwork1->WorkTitleCenter); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('projectName0'); ?>
<?php echo e($getproject1->ProjectTitle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('projectStartYear_0'); ?>
<?php echo e($projectyearstart); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('projectEndYear_0'); ?>
<?php echo e($projectyearend); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('projectEmployer_0'); ?>
<?php echo e($getproject1->ProjectEmployer); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('projectLink_0'); ?>
<?php echo e($getproject1->ProjectLink); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('thesisTitle_0'); ?>
<?php echo e($getthesis1->ArticlesTitle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('year_0'); ?>
<?php echo e($yeart1); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('thesisTitle_1'); ?>
<?php echo e($getthesis2->ArticlesTitle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('year_1'); ?>
<?php echo e($yeart2); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('skillsName_0'); ?>
<?php echo e($getskill1->SkillsName); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('eg1'); ?>
<?php echo e($getedus2->EduSection); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ef1'); ?>
<?php echo e($getedus2->EduMajor); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ea1'); ?>
<?php echo e($getedus2->EduOrientation); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('eu1'); ?>
<?php echo e($getedus2->EduLnstitute); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('egpu1'); ?>
<?php echo e($getedus2->EduAverage); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('eg2'); ?>
<?php echo e($getedus3->EduSection); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ef2'); ?>
<?php echo e($getedus3->EduMajor); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ea2'); ?>
<?php echo e($getedus3->EduOrientation); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('eu2'); ?>
<?php echo e($getedus3->EduLnstitute); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('egpu2'); ?>
<?php echo e($getedus3->EduAverage); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <?php for($i=0;$i<$s_n;$i++): ?>
    $("#btn-add-edu").click();

    var section2 = '<?php echo e($getedus2->EduSection); ?>';
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

    var section3 = '<?php echo e($getedus3->EduSection); ?>';
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

    <?php endfor; ?>



    $("#FS1").val('<?php echo e($getedus2->EduMajor); ?>');
    $("#AD1").val('<?php echo e($getedus2->EduOrientation); ?>');
    $("#university1").val('<?php echo e($getedus2->EduLnstitute); ?>');
    $("#GPA1").val('<?php echo e($getedus2->EduAverage); ?>');
    $("#FS2").val('<?php echo e($getedus3->EduMajor); ?>');
    $("#AD2").val('<?php echo e($getedus3->EduOrientation); ?>');
    $("#university2").val('<?php echo e($getedus3->EduLnstitute); ?>');
    $("#GPA2").val('<?php echo e($getedus3->EduAverage); ?>');
    

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
            $("#avatarxx").attr("src","<?php echo e(asset('img/avatar/woman.png')); ?>");
        }
        if(sexS == 2 && $("#sex").val() == 'مرد')
        {
            $("#avatar").val('<?php echo e($getbases->BaseAvatar); ?>');
            $("#avatarxx").attr("src","<?php echo e(asset($getbases->BaseAvatar)); ?>");
        }
        if(sexS == 1 && $("#sex").val() == 'زن')
        {
            $("#avatar").val('<?php echo e($getbases->BaseAvatar); ?>');
            $("#avatarxx").attr("src","<?php echo e(asset($getbases->BaseAvatar)); ?>");
        }
        if(sexS == 1 && $("#sex").val() == 'مرد')
        {
            $("#avatar").val('img/avatar/man.png');
            $("#avatarxx").attr("src","<?php echo e(asset('img/avatar/man.png')); ?>");
        }
    });
    $("#avatar").val('<?php echo e($getbases->BaseAvatar); ?>');
    $("#avatarxx").attr("src","<?php echo e(asset($getbases->BaseAvatar)); ?>");

    <?php for($i=0;$i<$l_n;$i++): ?>
    $("#btn-add-lang").click();
    
    var reading2 = '<?php echo e($getlang2->LangReadingskills); ?>';
    
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


    var writing2 = '<?php echo e($getlang2->LangWritingskills); ?>';
    
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

    var talking2 = '<?php echo e($getlang2->LangTalkingskills); ?>';
    
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

    var lisining2 = '<?php echo e($getlang2->LangListeningskills); ?>';
    
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



    $("#langName"+<?php echo e($i+1); ?>).val('<?php echo e($getlang2->LangName); ?>');


    var reading3 = '<?php echo e($getlang3->LangReadingskills); ?>';
    
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

    var writing3 = '<?php echo e($getlang3->LangWritingskills); ?>';
    
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

    var talking3 = '<?php echo e($getlang3->LangTalkingskills); ?>';
    
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

    <?php $__env->startSection('ln1'); ?>
    <?php echo e($getlang2->LangName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('lr1'); ?>
    <?php echo e($getlang2->LangReadingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('lw1'); ?>
    <?php echo e($getlang2->LangWritingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ls1'); ?>
    <?php echo e($getlang2->LangTalkingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ll1'); ?>
    <?php echo e($getlang2->LangListeningskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ln2'); ?>
    <?php echo e($getlang3->LangName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('lr2'); ?>
    <?php echo e($getlang3->LangReadingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('lw2'); ?>
    <?php echo e($getlang3->LangWritingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ls2'); ?>
    <?php echo e($getlang3->LangTalkingskills); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ll2'); ?>
    <?php echo e($getlang3->LangListeningskills); ?>

    <?php $__env->stopSection(); ?>


    var lisining3 = '<?php echo e($getlang3->LangListeningskills); ?>';
    
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

    $("#langName2").val('<?php echo e($getlang3->LangName); ?>');

    <?php endfor; ?>

    <!-- //work get value -->
    <?php for($i=0;$i<$w_n;$i++): ?>
    $("#btn-add-work").click();
    <?php endfor; ?>
    $("#workPost1").val('<?php echo e($getwork2->WorkPost); ?>');
    $("#workTitleCenter1").val('<?php echo e($getwork2->WorkTitleCenter); ?>');
    var workcenter2 = '<?php echo e($getwork2->WorkCenter); ?>';
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
    var WorkCooperation2 = '<?php echo e($getwork2->WorkCooperation); ?>';
    if(WorkCooperation2 == 'تمام‌وقت'){$("#wo11").attr("selected","selected");}
    if(WorkCooperation2 == 'پاره‌وقت'){$("#wo21").attr("selected","selected");}
    if(WorkCooperation2 == 'پروژه‌ای'){$("#wo31").attr("selected","selected");}
    if(WorkCooperation2 == 'ساعتی'){$("#wo41").attr("selected","selected");}
    if(WorkCooperation2 == 'دورکاری'){$("#wo51").attr("selected","selected");}
    if(WorkCooperation2 == 'کارآموزی'){$("#wo61").attr("selected","selected");}

    $("#workPost2").val('<?php echo e($getwork3->WorkPost); ?>');
    $("#workTitleCenter2").val('<?php echo e($getwork3->WorkTitleCenter); ?>');
    var workcenter3 = '<?php echo e($getwork3->WorkCenter); ?>';
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
    var WorkCooperation3 = '<?php echo e($getwork3->WorkCooperation); ?>';
    if(WorkCooperation3 == 'تمام‌وقت'){$("#wo12").attr("selected","selected");}
    if(WorkCooperation3 == 'پاره‌وقت'){$("#wo22").attr("selected","selected");}
    if(WorkCooperation3 == 'پروژه‌ای'){$("#wo32").attr("selected","selected");}
    if(WorkCooperation3 == 'ساعتی'){$("#wo42").attr("selected","selected");}
    if(WorkCooperation3 == 'دورکاری'){$("#wo52").attr("selected","selected");}
    if(WorkCooperation3 == 'کارآموزی'){$("#wo62").attr("selected","selected");}


    <?php $__env->startSection('wp1'); ?>
        <?php echo e($getwork2->WorkPost); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wc1'); ?>
        <?php echo e($getwork2->WorkCenter); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wt1'); ?>
        <?php echo e($getwork2->WorkTitleCenter); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wo1'); ?>
        <?php echo e($getwork2->WorkCooperation); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wp2'); ?>
        <?php echo e($getwork3->WorkPost); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wc2'); ?>
        <?php echo e($getwork3->WorkCenter); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wt2'); ?>
        <?php echo e($getwork3->WorkTitleCenter); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('wo2'); ?>
        <?php echo e($getwork3->WorkCooperation); ?>

    <?php $__env->stopSection(); ?>


    <!-- //cource get value -->
    <?php for($i=0;$i<$c_n;$i++): ?>
    $("#btn-add-cources").click();
    <?php endfor; ?>
    $("#courcesType1").val('<?php echo e($getcourse2->CoursesType); ?>');
    $("#courcesName1").val('<?php echo e($getcourse2->CoursesTitle); ?>');
    $("#courcesInstitutionName1").val('<?php echo e($getcourse2->CoursesInstitute); ?>');
    $("#courcesYear1").val('<?php echo e($getcourse2->CoursesDate); ?>');
    $("#courcesType2").val('<?php echo e($getcourse3->CoursesType); ?>');
    $("#courcesName2").val('<?php echo e($getcourse3->CoursesTitle); ?>');
    $("#courcesInstitutionName2").val('<?php echo e($getcourse3->CoursesInstitute); ?>');
    $("#courcesYear2").val('<?php echo e($getcourse3->CoursesDate); ?>');

    <!-- //project get value -->
    <?php for($i=0;$i<$p_n;$i++): ?>
    $("#btn-add-project").click();
    <?php endfor; ?>

    $("#projecName1").val('<?php echo e($getproject2->ProjectTitle); ?>');
    $("#projecName2").val('<?php echo e($getproject3->ProjectTitle); ?>');
    $("#projecName3").val('<?php echo e($getproject4->ProjectTitle); ?>');

    
    $("#projectStartYear1").val('<?php echo e($projectyearstart2); ?>');
    $("#projectStartYear2").val('<?php echo e($projectyearstart3); ?>');
    $("#projectStartYear3").val('<?php echo e($projectyearstart4); ?>');

    $("#projectEndYear1").val('<?php echo e($projectyearend2); ?>');
    $("#projectEndYear2").val('<?php echo e($projectyearend3); ?>');
    $("#projectEndYear3").val('<?php echo e($projectyearend4); ?>');

    $("#projectEmployer1").val('<?php echo e($getproject2->ProjectEmployer); ?>');
    $("#projectEmployer2").val('<?php echo e($getproject3->ProjectEmployer); ?>');
    $("#projectEmployer3").val('<?php echo e($getproject4->ProjectEmployer); ?>');

    $("#projectLink1").val('<?php echo e($getproject2->ProjectLink); ?>');
    $("#projectLink2").val('<?php echo e($getproject3->ProjectLink); ?>');
    $("#projectLink3").val('<?php echo e($getproject4->ProjectLink); ?>');

    var projectStartMount = '<?php echo e($projectmonthstart2); ?>';
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

    var projectStartMount = '<?php echo e($projectmonthstart3); ?>';
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


    var projectStartMount = '<?php echo e($projectmonthstart4); ?>';
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

    var projectEndMount = '<?php echo e($projectmonthend2); ?>';
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

    var projectEndMount3 = '<?php echo e($projectmonthend3); ?>';
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

    var projectEndMount4 = '<?php echo e($projectmonthend4); ?>';
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

    <?php $__env->startSection('pn1'); ?>
    <?php echo e($getproject2->ProjectTitle); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psm1'); ?>
    <?php echo e($projectmonthstart2); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psy1'); ?>
    <?php echo e($projectyearstart2); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pem1'); ?>
    <?php echo e($projectmonthend2); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pey1'); ?>
    <?php echo e($projectyearend2); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pe1'); ?>
    <?php echo e($getproject2->ProjectEmployer); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pl1'); ?>
    <?php echo e($getproject2->ProjectLink); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pn2'); ?>
    <?php echo e($getproject3->ProjectTitle); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psm2'); ?>
    <?php echo e($projectmonthstart3); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psy2'); ?>
    <?php echo e($projectyearstart3); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pem2'); ?>
    <?php echo e($projectmonthend3); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pey2'); ?>
    <?php echo e($projectyearend3); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pe2'); ?>
    <?php echo e($getproject3->ProjectEmployer); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pl2'); ?>
    <?php echo e($getproject3->ProjectLink); ?>

    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('pn3'); ?>
    <?php echo e($getproject4->ProjectTitle); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psm3'); ?>
    <?php echo e($projectmonthstart4); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('psy3'); ?>
    <?php echo e($projectyearstart4); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pem3'); ?>
    <?php echo e($projectmonthend4); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pey3'); ?>
    <?php echo e($projectyearend4); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pe3'); ?>
    <?php echo e($getproject4->ProjectEmployer); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pl3'); ?>
    <?php echo e($getproject4->ProjectLink); ?>

    <?php $__env->stopSection(); ?>

    <!-- //skill get value -->
    <?php for($i=0;$i<$ss_n;$i++): ?>
    $("#btn-add-skills").click();
    <?php endfor; ?>

    $("#skillsName1").val('<?php echo e($getskill2->SkillsName); ?>');
    $("#skillsName2").val('<?php echo e($getskill3->SkillsName); ?>');
    $("#skillsName3").val('<?php echo e($getskill4->SkillsName); ?>');
    $("#skillsName4").val('<?php echo e($getskill5->SkillsName); ?>');

    var skillName2 = '<?php echo e($getskill2->SkillsLevel); ?>';
    if(skillName2 == 'خیلی‌کم'){ $("#ss11").attr("selected","selected"); }
    if(skillName2 == '‌کم'){ $("#ss21").attr("selected","selected"); }
    if(skillName2 == 'متوسط'){ $("#ss31").attr("selected","selected"); }
    if(skillName2 == 'زیاد'){ $("#ss41").attr("selected","selected"); }
    if(skillName2 == 'خیلی‌زیاد'){ $("#ss51").attr("selected","selected"); }

    var skillName3 = '<?php echo e($getskill3->SkillsLevel); ?>';
    if(skillName3 == 'خیلی‌کم'){ $("#ss12").attr("selected","selected"); }
    if(skillName3 == '‌کم'){ $("#ss22").attr("selected","selected"); }
    if(skillName3 == 'متوسط'){ $("#ss32").attr("selected","selected"); }
    if(skillName3 == 'زیاد'){ $("#ss42").attr("selected","selected"); }
    if(skillName3 == 'خیلی‌زیاد'){ $("#ss52").attr("selected","selected"); }

    var skillName4 = '<?php echo e($getskill4->SkillsLevel); ?>';
    if(skillName4 == 'خیلی‌کم'){ $("#ss13").attr("selected","selected"); }
    if(skillName4 == '‌کم'){ $("#ss23").attr("selected","selected"); }
    if(skillName4 == 'متوسط'){ $("#ss33").attr("selected","selected"); }
    if(skillName4 == 'زیاد'){ $("#ss43").attr("selected","selected"); }
    if(skillName4 == 'خیلی‌زیاد'){ $("#ss53").attr("selected","selected"); }

    var skillName5 = '<?php echo e($getskill5->SkillsLevel); ?>';
    if(skillName5 == 'خیلی‌کم'){ $("#ss14").attr("selected","selected"); }
    if(skillName5 == '‌کم'){ $("#ss24").attr("selected","selected"); }
    if(skillName5 == 'متوسط'){ $("#ss34").attr("selected","selected"); }
    if(skillName5 == 'زیاد'){ $("#ss44").attr("selected","selected"); }
    if(skillName5 == 'خیلی‌زیاد'){ $("#ss54").attr("selected","selected"); }

    <?php $__env->startSection('ct1'); ?>
        <?php echo e($getcourse2->CoursesType); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cn1'); ?>
        <?php echo e($getcourse2->CoursesTitle); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cy1'); ?>
        <?php echo e($getcourse2->CoursesDate); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cin1'); ?>
        <?php echo e($getcourse2->CoursesInstitute); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('ct2'); ?>
        <?php echo e($getcourse3->CoursesType); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cn2'); ?>
        <?php echo e($getcourse3->CoursesTitle); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cy2'); ?>
        <?php echo e($getcourse3->CoursesDate); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('cin2'); ?>
        <?php echo e($getcourse3->CoursesInstitute); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sn1'); ?>
        <?php echo e($getskill2->SkillsName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sl1'); ?>
        <?php echo e($getskill2->SkillsLevel); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sn2'); ?>
    <?php echo e($getskill3->SkillsName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sl2'); ?>
    <?php echo e($getskill3->SkillsLevel); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sn3'); ?>
    <?php echo e($getskill4->SkillsName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sl3'); ?>
    <?php echo e($getskill4->SkillsLevel); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sn4'); ?>
    <?php echo e($getskill5->SkillsName); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sl4'); ?>
    <?php echo e($getskill5->SkillsLevel); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('component.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/cv/ecv.blade.php ENDPATH**/ ?>