<?php $__env->startSection('title'); ?> فرم ویرایش رزومه سریع <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('amib/js-persian-cal.css')); ?> ">
<link rel="stylesheet" href="<?php echo e(asset('amib/jspc-peach.css')); ?> ">
<script src="<?php echo e(asset('js/jquery-3.4.1.js')); ?>"></script>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;" class="jumbotron bg-light w-100 p-0 pb-1 p-sm-1 mt-5 mx-3 border border-info rounded-lg">
            <!-- Modal -->
            <div class="modal fade" id="mymodal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">عکس نمایه</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/delete-image-avatar" enctype="multipart/form-data" class="needs-validation mt-5" novalidate>
                                <?php echo csrf_field(); ?>

                                <img src="<?php echo e(asset($getbases->BaseAvatar)); ?>" name="fileAvatar" alt="عکس نمایه در سامانه امضا" width="300" height="400" class="mx-auto d-block border border-primary">
                                <input type="hidden" name="imageAvatar" value="<?php echo e($getbases->BaseAvatar); ?>" />
                                <button type="submit" class="btn btn-danger d-block mx-auto m-3 w-25 p-2">حذف عکس</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h5 class="text-center">فرم ویرایش رزومه فارسی به صورت سریع</h5>
            <form method="POST" action="/update-form-cv-fast-persian-home" enctype="multipart/form-data" class="needs-validation mt-5" novalidate>
                <?php echo csrf_field(); ?>

                <input type="hidden" value="<?php echo e($id); ?>" id="formId" name="formId">
                <div class="container">
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6 float-left">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white" style="height:36px">آواتار</span>
                            </div>
                            <div class="custom-file">
                                <input type="hidden" name="updo" id="updo" value="0" />
                                <input type="hidden" name="formImage" value="<?php echo e($getbases->BaseAvatar); ?>" />
                                <input type="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" id="customFile" name="avatar">
                                <label class="custom-file-label" for="customFile" style="border-top-left-radius: 5px;border-bottom-left-radius: 5px;"><?php echo e($getbases->BaseAvatar); ?></label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک فایل را انتخاب کنید.</div>

                            <button type="button" class="btn btn-primary ml-1" data-toggle="modal" data-target="#mymodal20">
                                مشاهده عکس
                            </button>

                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success  text-white">نام</span>
                            </div>
                            <input type="text" id="formName" name="formName" value="<?php echo e($getbases->BaseName); ?>" class="form-control rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">نام خانوادگی</span>
                            </div>
                            <input type="text" id="formFamily" name="formFamily" value="<?php echo e($getbases->BaseFamily); ?>" class="form-control rounded-right  border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">وضعیت تاهل</span>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formMarital" id="formMarital_1" <?php if($getbases->BaseMarital == "مجرد"): ?> checked <?php endif; ?> value="مجرد" required>
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formMarital_1">مجرد</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formMarital" id="formMarital_2" <?php if($getbases->BaseMarital == "متاهل"): ?> checked <?php endif; ?> value="متاهل">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formMarital_2">متاهل</label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">وضعیت سربازی</span>
                            </div>
                            <select class="custom-select rounded-right  border-left-success" name="ّformSoldier" id="ّformSoldier" value="<?php echo e(old('formSoldier')); ?>" required>
                                <option value="">انتخاب کنید</option>
                                <option value="مشمول" <?php if($getbases->BaseSolider == "مشمول"): ?> selected <?php endif; ?>>مشمول</option>
                                <option value="در حال خدمت" <?php if($getbases->BaseSolider == "در حال خدمت"): ?> selected <?php endif; ?>>در حال خدمت</option>
                                <option value="پایان خدمت" <?php if($getbases->BaseSolider == "پایان خدمت"): ?> selected <?php endif; ?>>پایان خدمت</option>
                                <option value="معاف" <?php if($getbases->BaseSolider == "معاف"): ?> selected <?php endif; ?>>معاف</option>
                                <option value="معافیت تحصیلی" <?php if($getbases->BaseSolider == "معافیت تحصیلی"): ?> selected <?php endif; ?>>معافیت تحصیلی</option>
                                <option value="معافیت غیرپزشکی" <?php if($getbases->BaseSolider == "معافیت غیرپزشکی"): ?> selected <?php endif; ?>>معافیت غیرپزشکی</option>
                            </select>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success bg-success border-success text-white">عنوان حرفه</span>
                            </div>
                            <input type="text" id="formWorkTitle" name="formWorkTitle" value="<?php echo e($getbases->BaseWorkTitle); ?>" class="form-control rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">تاریخ تولد</span>
                            </div>
                            <input type="text" id="formBirthDate" name="formBirthDate" value="<?php echo e($getbases->BaseBirthdate); ?>" maxlength="10" class="form-control rounded-right border-left-success" required>
                            <input type="hidden" name="extra" id="extra" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">نشانی پست الکترونیکی</span>
                            </div>
                            <input type="text" id="formmail" name="formmail" value="<?php echo e($getbases->BaseEmail); ?>" class="form-control text-right rounded-right border-left-success" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا نشانی ایمیل را درست وارد کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">شماره تلفن همراه</span>
                            </div>
                            <input type="text" id="formMobile" name="formMobile" value="<?php echo e($getbases->BaseMobile); ?>" maxlength="13" pattern="(\+98|0)?9\d{9}" class="form-control text-right rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت شماره موبایل اشتباه است.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">شماره تلفن ثابت</span>
                            </div>
                            <input type="text" id="formTelephone" name="formTelephone" value="<?php echo e($getbases->BaseTel); ?>" maxlength="11" pattern="^0\d{2,3}\d{8}$" class="form-control text-right rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا شماره تلفن ثابت را درست وارد کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white">وب سایت</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text border-left-success">emza.app.</span>
                            </div>
                            <input type="text" id="formWebsite" name="formWebsite" value="<?php echo e($getbases->BaseWebsite); ?>" maxlength="10" pattern="[a-z-A-Z]\w+" class="form-control text-right rounded-right ">
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت درست نیست</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white">نام زبان</span>
                            </div>
                            <input type="text" id="formLangName" name="formlangname" value="<?php echo e($getlangs->LangName); ?>" class="form-control border-left-success rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white">مهارت نوشتن</span>
                            </div>
                            &nbsp;
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangWritingskills" id="formLangWritingskills_1" <?php if($getlangs->LangWritingskills == 1): ?> checked <?php endif; ?> value="1" required>
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_1">خیلی‌پایین</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangWritingskills" id="formLangWritingskills_2" <?php if($getlangs->LangWritingskills == 2): ?> checked <?php endif; ?> value="2">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_2">پایین</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangWritingskills" id="formLangWritingskills_3" <?php if($getlangs->LangWritingskills == 3): ?> checked <?php endif; ?> value="3">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_3">متوسط</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangWritingskills" id="formLangWritingskills_4" <?php if($getlangs->LangWritingskills == 4): ?> checked <?php endif; ?> value="4">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_4">بالا</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangWritingskills" id="formLangWritingskills_5" <?php if($getlangs->LangWritingskills == 5): ?> checked <?php endif; ?> value="5">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_5">خیلی‌بالا</label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white">مهارت خواندن</span>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangreadingskills" id="formLangReadingskills_1" <?php if($getlangs->LangReadingskills == 1): ?> checked <?php endif; ?> value="1" required>
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_1">خیلی‌پایین</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangreadingskills" id="formLangReadingskills_2" <?php if($getlangs->LangReadingskills == 2): ?> checked <?php endif; ?> value="2">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_2">پایین</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangreadingskills" id="formLangReadingskills_3" <?php if($getlangs->LangReadingskills == 3): ?> checked <?php endif; ?> value="3">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_3">متوسط</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangreadingskills" id="formLangReadingskills_4" <?php if($getlangs->LangReadingskills == 4): ?> checked <?php endif; ?> value="4">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_4">بالا</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" name="formLangreadingskills" id="formLangReadingskills_5" <?php if($getlangs->LangReadingskills == 5): ?> checked <?php endif; ?> value="5">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_5">خیلی‌بالا</label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">مهارت های تجربی</span>
                            </div>
                            <input type="text" id="formSkillsName" name="formskillsname" value="<?php echo e($getskills->SkillsName); ?>" class="form-control border-left-primary rounded-right" placeholder="مهارت‌ها را با خط تیره از هم جدا کنید">
                        </div>
                    </div>
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6  float-left">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">مقطع تحصیلی</span>
                            </div>
                            <select class="custom-select border-left-primary rounded-right" id="ّedueection" name="ّedusection" value="<?php echo e(old('formEduSection')); ?>" required>
                                <option value="">انتخاب کنید</option>
                                <option value="زیر دیپلم" <?php if($getedus->EduSection == "زیر دیپلم"): ?> selected <?php endif; ?>>زیر دیپلم</option>
                                <option value="دیپلم" <?php if($getedus->EduSection == "دیپلم"): ?> selected <?php endif; ?>>دیپلم</option>
                                <option value="فوق دیپلم" <?php if($getedus->EduSection == "فوق دیپلم"): ?> selected <?php endif; ?>>فوق دیپلم</option>
                                <option value="کارشناسی" <?php if($getedus->EduSection == "کارشناسی"): ?> selected <?php endif; ?>>کارشناسی</option>
                                <option value="کارشناسی ارشد" <?php if($getedus->EduSection == "کارشناسی ارشد"): ?> selected <?php endif; ?>>کارشناسی ارشد</option>
                                <option value="دکتری" <?php if($getedus->EduSection == "دکتری"): ?> selected <?php endif; ?>>دکتری</option>
                            </select>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">رشته تحصیلی</span>
                            </div>
                            <input type="text" id="formEduMajor" name="formEduMajor" value="<?php echo e($getedus->EduMajor); ?>" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">گرایش تخصصی</span>
                            </div>
                            <input type="text" id="formEduOrientation" name="formEduOrientation" value="<?php echo e($getedus->EduOrientation); ?>" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">عنوان موسسه آموزشی</span>
                            </div>
                            <input type="text" id="formEduLnstitute" name="formEduLnstitute" value="<?php echo e($getedus->EduLnstitute); ?>" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white">معدل</span>
                            </div>
                            <input type="text" id="formEduAverage" name="formEduAverage" value="<?php echo e($getedus->EduAverage); ?>" maxlength="5" pattern="[1-2][0-9].[0-9][0-9]" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت اشتباه است.</div>
                        </div>
                        <div class="border border-dark rounded p-2 position-relative top-9">
                            <div class="badge-pill position-relative bg-secondary w-25 text-center text-white" style="top:-20px">سوابق شغلی</div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info border-info text-white">سمت شغلی </span>
                                </div>
                                <input type="text" id="formWorkpost" name="formWorkpost" value="<?php echo e($getworks->WorkPost); ?>" class="form-control border-left-info rounded-right">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info border-info text-white">مرکز اشتغال</span>
                                </div>
                                <select class="custom-select border-left-info rounded-right" name="formWorkcenter" id="formWorkcenter" value="<?php echo e(old('FormEduSection')); ?>">
                                    <option value="">انتخاب کنید</option>
                                    <option value="شرکت" <?php if($getworks->WorkCenter == "شرکت"): ?> selected <?php endif; ?> >شرکت</option>
                                    <option value="موسسه" <?php if($getworks->WorkCenter == "موسسه"): ?> selected <?php endif; ?>>موسسه</option>
                                    <option value="سازمان / نهاد" <?php if($getworks->WorkCenter == "سازمان / نهاد"): ?> selected <?php endif; ?>>سازمان / نهاد </option>
                                    <option value="خوداشتغال" <?php if($getworks->WorkCenter == "خوداشتغال"): ?> selected <?php endif; ?>>خود اشتغال </option>
                                    <option value="فریلسنر" <?php if($getworks->WorkCenter == "فریلسنر"): ?> selected <?php endif; ?>>فریلسنر</option>
                                    <option value="بیمارستان" <?php if($getworks->WorkCenter == "بیمارستان"): ?> selected <?php endif; ?>>بیمارستان</option>
                                    <option value="بیمارستان روانی" <?php if($getworks->WorkCenter == "بیمارستان روانی"): ?> selected <?php endif; ?>> بیمارستان روانی </option>
                                    <option value="مرکز درمانی" <?php if($getworks->WorkCenter == "مرکز درمانی"): ?> selected <?php endif; ?>>مرکز درمانی</option>
                                    <option value="کلینیک" <?php if($getworks->WorkCenter == "کلینیک"): ?> selected <?php endif; ?>>کلینیک </option>
                                    <option value="فروشگاه" <?php if($getworks->WorkCenter == "فروشگاه"): ?> selected <?php endif; ?>>فروشگاه </option>
                                    <option value="بنیاد" <?php if($getworks->WorkCenter == "بنیاد"): ?> selected <?php endif; ?>>بنیاد</option>
                                    <option value="دانشگاه" <?php if($getworks->WorkCenter == "دانشگاه"): ?> selected <?php endif; ?>>دانشگاه</option>
                                    <option value="مدرسه" <?php if($getworks->WorkCenter == "مدرسه"): ?> selected <?php endif; ?>>مدرسه</option>
                                    <option value="آموزشگاه" <?php if($getworks->WorkCenter == "آموزشگاه"): ?> selected <?php endif; ?>>آموزشگاه</option>
                                    <option value="مرکز" <?php if($getworks->WorkCenter == "مرکز"): ?> selected <?php endif; ?>>مرکز</option>
                                    <option value="کارگاه" <?php if($getworks->WorkCenter == "کارگاه"): ?> selected <?php endif; ?>>کارگاه</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info border-left-info text-white">نام مرکز </span>
                                </div>
                                <input type="text" id="formworktitlecenter" name="formworktitlecenter" value="<?php echo e($getworks->WorkTitleCenter); ?>" class="form-control border-left-info rounded-right">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info border-info text-white">نحوه همکاری</span>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "تمام‌وقت"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_1" value="تمام‌وقت">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_1">تمام‌وقت</label>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "پاره‌وقت"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_2" value="پاره‌وقت">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_2">پاره‌وقت</label>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "پروژه‌ای"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_3" value="پروژه‌ای">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_3">پروژه‌ای</label>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "ساعتی"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_4" value="ساعتی">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_4">ساعتی</label>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "دورکاری"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_5" value="دورکاری">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_5">دورکاری</label>
                                </div>
                                <div>
                                    <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "کارآموزی"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_6" value="کارآموزی">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_6">کارآموزی</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark border-dark text-white">نوع دوره</span>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "زبان"): ?> checked <?php endif; ?> name="formcoursestype" id="formCoursesType_1" value="زبان">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_1">زبان</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "نرم‌افزار"): ?> checked <?php endif; ?> name="formcoursestype" id="formCoursesType_2" value="نرم‌افزار">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_2">نرم‌افزار</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "برنامه نویسی"): ?> checked <?php endif; ?> name="formcoursestype" id="formCoursesType_3" value="برنامه نویسی">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_3">برنامه نویسی</label>
                            </div>
                            <div>
                                <input type="radio" class="ml-5 d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "سایر"): ?> checked <?php endif; ?> name="formcoursestype" id="formCoursesType_4" value="سایر">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_4">سایر</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark border-dark text-white">عنوان دوره (ها)</span>
                            </div>
                            <input type="text" id="formcoursesTitle" name="formcoursestitle" value="<?php echo e($getcourses->CoursesTitle); ?>" placeholder="اگر بیش از یکی بود با خط تیره از هم جدا شود" class="form-control border-left-dark rounded-right">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark border-dark text-white">عنوان موسسه</span>
                            </div>
                            <input type="text" id="formcoursesInstitute" name="formcoursesinstitute" value="<?php echo e($getcourses->CoursesInstitute); ?>" class="form-control border-left-dark rounded-right">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white">عنوان پروژه</span>
                            </div>
                            <input type="text" id="formprojectTitle" name="formprojecttitle" value="<?php echo e($getprojects->ProjectTitle); ?>" class="form-control border-left-info rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white">تاریخ دفاع</span>
                            </div>
                            <input type="text" id="formprojectdate" name="formprojectDate" value="<?php echo e($getprojects->ProjectDate); ?>" class="form-control border-left-info rounded-right" required>
                            <input type="hidden" name="extra2" id="extra2" required>

                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-12 float-left w-100 px-0">
                            <div class="input-group ml-0">
                                <button type="submit" class="btn btn-primary">به روز رسانی</button>
                                <a href="/home" class="btn btn-danger mx-1">بازگشت</a>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>

            </form>
            <br>
            <br>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function() {
        $("#customFile").change(function() {
            $("#updo").val("1");
        });
    });
</script>
<script src="<?php echo e(asset('amib/js-persian-cal.min.js')); ?>"></script>
<?php echo $__env->make('scripts.date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
<?php echo $__env->make('scripts.custom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\mysite\resources\views/form-edit-fast-persian-home.blade.php ENDPATH**/ ?>