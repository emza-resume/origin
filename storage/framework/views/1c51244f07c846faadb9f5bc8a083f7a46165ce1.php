<table align="center" cellspacing="20" style="width:21cm;height:29cm;background:#fafafa;background-size:cover;border-top: 3px solid #cecece;border-bottom: 3px solid #cecece;border-right: 3px solid #443782;border-left: 3px solid #cecece;">
    <tr>
        <td style="background: #cecece;border-left: 3px solid #fafafa;">
            <table style="height:200px;width:100%;background:#cecece;border:3px solid #cecece;height:200px;background:#cecece;border:3px solid #cecece;padding-top: 0px;position: relative;top: -3px;left: 1px;" class="py-2">
                <tr style="">
                    <td valign="top" class="" style="">

                        <p align="center"><img src="<?php echo e(asset($getbases->BaseAvatar)); ?>" style="margin-top: 17px;" alt="آواتار" width="180" height="180" class="mx-auto rounded-circle shadow"></p>
                        <p class="text-center" style="color:black;font-size:20px;font-weight:bold"><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></p>
                        <p class="text-center" style="color:black;font-size:16px;font-weight:bold"><?php echo e($getbases->BaseWorkTitle); ?></p>
                        <hr>
                        <p class="text-center" style="color:black;font-size:12px;color:#222;font-weight:bold;">تاریخ تولد: <?php echo e($getbases->BaseBirthdate); ?></p>
                        <p class="text-center" style="color:black;font-size:12px;color:#222;font-weight:bold;">سن: <?php echo e($old); ?> سال</p>
                        <p class="text-center" style="color:black;font-size:12px;color:#222;font-weight:bold;">وضعیت تاهل: <?php echo e($getbases->BaseMarital); ?></p>
                        <p class="text-center" style="color:black;font-size:12px;color:#222;font-weight:bold;">وضعیت سربازی: <?php echo e($getbases->BaseSolider); ?></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table style="height:100%;width:100%;background:#fafafa">
                <tr>
                    <td align="center" valign="top">
                        <p align="center">
                            <div class="text-center p-3 my-4 position-relative;" style="background:#e2e3e5;width:104%;color:#777;font-size:19px;position:relative;left:19px;font-weight:bold">
                                <img src="<?php echo e(asset('img/icons/mortarboard.svg')); ?>" style="position:absolute;right:43px;" width="32" height="32" alt=""> سوابق تحصیلی
                                <img src="<?php echo e(asset('img/corner.png')); ?>" style="position:relative;top: -34px;left: 326px;" width="15" height="14" alt="">
                            </div>
                        </p>
                        <p class="text-left ml-4">رشته: <?php echo e($getedus->EduMajor); ?></p>
                        <p class="text-left ml-4">گرایش: <?php echo e($getedus->EduOrientation); ?></p>
                        <p class="text-left ml-4"><?php echo e($getedus->EduLnstitute); ?></p>
                        <p class="text-left ml-4">معدل: <?php echo e($getedus->EduAverage); ?> از 20.00</p>


                        <p align="center">
                            <div class="text-center p-3 my-4 position-relative;" style="background:#e2e3e5;width:104%;color:#777;font-size:19px;position:relative;left:19px;font-weight:bold">
                                <img src="<?php echo e(asset('img/icons/library.svg')); ?>" style="position:absolute;right:43px;" width="32" height="32" alt=""> سوابق شغلی
                                <img src="<?php echo e(asset('img/corner.png')); ?>" style="position:relative;top: -34px;left: 318px;" width="15" height="14" alt="">                            </div>
                        </p>

                        <p class="text-left ml-4">سمت: <?php echo e($getworks->WorkPost); ?></p>
                        <p class="text-left ml-4"><?php echo e($getworks->WorkCenter); ?>: <?php echo e($getworks->WorkTitleCenter); ?></p>
                        <p class="text-left ml-4">نوع همکاری: <?php echo e($getworks->WorkCooperation); ?></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" style="height:200px;width:259px;overflow-x: hidden;">
            <table cellspacing="0" style="height:200px;position: relative;top: -4px;width:100%;background:#28204c;left: 1px;">
                <tr>
                    <td>
                        <p class="text-center text-white mt-3" style="font-size:20px;">مهارت‌ها</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:100px;" class="px-3 pb-3 ">
                        <div style="" class="pb-5">
                            <?php for($i = 0; $i < count($getskills); $i++): ?>
                                <div class=" text-white btn btn-primary m-1" style="float:right"><?php echo e($getskills[$i]); ?></div>
                            <?php endfor; ?>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div>
                            <br>
                        </div>
                        <br>
                        <br>

                    </td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <h6 class="text-center text-white mt-4" style="font-size:20px;">اطلاعات تماس</h6></td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <div class="text-left text-white m-2 ml-4" style="font-size:15px;width: 224px;max-width: 224px;font-size: 12px;">

                            <?php echo e($getbases->BaseEmail); ?>

                            <img src="<?php echo e(asset('img/icons/contactus/email.svg')); ?>" style="float:right;position: relative;left: 10px;" width="20" height="20" alt="">

                        </div>
                    </td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <div class="text-left text-white m-2 ml-4" style="font-size:13px;"><?php echo e($getbases->BaseMobile); ?>

                            <img src="<?php echo e(asset('img/icons/contactus/phone.svg')); ?>" style="float:right;position: relative;left: 10px;" width="20" height="20" alt="">

                        </div>
                    </td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <div class="text-left text-white m-2 ml-4" style="font-size:13px;"><?php echo e($getbases->BaseTel); ?>

                            <img src="<?php echo e(asset('img/icons/contactus/call.svg')); ?>" style="float:right;position: relative;left: 10px;" width="20" height="20" alt="">

                        </div>
                    </td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <?php if($getbases->BaseWebsite == ""): ?>
                        <?php else: ?>
                        <div class="text-left text-white mt-2 mb-5 ml-4" style="font-size:13px;"><?php echo e($getbases->BaseWebsite); ?>.emza.app
                            <img src="<?php echo e(asset('img/icons/contactus/world.svg')); ?>" style="float:right;position: relative;left: 10px;" width="20" height="20" alt="">

                        </div>
                        <?php endif; ?>

                    </td>
                </tr>
                <tr style="background:#443782;">
                    <td>
                        <br>
                        <br>
                        <br>
                        <br>

                        <br>
                    </td>
                </tr>
            </table>
        </td>
        <br>
        <td>
            <table style="height:100%;width:100%;background:#fafafa">
                <tr>
                    <td>
                        <div style="position:relative;top:-193px;">
                            <p align="center">
                                <div class="text-center p-3 my-4 position-relative;" style="background:#e2e3e5;width:104%;color:#777;font-size:19px;position:relative;left:19px;font-weight:bold">
                                    <img src="<?php echo e(asset('img/icons/blackboard.svg')); ?>" style="position:absolute;right:43px;" width="32" height="32" alt=""> زبان
                                    <img src="<?php echo e(asset('img/corner.png')); ?>" style="position:relative;top: -34px;left: 284px;" width="15" height="14" alt="">
                                </div>
                            </p>

                            <p class="text-left ml-4">نام: <?php echo e($getlangs->LangName); ?></p>
                            <p class="text-left ml-4">سطح خواندن:
                                <?php for($i = 0; $i < $getlangs->LangReadingskills; $i++): ?>
                                <img src="<?php echo e(asset('img/star.png')); ?>" style="" width="20" height="20" alt="">
                                <?php endfor; ?>
                                <?php for($i = 0; $i < $star1; $i++): ?>
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" style="" width="20" height="20" alt="">
                                <?php endfor; ?>
                            </p>
                            <p class="text-left ml-4">سطح نوشتن :
                                    <?php for($i = 0; $i < $getlangs->LangWritingskills; $i++): ?>
                                    <img src="<?php echo e(asset('img/star.png')); ?>" style="" width="20" height="20" alt="">
                                    <?php endfor; ?>
                                    <?php for($i = 0; $i < $starw1; $i++): ?>
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" style="" width="20" height="20" alt="">
                                    <?php endfor; ?>

                            </p>
                        </div>

                        <div style="position:relative;top:-193px;">
                            <p align="center">
                                <div class="text-center p-3 my-4 position-relative;" style="background:#e2e3e5;width:104%;color:#777;font-size:19px;position:relative;left:19px;font-weight:bold">
                                    <img src="<?php echo e(asset('img/icons/diploma.svg')); ?>" style="position:absolute;right:43px;" width="32" height="32" alt=""> دوره‌ها
                                    <img src="<?php echo e(asset('img/corner.png')); ?>" style="position:relative;top: -34px;left: 293px;" width="15" height="14" alt="">

                                </div>
                            </p>

                            <p class="text-left ml-4">نوع دوره: <?php echo e($getcourses->CoursesType); ?></p>
                            <p class="text-left ml-4">عنوان دوره (ها): <?php echo e($getcourses->CoursesTitle); ?>

                            </p>
                            <p class="text-left ml-4">عنوان موسسه: <?php echo e($getcourses->CoursesInstitute); ?>

                            </p>
                        </div>
                        <div style="position:relative;top:-188px;">
                            <p align="center">
                                <div class="text-center p-3 my-4 position-relative;" style="background:#e2e3e5;width:104%;color:#777;font-size:19px;position:relative;left:19px;font-weight:bold">
                                    <img src="<?php echo e(asset('img/icons/book.svg')); ?>" style="position:absolute;right:43px;" width="32" height="32" alt=""> پروژه و پایان نامه
                                    <img src="<?php echo e(asset('img/corner.png')); ?>" style="position:relative;top: -34px;left: 332px;" width="15" height="14" alt="">
                                </div>
                            </p>

                            <p class="text-left ml-4">            <?php echo e($getprojects->ProjectTitle); ?>

                            </p>
                            <p class="text-left ml-4">
                                          تاریخ دفاع : <?php echo e($getprojects->ProjectDate); ?>

                            </p>
                        </div>
                    </td>

                </tr>
            </table>
        </td>
    </tr>

    </tr>
</table>
<div style="width:21cm;background: #443782;height:20px;margin:0 auto;position: relative;top: -21px;">

</div>
<?php /**PATH /home/emzaapp1/mysite/resources/views/beautiful-gray.blade.php ENDPATH**/ ?>