 <?php $__env->startSection('title'); ?> فرم ایجاد رزومه سریع <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(asset('amib/js-persian-cal.css')); ?> ">
<link rel="stylesheet" href="<?php echo e(asset('amib/jspc-peach.css')); ?> "> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<style>
@media (max-width: 375px) {
  .mx-width {
    width:350px !important;
  }
}
@media (max-width: 360px) {
  .mx-width {
    width:330px !important;
  }
}
@media (max-width: 320px) {
  .mx-width {
    width:285px !important;
  }
}

.form-control
{
    color:black!important;
    font-weight:bold;
    color:blue !important;
}
.custom-select
{
    color:black!important;
    font-weight:bold;
}
.custom-file-input
{
    color:black!important;
    font-weight:bold;
}
.custom-control-label
{
    color:black!important;
    font-weight:bold;
}

</style>
<div class="container">
    <div class="row">

        <div style="background:white !important;" class="jumbotron bg-light w-100 p-0 p-sm-1 mt-0 mx-3   rounded-lg">
            <br>
            <img class="mx-auto d-block position-relative mx-width" style="top: 13px;" src="<?php echo e(asset('img/title.jpg')); ?>" />
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h6 class="modal-title " >راهنمای ایجاد رزومه سریع فارسی</h6>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <ul>
                      <li>معدل بیست باید به این صورت 20.00 نوشته شود</li>
                      <li>حداکثر اندازه فایل تصویرآواتار برای آپلود 8 مگابایت است.</li>
                      <li>تمام اطلاعات باید به صورت فارسی پر شود.</li>
                      <li>در صورتی که به صورت ایثارگری معاف هستید گزینه معافیت غیر پزشکی رو انتخاب کنید.</li>
                      <li>وب سایت در صورتی ساخته میشود که قالب پولی را انتخاب کنید.</li>
                      <li>پرکردن فیلدهای وب سایت، سوابق شغلی و دوره اختیاری است.</li>
                    </ul>
                    </div>

                  </div>
                </div>
              </div>
                                                  <!-- The Modal -->
<div class="modal" id="MyModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">قوانین عکس پرسنلی</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>1- عکس پرسنلی باید متعلق به خود شخص باشد</p> 
        <p>2- حدااکثر اندازه عکس 2 مگابایت است</p> 
        <p>3- عکس پرسنلی باید تمام رخ باشد</p> 

      </div>



    </div>
  </div>
</div>

<?php if(@$s == 1): ?>
<div class="alert alert-danger alert-dismissible text-center position-fixed p-5 font-weight-bold border-danger w-50 alert-dismissible" style="z-index:2;left: 25%;top:42%;" role="alert">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  این سایت وجود دارد
</div>
<?php endif; ?>
<?php if(@$k == 1): ?>
<div class="alert alert-success alert-dismissible text-center position-fixed p-5 font-weight-bold border-success w-50 alert-dismissible" style="z-index:2;left: 25%;top:42%;" role="alert">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  این سایت وجود ندارد و میتوانید از آن استفاده کنید
</div>
<?php endif; ?>

<div class="modal" id="siteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">بررسی وجود سایت</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/check-website" method="POST">
        <?php echo csrf_field(); ?>

            <input type="text" name="txt-website" class="form-control text-center">
            <button type="submit" class="btn btn-primary mt-3">بررسی</button>
        </form>

      </div>



    </div>
  </div>
</div>
<script>



</script>
            <form method="POST" action="/save-form-cv-fast-persian" enctype="multipart/form-data" class="needs-validation mt-5" novalidate>
                <?php echo csrf_field(); ?>

                <input type="hidden" name="dia" value="1">
                <div class="container">
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6 px-0  float-left">
                        <div class="border-blue rounded p-3 position-relative top-9 bg-section box-custom-shadow">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">اطلاعات پایه</div>
                            <div class="input-group mb-3">
                                    <input type="hidden" value="<?php echo e(@$stat); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-purple border-purple rounded-left text-white" style="height:36px">آواتار</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" id="customFile" name="pic" value="<?php echo e(old('pic')); ?>" required>
                                        <label class="custom-file-label" for="customFile" style="border-top-left-radius: 5px;border-bottom-left-radius: 5px;">یک عکس پرسنلی از خودتان انتخاب کنید</label>
                                    </div>
                                    &nbsp;
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">قوانین</button>
                                    <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک عکس را انتخا کنید.</div>

                            </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple  text-white">نام</span>
                            </div>
                            <input type="hidden" id="formid" name="formid" class="form-control rounded-right border-left-success form-black-color" style="z-index:1" value="<?php echo e($id); ?>"  required>

                            <input type="text" id="formName" name="formName" class="form-control rounded-right border-left-success form-black-color" style="z-index:1"  required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">نام خانوادگی</span>
                            </div>
                            <input type="text" id="formFamily" name="formFamily" value="<?php echo e(old('formFamily')); ?>" class="form-control rounded-right  border-left-success"  required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">وضعیت تاهل</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formMarital" id="formMarital_1"  value="مجرد">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formMarital_1">مجرد</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formMarital" id="formMarital_2"  value="متاهل">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formMarital_2">متاهل</label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">وضعیت سربازی</span>
                            </div>
                            <select class="custom-select rounded-right  border-left-success" name="ّformSoldier" id="ّformSoldier" value="<?php echo e(old('formSoldier')); ?>" required>
                                <option value="">انتخاب کنید</option>
                                <option value="من زن هستم">من زن هستم</option>
                                <option value="مشمول">مشمول</option>
                                <option value="در حال خدمت">در حال خدمت</option>
                                <option value="پایان خدمت">پایان خدمت</option>
                                <option value="معاف">معاف</option>
                                <option value="معافیت تحصیلی">معافیت تحصیلی</option>
                                <option value="معافیت غیرپزشکی">معافیت غیرپزشکی</option>
                            </select>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple border-success text-white">عنوان حرفه</span>
                            </div>
                            <input type="text" id="formWorkTitle" name="formWorkTitle" value="<?php echo e(old('formWorkTitle')); ?>" placeholder="مثال: برنامه نویس وب" class="form-control rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">تاریخ تولد</span>
                            </div>
                            <input type="text" id="formBirthDate" name="formBirthDate" value="<?php echo e(old('formBirthDate')); ?>" maxlength="10" class="form-control rounded-right border-left-success" placeholder="مثال: 1373/2/1" required>
                            <input type="hidden" name="extra" id="extra" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">نشانی ایمیل</span>
                            </div>
                            <input type="text" id="formmail" name="formmail" value="<?php echo e(old('formmail')); ?>" class="form-control text-right rounded-right border-left-success"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا نشانی ایمیل را درست وارد کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">شماره موبایل</span>
                            </div>
                            <input type="text" id="formMobile" name="formMobile" value="<?php echo e(old('formMobile')); ?>" maxlength="13" pattern="(\+98|0)?9\d{9}" placeholder="Example: 09226681982" class="form-control text-right rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت شماره موبایل اشتباه است.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">شماره تلفن</span>
                            </div>
                            <input type="text" id="formTelephone" name="formTelephone" value="<?php echo e(old('formTelephone')); ?>" maxlength="11" pattern="^0\d{2,3}\d{8}$" placeholder="Example: 03537213382" class="form-control text-right rounded-right border-left-success" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا شماره تلفن ثابت را درست وارد کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">وب سایت</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text border-left-success">emza.app.</span>
                            </div>
                            <input type="text" id="formWebsite" name="formWebsite" placeholder="Example: reza-ahmadi" value="<?php echo e(old('formWebsite')); ?>" maxlength="40" pattern="[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?" class="form-control text-right rounded-right " required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت درست نیست</div>
                            <?php if(@$error_site == 1): ?><div class="p-2 bg-danger text-white font-weight-bold rounded">این سایت وجود دارد</div><?php endif; ?>

                        </div>
                    </div>
                        <br>
                <div class="border-blue rounded box-custom-shadow p-3 position-relative top-9 bg-section">
                    <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">مهارت زبان</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">نام زبان</span>
                            </div>
                            <input type="text" id="formLangName" name="formlangname"  value="<?php echo e(old('formlangname')); ?>"  class="form-control border-left-success rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">مهارت نوشتن</span>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <div id="m-leave">
                                    <input type="text" id="formwrittingskill" name="formLangWritingskills" class="formwrittingskill form-control position-absolute onlystar" value="<?php echo e(old('formLangWritingskills')); ?>">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-1" class="m-1 height-width-28" alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-2" class="m-1 height-width-28" alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-3" class="m-1 height-width-28" alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-4" class="m-1 height-width-28" alt="">
                                    <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sw-5" class="m-1 height-width-28" alt="">
                                </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">مهارت خواندن</span>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div id="m-leave-2">
                                <input type="text" id="formreadingskill" name="formLangreadingskills" class="formreadingskill form-control position-absolute onlystar" value="<?php echo e(old('formLangreadingskills')); ?>">
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-1" class="m-1 height-width-28"  alt="">
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-2" class="m-1 height-width-28"  alt="">
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-3" class="m-1 height-width-28"  alt="">
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-4" class="m-1 height-width-28"  alt="">
                                <img src="<?php echo e(asset('img/star-null.png')); ?>" id="sr-5" class="m-1 height-width-28"  alt="">
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                    </div>
                    <br>
                        <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                            <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">مهارت های تجربی</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;لیست</span>
                            </div>
                            <input type="text" id="formSkillsName" name="formskillsname" value="<?php echo e(old('formskillsname')); ?>" class="form-control border-left-primary rounded-right" placeholder="مثال: برنامه نویسی اندروید - فتوشاپ">
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6  float-left">
                    <br class="hide desktop-show">
                <div class="border-blue rounded p-3 box-custom-shadow position-relative top-9 bg-section">
                    <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">اطلاعات تحصیلی</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">مقطع </span>
                            </div>
                            <select class="custom-select border-left-primary rounded-right" id="ّedueection" name="ّedusection" value="<?php echo e(old('formEduSection')); ?>" required>
                                <option value="">انتخاب کنید</option>
                                <option value="زیر دیپلم">زیر دیپلم</option>
                                <option value="دیپلم">دیپلم</option>
                                <option value="فوق دیپلم">فوق دیپلم</option>
                                <option value="کارشناسی">کارشناسی</option>
                                <option value="کارشناسی ارشد">کارشناسی ارشد</option>
                                <option value="دکتری">دکتری</option>
                            </select>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">رشته </span>
                            </div>
                            <input type="text" id="formEduMajor" name="formEduMajor" value="<?php echo e(old('formEduMajor')); ?>" placeholder="مثال: مهندسی کامپیوتر" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">گرایش </span>
                            </div>
                            <input type="text" id="formEduOrientation" name="formEduOrientation" value="<?php echo e(old('formEduOrientation')); ?>" placeholder="مثال: نرم افزار" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">نام محل تحصیل</span>
                            </div>
                            <input type="text" id="formEduLnstitute" name="formEduLnstitute" value="<?php echo e(old('formEduLnstitute')); ?>" placeholder="مثال: موسسه آموزش عالی امام جواد یزد" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">معدل</span>
                            </div>
                            <input type="text" id="formEduAverage" name="formEduAverage" value="<?php echo e(old('formEduAverage')); ?>" maxlength="5" placeholder="مثال: 17.77" pattern="[1-2][0-9].[0-9][0-9]" class="form-control border-left-primary rounded-right" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">فرمت اشتباه است.</div>
                        </div>
                </div>
                        <br>
                <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                    <div class="badge-pill position-relative  bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">سوابق شغلی</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;سمت  </span>
                            </div>
                            <input type="text" id="formWorkpost" name="formWorkpost" value="<?php echo e(old('formWorkpost')); ?>" placeholder="مثال: برنامه نویسی ظاهر وب" class="form-control border-left-info rounded-right">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;مرکز اشتغال</span>
                            </div>
                            <select class="custom-select border-left-info rounded-right" name="formWorkcenter" id="formWorkcenter" value="<?php echo e(old('FormEduSection')); ?>">
                                <option value="">انتخاب کنید</option>
                                <option value="شرکت">شرکت </option>
                                <option value="موسسه">موسسه </option>
                                <option value="سازمان / نهاد">سازمان / نهاد </option>
                                <option value="خود اشتغال">خود اشتغال </option>
                                <option value="فریلسنر">فریلسنر </option>
                                <option value="بیمارستان">بیمارستان </option>
                                <option value="بیمارستان روانی"> بیمارستان روانی </option>
                                <option value="مرکز درمانی">مرکز درمانی </option>
                                <option value="کلینیک">کلینیک </option>
                                <option value="فروشگاه">فروشگاه </option>
                                <option value="بنیاد">بنیاد </option>
                                <option value="دانشگاه">دانشگاه </option>
                                <option value="مدرسه">مدرسه </option>
                                <option value="حوزه علمیه">حوزه علمیه</option>
                                <option value="آموزشگاه">آموزشگاه </option>
                                <option value="مرکز">مرکز </option>
                                <option value="کارگاه">کارگاه </option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;نام مرکز </span>
                            </div>
                            <input type="text" id="formworktitlecenter" name="formworktitlecenter" placeholder="مثال: سپهرسلامت" value="<?php echo e(old('formworktitlecenter')); ?>" class="form-control border-left-info rounded-right">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;نحوه همکاری</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_1" value="تمام‌وقت">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_1">تمام‌وقت</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_2" value="پاره‌وقت">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_2">پاره‌وقت</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_3" value="پروژه‌ای">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_3">پروژه‌ای</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_4" value="ساعتی">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_4">ساعتی</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_5" value="دورکاری">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_5">دورکاری</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formworkcooperation" id="formworkcooperation_6" value="کارآموزی">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_6">کارآموزی</label>
                            </div>
                        </div>
                    </div>
                        <br>
                <div class="border-blue rounded box-custom-shadow p-3 position-relative top-9 bg-section">
                    <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">دوره‌های آموزشی</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;نوع </span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formcoursestype" id="formCoursesType_1" value="زبان">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_1">زبان</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formcoursestype" id="formCoursesType_2" value="نرم‌افزار">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_2">نرم‌افزار</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formcoursestype" id="formCoursesType_3" value="برنامه نویسی">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_3">برنامه‌نویسی</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="shadow custom-control-input ml-1 pt-2 d-flex d-inline-flex align-self-center position-relative top-3" name="formcoursestype" id="formCoursesType_4" value="سایر">
                                <label class="custom-control-label ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formCoursesType_4">سایر</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;دوره [ها]</span>
                            </div>
                            <input type="text" id="formCoursesTitle" name="formcoursestitle" value="<?php echo e(old('formcoursestitle')); ?>"  placeholder="مثال: لاراول - جاوااسکریپت" class="form-control border-left-dark rounded-right">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white"><div class="rounded-circle optional-circle" style="top: 0px;"></div>&nbsp;&nbsp;عنوان موسسه</span>
                            </div>
                            <input type="text" id="formCoursesInstitute" name="formcoursesinstitute" value="<?php echo e(old('formcoursesinstitute')); ?>" placeholder="مثال: وب سایت راکت" class="form-control border-left-dark rounded-right">
                        </div>
                </div>
            </br>
            <div class="border-blue box-custom-shadow rounded p-3 position-relative top-9 bg-section">
                <div class="badge-pill position-relative bg-blue w-50 text-center text-white p-1 left-100" style="top:-20px">پایان نامه</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">عنوان پروژه</span>
                            </div>
                            <input type="text" id="formProjectTitle" name="formprojecttitle" value="<?php echo e(old('formprojecttitle')); ?>" class="form-control border-left-info rounded-right" placeholder="مثال: طراحی و پیاده سازی سامانه مدیریت داروخانه  " required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-purple border-purple text-white">تاریخ دفاع</span>
                            </div>
                            <input type="text" id="formprojectDate" name="formprojectdate" value="<?php echo e(old('formprojectdate')); ?>" class="form-control border-left-info rounded-right" placeholder="مثال : 1397/7/7" required>
                            <input type="hidden" name="extra2" id="extra2" required>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا این فیلد را پر کنید.</div>
                        </div>
                    </div>
                </div>

            </br>
                <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-12 float-right rounded" style="padding-right:32px;padding-left:32px">
                    <br>
                    <p style="font-weight:bold !important;">نکته: فیلد هایی که نقاط سفید رنگ در آنها قرارداده شده اختیاری هستند.</p>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="formterms" name="formterms" required>
                            <label  class="custom-control-label" for="formterms"> شرایط و <a href="/terms" target="_blank">قوانین</a> استفاده از این سامانه را مطالعه کرده و آن را میپذیرم.</label>
                        </div>
                    <br>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary">ذخیره سازی و ادامه</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/bootstrap4.4.1.js')); ?>"></script>
<script src="<?php echo e(asset('amib/js-persian-cal.min.js')); ?>"></script>
<?php echo $__env->make('scripts.date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
<?php echo $__env->make('scripts.custom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('scripts.stars', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/form-fast-persian.blade.php ENDPATH**/ ?>