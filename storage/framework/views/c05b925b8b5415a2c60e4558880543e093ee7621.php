 <?php $__env->startSection('title'); ?> فرم ایجاد رزومه انگلیسی سریع <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('amib/js-persian-cal.css')); ?> ">
<link rel="stylesheet" href="<?php echo e(asset('amib/jspc-peach.css')); ?> "> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<style>
.form-control {
    color: black !important;
    font-weight: bold;
    color: blue !important;
}

.custom-select {
    color: black !important;
    font-weight: bold;
}

.custom-file-input {
    color: black !important;
    font-weight: bold;
}

.custom-control-labe {
    color: black !important;
    font-weight: bold;
}
</style>
<div class="container">
    <div class="row">
        <div style="background:white !important;" class="jumbotron bg-light w-100 p-0 p-sm-1 mt-0 mx-3 rounded-lg">
            <br>
            <img class="mx-auto d-block position-relative" style="top: 18px;" src="<?php echo e(asset('img/title.png')); ?>"></img>
            <!-- The Modal -->

            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">راهنمای ایجاد رزومه انگلیسی سریع</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>معنی کلمات</p>
                            <p>
                                <table align="center" class="table text-right">
                                    <tr>
                                        <td>
                                            <h6>
                                                آواتار
                                            </h6>
                                            <h6>نام</h6>
                                            <h6>نام خانوادگی</h6>
                                            <h6>مجرد</h6>
                                            <h6>متاهل</h6>
                                            <h6>وضعیت تاهل</h6>
                                            <h6>وضعیت سربازی</h6>
                                            <h6>عنوان حرفه</h6>
                                            <h6>تاریخ تولد</h6>
                                            <h6>آدرس ایمیل</h6>
                                            <h6>موبایل</h6>
                                            <h6>تلفن</h6>
                                            <h6>وبسایت</h6>
                                            <h6>نام زبان</h6>
                                            <h6>مهارت خواندن</h6>
                                            <h6>خیلی کم</h6>
                                            <h6>کم</h6>
                                            <h6>متوسط</h6>
                                            <h6>بالا</h6>
                                            <h6>خیلی بالا</h6>
                                            <h6>مهارت خواندن</h6>
                                            <h6>با خط فاصله از هم جدا کنید</h6>
                                            <h6>مهارت های تجربی</h6>
                                            <h6>مدرک</h6>
                                            <h6>رشته</h6>
                                            <h6>گرایش</h6>
                                            <h6>نام موسسه یا دانشگاه</h6>
                                            <h6>معدل</h6>
                                            <h6>سوابق کاری</h6>
                                            <h6>سمت شغلی</h6>
                                            <h6>مرکز اشتغال</h6>
                                            <h6>نام مرکز</h6>
                                            <h6>چگونگی همکاری</h6>
                                            <h6>تمام وقت</h6>
                                            <h6>پاره وقت</h6>
                                            <h6>پروژه ای</h6>
                                            <h6>ساعتی</h6>
                                            <h6>دورکاری</h6>
                                            <h6>کارموزی</h6>
                                            <h6>نوع دوره</h6>
                                            <h6>زبان</h6>
                                            <h6>برنامه نویسی</h6>
                                            <h6>نرم افزار</h6>
                                            <h6>دیگر</h6>
                                            <h6>عنوان دوره ها</h6>
                                            <h6>نام موسسه آموزشی</h6>
                                            <h6>عنوان پروژه</h6>
                                        </td>
                                        <td>
                                            <h6>Avatar</h6>
                                            <h6>Name</h6>
                                            <h6>Family</h6>
                                            <h6>Single</h6>
                                            <h6>Married</h6>
                                            <h6>Marital Status</h6>
                                            <h6>Soldier Status</h6>
                                            <h6>Profession Title</h6>
                                            <h6>BirthDate</h6>
                                            <h6>Email</h6>
                                            <h6>Mobile</h6>
                                            <h6>Telephone</h6>
                                            <h6>Website</h6>
                                            <h6>Language Name</h6>
                                            <h6>Writing skills</h6>
                                            <h6>Very low</h6>
                                            <h6>Low</h6>
                                            <h6>Medium</h6>
                                            <h6>High</h6>
                                            <h6>Very High</h6>
                                            <h6>Reading skills</h6>
                                            <h6>Separate skills with dashes</h6>
                                            <h6>Experimental Skills</h6>
                                            <h6>Grade</h6>
                                            <h6>Major</h6>
                                            <h6>Tendency</h6>
                                            <h6>Educational institution</h6>
                                            <h6>GPA</h6>
                                            <h6>work experience</h6>
                                            <h6>Job Post</h6>
                                            <h6>Employment Center</h6>
                                            <h6>Name of the center</h6>
                                            <h6>How to cooperate</h6>
                                            <h6>Full-time</h6>
                                            <h6>Part-time</h6>
                                            <h6>A project</h6>
                                            <h6>Hour</h6>
                                            <h6>Telework</h6>
                                            <h6>The internship</h6>
                                            <h6>Course type</h6>
                                            <h6>Language</h6>
                                            <h6>Programming</h6>
                                            <h6>software</h6>
                                            <h6>Others</h6>
                                            <h6>Courses Title</h6>
                                            <h6>Institute title</h6>
                                            <h6>Project Title</h6>
                                        </td>
                                    </tr>
                                </table>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal " id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header ">
                            <h4 class="modal-title mx-auto">Personal photo rules</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="text-right">
                                Personnel photo must belong to the person himself
                            </p>
                            <p class="text-right">
                                The maximum image size is 2 MB
                            </p>
                            <p class="text-right">
                                Personal photos must be complete
                            </p>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <form method="POST" action="/save-form-cv-fast-english" enctype="multipart/form-data"
                class="needs-validation mt-5" novalidate>
                <?php echo csrf_field(); ?>

                <input type="hidden" name="dia" value="2">
                <div class="container">
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6 px-0  float-right">
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Basic information</div>
                            <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                        Rule
                                    </button>&nbsp;

                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile" style="">Please select a
                                            personal photo of yourself</label>
                                        <input type="file" class="custom-file-input"
                                            accept="image/x-png,image/gif,image/jpeg" id="customFile" name="img"
                                            required>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-purple border-purple text-white rounded-right"
                                            style="height:36px">Avatar</span>
                                    </div>
                                    <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">
                                        Please select an image.</div>
                                </div>
                                <input type="text" id="formName" name="formName" placeholder="Example: Reza"
                                    value="<?php echo e(old('formName')); ?>" class="form-control rounded-left  text-right"
                                    required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple rounded-right text-white">Name</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formFamily" name="formFamily" placeholder="Example: Ahmadi"
                                    value="<?php echo e(old('formFamily')); ?>"
                                    class="form-control rounded-left text-right border-left-success" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple rounded-right text-white">Family</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3 d-flex justify-content-end">
                                <div>
                                    <label class=" mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formMarital_2">Married</label>
                                    <input type="radio"
                                        class="mr-5 pt-2 d-flex d-inline-flex align-self-center position-relative"
                                        style="top:2px" name="formMarital" id="formMarital_2" value="Marital">
                                </div>
                                <div>
                                    <label class="s mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formMarital_1">Single</label>
                                    <input type="radio"
                                        class="mr-5 pt-2 d-flex d-inline-flex align-self-center position-relative"
                                        style="top:2px" name="formMarital" id="formMarital_1" value="Single" required>
                                </div>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Marital
                                        Status</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please select an option</div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select rounded-left  border-left-success" name="ّformSoldier"
                                    id="ّformSoldier" value="<?php echo e(old('formSoldier')); ?>" style="direction:ltr !important;"
                                    required>
                                    <option value="">Select</option>
                                    <option value="Included">Included</option>
                                    <option value="Being a soldier">Being a soldier</option>
                                    <option value="End of military service">End of military service</option>
                                    <option value="Exempt">Exempt</option>
                                    <option value="Education pardon">Education pardon</option>
                                    <option value="Non-medical exemptions">Non-medical exemptions</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Soldier
                                        Status</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please select an option</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formWorkTitle" name="formWorkTitle"
                                    value="<?php echo e(old('formWorkTitle')); ?>" placeholder="Example: Web programmer"
                                    class="form-control rounded-left text-right border-left-success" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Profession
                                        Title</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="date" id="formBirthDate-en" name="formBirthDate"
                                    value="<?php echo e(old('formBirthDate')); ?>" maxlength="10"
                                    class="form-control rounded-left text-right border-left-success" required>
                                <input type="hidden" name="extra" id="extra" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white  rounded-right">BirthDate</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formmail" name="formmail"
                                    placeholder="Example: rezaahmadiyazd@gmail.com" value="<?php echo e(old('formmail')); ?>"
                                    class="form-control text-right rounded-left border-left-success"
                                    pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$"
                                    required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Email</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please enter the email address correctly</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formMobile" name="formMobile" placeholder="Example: 09226681982"
                                    value="<?php echo e(old('formMobile')); ?>" maxlength="13" pattern="(\+98|0)?9\d{9}"
                                    class="form-control text-right rounded-left border-left-success" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Mobile</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Mobile number format is incorrect</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formTelephone" name="formTelephone"
                                    placeholder="Example: 03537213382" value="<?php echo e(old('formTelephone')); ?>" maxlength="11"
                                    pattern="^0\d{2,3}\d{8}$"
                                    class="form-control text-right rounded-left border-left-success" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Telephone</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please enter the landline number correctly</div>
                            </div>
                            <div class="input-group mb-3">
                                <?php if(@$error_site == 1): ?><div
                                    class="p-2 mx-1 bg-danger text-white font-weight-bold rounded">This site exists
                                </div><?php endif; ?>

                                <a class="btn btn-success mx-1" href="#">Check</a>
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-left-success">emza.app.</span>
                                </div>
                                <input type="text" id="formWebsite" name="formWebsite" placeholder="Example: reza"
                                    value="<?php echo e(old('formWebsite')); ?>" maxlength="10" pattern="[a-z-A-Z]\w+"
                                    class="form-control text-right rounded-left ">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Website</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    The format is not correct</div>

                            </div>
                        </div>
                        <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                            <div
                                class="badge-pill  position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Language information</div>
                            <div class="input-group mb-3">
                                <input type="text" id="formLangName" name="formlangname"
                                    value="<?php echo e(old('formlangname')); ?>" placeholder="Example: English"
                                    class="form-control border-left-success text-right rounded-left" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white  rounded-right">Name</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group" style="direction:ltr">
                                <div class="input-group-prepend ">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right rounded-left-0">Writing
                                        skills</span>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div id="m-leave" style="position: relative;left: 1px;top: 2px;">
                                    <input type="text" id="formwrittingskill" name="formLangWritingskills"
                                        class="formwrittingskill form-control position-absolute onlystar"
                                        value="<?php echo e(old('formLangWritingskills')); ?>">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-1" class="m-1 height-width-28"
                                        alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-2" class="m-1 height-width-28"
                                        alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-3" class="m-1 height-width-28"
                                        alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-4" class="m-1 height-width-28"
                                        alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-5" class="m-1 height-width-28"
                                        alt="">
                                </div>
                                &nbsp;

                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    لطفا یک گزینه را انتخاب کنید</div>

                                <div class="input-group mt-2" style="direction:ltr">

                                    <div class="input-group-prepend mt-2">
                                        <span
                                            class="input-group-text bg-purple border-purple text-white rounded-right rounded-left-0">Reading
                                            skills</span>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div id="m-leave-2" style="position: relative;left: 1px;top: 9px;">
                                        <input type="text" id="formreadingskill" name="formLangreadingskills"
                                            class="formreadingskill form-control position-absolute onlystar"
                                            value="<?php echo e(old('formLangreadingskills')); ?>">
                                        <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-1"
                                            class="m-1 height-width-28" alt="">
                                        <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-2"
                                            class="m-1 height-width-28" alt="">
                                        <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-3"
                                            class="m-1 height-width-28" alt="">
                                        <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-4"
                                            class="m-1 height-width-28" alt="">
                                        <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-5"
                                            class="m-1 height-width-28" alt="">
                                    </div>
                                    <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا
                                        یک گزینه را انتخاب کنید</div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Experimental Skills
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formSkillsName" name="formskillsname"
                                    class="form-control border-left-primary rounded-left text-right"
                                    value="<?php echo e(old('formskillsname')); ?>"
                                    placeholder="Example: Android Programming - Photoshop">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right ">List&nbsp;
                                        <div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6  float-left px-0">
                        <br class="hide desktop-show">
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section bg-section bg-section"
                            style="
    margin-left: 15px;
">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Academic background</div>
                            <div class="input-group mb-3 ">
                                <select class="custom-select border-left-primary rounded-left" style="direction:ltr;"
                                    id="ّedueection" name="ّedusection" value="<?php echo e(old('formEduSection')); ?>" required>
                                    <option value="">Select</option>
                                    <option value="High school">High school</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Associate Degree">Associate Degree</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Masters">Masters</option>
                                    <option value="P.H.D">P.H.D</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Grade</span>
                                </div>

                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formEduMajor" name="formEduMajor"
                                    placeholder="Example: Computer Enginner" value="<?php echo e(old('formEduMajor')); ?>"
                                    style="direction:ltr !important;"
                                    class="form-control border-left-primary rounded-left" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Major</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formEduOrientation" name="formEduOrientation"
                                    placeholder="Example: Software" value="<?php echo e(old('formEduOrientation')); ?>"
                                    class="form-control border-left-primary text-right rounded-left" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Tendency</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formEduLnstitute" name="formEduLnstitute"
                                    placeholder="Example: Yazd University" value="<?php echo e(old('formEduLnstitute')); ?>"
                                    class="form-control border-left-primary rounded-left text-right" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Institution</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formEduAverage" name="formEduAverage"
                                    value="<?php echo e(old('formEduAverage')); ?>" placeholder="Example: 17.77" maxlength="5"
                                    pattern="[1-2][0-9].[0-9][0-9]"
                                    class="form-control border-left-primary rounded-left text-right" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">GPA</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                        </div>
                        <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section" style="
    margin-left: 15px;
">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Work experience</div>
                            <div class="input-group mb-3">
                                <input type="text" id="formWorkpost" name="formWorkpost"
                                    value="<?php echo e(old('formWorkpost')); ?>" placeholder="Example: Web Application Developer"
                                    class="form-control border-left-info rounded-left text-right">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Post&nbsp;
                                        <div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select border-left-info rounded-left" name="formWorkcenter"
                                    id="formWorkcenter" style="direction:ltr !important;"
                                    value="<?php echo e(old('FormEduSection')); ?>">
                                    <option value="">Select</option>
                                    <option value="Company">Company</option>
                                    <option value="Institute">Institute</option>
                                    <option value="Organization">Organization</option>
                                    <option value="Self-employment">self_employment</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Mental Hospital">Mental Hospital</option>
                                    <option value="Medical center">Medical center</option>
                                    <option value="clinic">clinic</option>
                                    <option value="Store">Store</option>
                                    <option value="Foundation">Foundation</option>
                                    <option value="University">University</option>
                                    <option value="School">School</option>
                                    <option value="educational institutions">educational institutions</option>
                                    <option value="Center">Center</option>
                                    <option value="Workshop">Workshop</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Employment
                                        Center&nbsp;<div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formworktitlecenter" name="formworktitlecenter"
                                    placeholder="Example: Sepehr Salamat" value="<?php echo e(old('formworktitlecenter')); ?>"
                                    class="form-control border-left-info rounded-left text-right">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-purple border-purple text-white rounded-right">Name
                                        of the center&nbsp;<div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                            <div class="input-group" style="direction:ltr;">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right rounded-left-0">
                                        <div class="rounded-circle optional-circle"></div>&nbsp;How to cooperate
                                    </span>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_1" value="Full time"
                                        required>
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_1">Full time</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_2" value="Part time">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_2">Part time</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_3" value="A project">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_3">A project</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_4" value="Hour">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_4">Hour</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_5" value="Telework">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_5">Telework</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3 "
                                        name="formworkcooperation" id="formworkcooperation_6" value="The internship">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formworkcooperation_6">The internship</label>
                                </div>
                                &nbsp;
                            </div>
                        </div>

                        <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section" style="
    margin-left: 15px;
">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Courses</div>
                            <div class="input-group mb-3 " style="direction:ltr;">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text size-purple bg-purple border-purple text-white rounded-right rounded-left-0">
                                        <div class="rounded-circle optional-circle"></div>&nbsp;Type
                                    </span>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3"
                                        name="formcoursestype" id="formcoursestype_1" value="Language" required>
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formcoursestype_1">Language</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3"
                                        name="formcoursestype" id="formcoursestype_2" value="Programming">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formcoursestype_2">Programming</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3"
                                        name="formcoursestype" id="formcoursestype_3" value="software">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formcoursestype_3">software</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio"
                                        class="d-flex d-inline-flex align-self-center position-relative top-3"
                                        name="formcoursestype" id="formcoursestype_4" value="Others">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center custom-control-labe"
                                        for="formcoursestype_4">Others</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formCoursesTitle" name="formcoursestitle"
                                    value="<?php echo e(old('formcoursestitle')); ?>" placeholder="Example: Laravel - Bootstrap"
                                    class="form-control border-left-dark rounded-left text-right">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Title[s]&nbsp;
                                        <div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="formCoursesInstitute" name="formcoursesinstitute"
                                    value="<?php echo e(old('formcoursesinstitute')); ?>" placeholder="Example: www.roocket.ir"
                                    class="form-control border-left-dark rounded-left text-right">
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Institute
                                        title&nbsp;<div class="rounded-circle optional-circle"></div></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section" style="
    margin-left: 15px;
">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 right-145">
                                Project</div>
                            <div class="input-group mb-3">
                                <input type="text" id="formProjectTitle" name="formprojecttitle"
                                    value="<?php echo e(old('formprojecttitle')); ?>"
                                    class="form-control border-left-info rounded-left text-right"
                                    placeholder="Pharmacy management system design" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Project
                                        Title</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="date" id="formprojectdate" name="formprojectdate"
                                    value="<?php echo e(old('formprojectdate')); ?>"
                                    class="form-control border-left-info rounded-left text-right" required>
                                <div class="input-group-prepend">
                                    <span
                                        class="input-group-text bg-purple border-purple text-white rounded-right">Project
                                        Date</span>
                                </div>
                                <div
                                    class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">
                                    Please fill in this field</div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="formlangen" name="formlangen" value="en">

                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-12  float-left" style="text-align: start;">
                        <div style="direction:ltr;">
                            <br>
                            <div>
                                <p style="font-weight:bold;">Note: Fields marked with white dots are optional</p>
                                <input type="checkbox" id="formterms" name="formterms" required="">
                                <label for="formterms" style="font-weight:bold;">I have read and accept the <a
                                        href="/terms" target="_blank">terms</a> of using this system.</label>

                            </div>
                        </div>
                        <br>
                        <div class="input-group mb-3" style="direction:ltr;">
                            <button type="submit" class="btn btn-primary">Save and Continue</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/bootstrap4.4.1.js')); ?>"></script>
<?php echo $__env->make('scripts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
<?php echo $__env->make('scripts.custom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->make('scripts.stars', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/form-fast-english.blade.php ENDPATH**/ ?>