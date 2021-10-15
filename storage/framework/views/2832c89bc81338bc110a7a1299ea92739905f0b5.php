<div style="width:21cm;height:29.7cm;border:1px solid black;margin:3rem auto;padding:20px;background:url('<?php echo e(asset('img/blue-light.jpg')); ?>');background-repeat:no-repeat;background-size: cover;background-size: 21cm 29.7cm;">
    <table style="width:100%;height:100%;">
        <tr>
            <td colspan="2" valign="top" style="height:154px;padding:20px;">
                <img class="rounded-circle shadow" src="<?php echo e(asset($getbases->BaseAvatar)); ?>" style="float:left !important;width:160px;height:160px;">

                <table>
                    <tr>
                        <td>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Soldier Status: </span><span><?php echo e($getbases->BaseSolider); ?></span>
                        </td>
                        <td>
                            <span style="float:left;margin:10px;"><?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?></span>
                            <span style="float:left;margin:10px;">I am <?php echo e($getbases->BaseMarital); ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Date of birth: </span><?php echo e($getbases->BaseBirthdate); ?></span>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Age: </span><?php echo e($old); ?></span>
                        </td>
                        <td>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Job: </span><?php echo e($getbases->BaseWorkTitle); ?></span>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Email: </span><?php echo e($getbases->BaseEmail); ?></span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Website: </span><?php echo e($getbases->BaseWebsite); ?>.emza.app</span>
                        </td>
                        <td>
                            <span style="float:left;margin:10px;"><span style="font-weight:bold;">Telephone: </span><?php echo e($getbases->BaseTel); ?></span>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <div style="height:168px;">
                    <div style="width:100%;background:blue;margin-bottom:18px;border-radius:15px;">
                        <h5 style="color:white;text-align:center;padding:10px;margin-top:18px;">Courses</h5>
                    </div>
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Course Type: </span><?php echo e($getcourses->CoursesType); ?></div>
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Courses Title: </span><?php echo e($getcourses->CoursesTitle); ?></div>
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Institute Title : </span><?php echo e($getcourses->CoursesInstitute); ?></div>
                </div>
                <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:18px;border-radius:15px;">Project</h5>
                </div>
                <div style="max-height:68px;height:85px;">
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Title: </span> <?php echo e($getprojects->ProjectTitle); ?>

                    </div>
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Defense Date: </span> <?php echo e($getprojects->ProjectDate); ?>

                    </div>
                </div>
                <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:57px;">Contact</h5>
                </div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Telephone: </span><?php echo e($getbases->BaseTel); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Mobile: </span><?php echo e($getbases->BaseMobile); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Email : </span><?php echo e($getbases->BaseEmail); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Website : </span><?php echo e($getbases->BaseWebsite); ?>.emza.app</div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </td>
            <td valign="top" style="width:50%">
                <div style="height:168px;">
                    <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                        <h5 style="color:white;text-align:center;padding:10px;margin-top:18px;">Language</h5>
                    </div>
                    <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Name: </span><?php echo e($getlangs->LangName); ?></div>
                    <div style="margin:10px;text-align:left">
                        <?php for($i = 0; $i
                        < $starw1; $i++): ?> <img src="<?php echo e(asset('img/star-null-blue.png')); ?>" style="" width="20" height="20" alt="">
                            <?php endfor; ?> <?php for($i = 0; $i
                            < $getlangs->LangWritingskills; $i++): ?>
                                <img src="<?php echo e(asset('img/star-blue.png')); ?>" style="" width="20" height="20" alt=""> <?php endfor; ?>

                                <span style="font-weight:bold;">&nbsp; : Writing skills </span>

                    </div>
                    <div style="margin:10px;text-align:left">
                        <?php for($i = 0; $i
                        < $star1; $i++): ?> <img src="<?php echo e(asset('img/star-null-blue.png')); ?>" style="position: relative;
                left: 1px;" width="20" height="20" alt="">
                            <?php endfor; ?> <?php for($i = 0; $i
                            < $getlangs->LangReadingskills; $i++): ?>
                                <img src="<?php echo e(asset('img/star-blue.png')); ?>" style="position: relative;
                left: 1px;" width="20" height="20" alt=""> <?php endfor; ?>
                                <span style="font-weight:bold;"> : Reading skills </span>
                    </div>
                    <div style="margin:10px;text-align:left;height:12px;"></div>
                </div>
                <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:18px;">Experimental Skills</h5>
                </div>
                <div style="max-height:85px;height:85px;">
                    <?php $__currentLoopData = $getskills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listskill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin:10px;text-align:left;"><span style="background:blue;border:1px solid black;padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:5px;float:left;margin-right:5px;margin-bottom:5px;border-top-left-radius:10px;border-bottom-right-radius:10px;" class="shadow"><?php echo e($listskill); ?></span></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin:10px;text-align:left;"><span style="padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:5px;margin-right:5px;margin-bottom:5px;"></span></div>
                </div>

                <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:40px;">Education</h5>
                </div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Grade: </span><?php echo e($getedus->EduSection); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Major: </span><?php echo e($getedus->EduMajor); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Tendency: </span><?php echo e($getedus->EduOrientation); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Educational institution: </span><?php echo e($getedus->EduLnstitute); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">GPA: </span><?php echo e($getedus->EduAverage); ?></div>
                <div style="width:100%;background: blue;margin-bottom:18px;border-radius:15px;">
                    <h5 style="color:white;text-align:center;padding:10px;margin-top:40px;">Work Experience</h5>
                </div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Job Post: </span><?php echo e($getworks->WorkPost); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Employment Center: </span><?php echo e($getworks->WorkCenter); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">Name of the center: </span><?php echo e($getworks->WorkTitleCenter); ?></div>
                <div style="margin:10px;text-align:left"><span style="font-weight:bold;">How to cooperate: </span><?php echo e($getworks->WorkCooperation); ?></div>
            </td>
        </tr>
    </table>
</div><?php /**PATH C:\xampp\mysite\resources\views/download/template/blue-en.blade.php ENDPATH**/ ?>