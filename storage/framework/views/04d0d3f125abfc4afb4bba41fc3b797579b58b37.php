 <?php $__env->startSection('title'); ?> Quick English CV Edition Form <?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(asset('amib/js-persian-cal.css')); ?> ">
<link rel="stylesheet" href="<?php echo e(asset('amib/jspc-peach.css')); ?> "> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div style="border-width: 2px !important;" class="jumbotron bg-light w-100 mt-5 mx-3 border border-info rounded-lg">
            <h5 class="text-center">Quick English CV Edition Form</h5>


            <!-- Modal -->
            <div class="modal" id="mymodal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Avatar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/delete-image-avatar-en" enctype="multipart/form-data" class="needs-validation mt-5" novalidate>
                            <?php echo csrf_field(); ?>

                            <img src="<?php echo e(asset($getbases->BaseAvatar)); ?>" name="fileAvatar" alt="Avatar in website" width="300" height="400" class="mx-auto d-block border border-primary">
                            <input type="hidden" name="imageAvatar" value="<?php echo e($getbases->BaseAvatar); ?>" />
                            <button type="submit" class="btn btn-danger d-block mx-auto m-3 w-25 p-2">Delete</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>


            <form method="POST" action="/update-form-cv-fast-english-home" enctype="multipart/form-data" class="needs-validation mt-5" novalidate>
                <?php echo csrf_field(); ?>

                <input type="hidden" value="<?php echo e($id); ?>" id="formId" name="formId">
                <input type="hidden" name="dia" value="2">
                <div class="container">
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6  float-right">
                        <div class="input-group mb-3">
                        <div class="input-group mb-3">
                                <!-- Button trigger modal -->
                                <button type="button" style="height:35px;" class="btn btn-primary mr-1" data-toggle="modal" data-target="#mymodal20">
                                    Show image
                                </button>




                                <div class="custom-file">
                                        <input type="hidden" name="formImage" value="<?php echo e($getbases->BaseAvatar); ?>" />
                                        <input type="hidden" name="updo" id="updo" value="0" />
                                        <input type="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" id="customFile" name="avatar">
                                        <label class="custom-file-label" for="customFile" style="" ><?php echo e($getbases->BaseAvatar); ?></label>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success border-success  text-white rounded-right" style="height:36px">Avatar</span>
                                </div>
                                <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">Please select an image.</div>
                        </div>
                            <input type="text" id="formName" name="formName" value="<?php echo e($getbases->BaseName); ?>" class="form-control rounded-left  text-right" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success rounded-right text-white">Name</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formFamily" name="formFamily" value="<?php echo e($getbases->BaseFamily); ?>" class="form-control rounded-left text-right border-left-success" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success rounded-right text-white">Family</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-end">
                            <div>
                                <label class="mt-2 d-flex d-inline-flex align-self-center" for="formMarital_2">Married</label>
                                <input type="radio" class="mr-5 pt-2 d-flex d-inline-flex align-self-center position-relative" style="top:2px" <?php if($getbases->BaseMarital == "Marital"): ?> checked <?php endif; ?> name="formMarital" id="formMarital_2" value="Marital">
                            </div>
                            <div>
                                <label class="mt-2 d-flex d-inline-flex align-self-center" for="formMarital_1">Single</label>
                                <input type="radio" class="mr-5 pt-2 d-flex d-inline-flex align-self-center position-relative" style="top:2px" <?php if($getbases->BaseMarital == "Single"): ?> checked <?php endif; ?> name="formMarital" id="formMarital_1" value="Single" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white rounded-right">Marital Status</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please select an option</div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="custom-select rounded-left  border-left-success" name="ّformSoldier" id="ّformSoldier" value="<?php echo e(old('formSoldier')); ?>" style="direction:ltr !important;" required>
                                <option value="">Select</option>
                                <option value="Included" <?php if($getbases->BaseSolider == "Included"): ?> selected <?php endif; ?>>Included</option>
                                <option value="Being a soldier" <?php if($getbases->BaseSolider == "Being a soldier"): ?> selected <?php endif; ?>>Being a soldier</option>
                                <option value="End of military service" <?php if($getbases->BaseSolider == "End of military service"): ?> selected <?php endif; ?>>End of military service</option>
                                <option value="Exempt" <?php if($getbases->BaseSolider == "Exempt"): ?> selected <?php endif; ?> >Exempt</option>
                                <option value="Education pardon" <?php if($getbases->BaseSolider == "Education pardon"): ?> selected <?php endif; ?> >Education pardon</option>
                                <option value="Non-medical exemptions" <?php if($getbases->BaseSolider == "Non-medical exemptions"): ?> selected <?php endif; ?>>Non-medical exemptions</option>
                            </select>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white rounded-right">Soldier Status</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please select an option</div>
                        </div>
                        <div class="input-group mb-3">
                                <input type="text" id="formWorkTitle" name="formWorkTitle" value="<?php echo e($getbases->BaseWorkTitle); ?>" placeholder="Example: Web programmer" class="form-control rounded-left text-right border-left-success" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success  border-success text-white rounded-right">Profession Title</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="Date" id="formBirthDate-en" name="formBirthDate" value="<?php echo e($getbases->BaseBirthdate); ?>" maxlength="10" class="form-control rounded-left text-right border-left-success" required>
                            <input type="hidden" name="extra" id="extra" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white  rounded-right">BirthDate</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formmail" name="formmail" value="<?php echo e($getbases->BaseEmail); ?>" class="form-control text-right rounded-left border-left-success" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white rounded-right">Email</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please enter the email address correctly</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formMobile" name="formMobile" value="<?php echo e($getbases->BaseMobile); ?>" maxlength="13" pattern="(\+98|0)?9\d{9}" class="form-control text-right rounded-left border-left-success" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white rounded-right">Mobile</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Mobile number format is incorrect</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formTelephone" name="formTelephone" value="<?php echo e($getbases->BaseTel); ?>" maxlength="11" pattern="^0\d{2,3}\d{8}$" class="form-control text-right rounded-left border-left-success" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success border-success text-white rounded-right">Telephone</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please enter the landline number correctly</div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-left-success">emza.ir.</span>
                            </div>
                            <input type="text" id="formWebsite" name="formWebsite" value="<?php echo e($getbases->BaseWebsite); ?>" maxlength="40" pattern="[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?" class="form-control text-right rounded-left ">
                            <div class="input-group-prepend">
                                    <span class="input-group-text bg-success border-success text-white rounded-right">Website</span>
                                </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">The format is not correct</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formLangName" name="formlangname" value="<?php echo e($getlangs->LangName); ?>" class="form-control border-left-success text-right rounded-left" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white  rounded-right">Language Name</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3" style="direction:ltr">
                                <div class="input-group-prepend " >
                                        <span class="input-group-text bg-info border-info text-white rounded-right">Writing skills</span>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangWritingskills == 1): ?> checked <?php endif; ?> value="1" name="formLangWritingskills" id="formLangWritingskills_1" value="1" required>
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_1">Very low</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangWritingskills == 2): ?> checked <?php endif; ?> value="2" name="formLangWritingskills" id="formLangWritingskills_2" value="2">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_2">Low</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangWritingskills == 3): ?> checked <?php endif; ?> value="3" name="formLangWritingskills" id="formLangWritingskills_3" value="3">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_3">Medium</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangWritingskills == 4): ?> checked <?php endif; ?> value="4" name="formLangWritingskills" id="formLangWritingskills_4" value="4">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_4">High</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangWritingskills == 5): ?> checked <?php endif; ?> value="5" name="formLangWritingskills" id="formLangWritingskills_5" value="5">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangWritingskills_5">Very High</label>
                                    </div>
                            &nbsp;



                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3" style="direction:ltr">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right" >Reading skills</span>
                            </div>
                            <div class="mr-4">
                                <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangReadingskills == 1): ?> checked <?php endif; ?> name="formLangreadingskills" id="formLangReadingskills_1" value="1" required>
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_1">Very low</label>
                            </div>
                            <div class="mr-4">
                                <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangReadingskills == 2): ?> checked <?php endif; ?> name="formLangreadingskills" id="formLangReadingskills_2" value="2">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_2">Low</label>
                            </div>
                            <div class="mr-4">
                                <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangReadingskills == 3): ?> checked <?php endif; ?> name="formLangreadingskills" id="formLangReadingskills_3" value="3">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_3">Mediun</label>
                            </div>
                            <div class="mr-4">
                                <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangReadingskills == 4): ?> checked <?php endif; ?> name="formLangreadingskills" id="formLangReadingskills_4" value="4">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_4">High</label>
                            </div>
                            <div class="mr-4">
                                <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getlangs->LangReadingskills == 5): ?> checked <?php endif; ?> name="formLangreadingskills" id="formLangReadingskills_5" value="5">
                                <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formLangReadingskills_5">Very High</label>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-white font-weight-bold rounded">لطفا یک گزینه را انتخاب کنید</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formSkillsName" name="formskillsname" value="<?php echo e($getskills->SkillsName); ?>"  class="form-control border-left-primary rounded-left text-right" placeholder="Separate skills with dashes">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right ">Experimental Skills</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-sm-100 w-lg-50 col-sm-12 col-md-12 col-lg-6  float-left">
                        <div class="input-group mb-3">
                            <select class="custom-select border-left-primary rounded-left" style="direction:ltr;" id="ّedueection" name="ّedusection"  value="<?php echo e(old('formEduSection')); ?>" required>
                                <option value="">Select</option>
                                <option value="High school" <?php if($getedus->EduSection == "High school"): ?> selected <?php endif; ?>>High school</option>
                                <option value="Diploma" <?php if($getedus->EduSection == "Diploma"): ?> selected <?php endif; ?>>Diploma</option>
                                <option value="Associate Degree"  <?php if($getedus->EduSection == "Associate Degree"): ?> selected <?php endif; ?>>Associate Degree</option>
                                <option value="Bachelor" <?php if($getedus->EduSection == "Bachelor"): ?> selected <?php endif; ?>>Bachelor</option>
                                <option value="Masters"  <?php if($getedus->EduSection == "Masters"): ?> selected <?php endif; ?>>Masters</option>
                                <option value="P.H.D"  <?php if($getedus->EduSection == "P.H.D"): ?> selected <?php endif; ?>>P.H.D</option>
                            </select>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right">Grade</span>
                            </div>

                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formEduMajor" name="formEduMajor" value="<?php echo e($getedus->EduMajor); ?>" style="direction:ltr !important;" class="form-control border-left-primary rounded-left" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right">Major</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formEduOrientation" name="formEduOrientation" value="<?php echo e($getedus->EduOrientation); ?>" class="form-control border-left-primary text-right rounded-left" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right">Tendency</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formEduLnstitute" name="formEduLnstitute" value="<?php echo e($getedus->EduLnstitute); ?>" class="form-control border-left-primary rounded-left text-right" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right">Educational institution</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formEduAverage" name="formEduAverage" value="<?php echo e($getedus->EduAverage); ?>" maxlength="5" pattern="[1-2][0-9].[0-9][0-9]" class="form-control border-left-primary rounded-left text-right" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary border-primary text-white rounded-right">GPA</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="border border-dark rounded p-2 position-relative top-9">
                            <div class="badge-pill position-relative bg-secondary w-50 text-center text-white" style="top:-20px;right: 200px;">work experience</div>
                        <div class="input-group mb-3">
                            <input type="text" id="formWorkpost" name="formWorkpost" value="<?php echo e($getworks->WorkPost); ?>" class="form-control border-left-info rounded-left text-right">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right">Job Post</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                                <select class="custom-select border-left-info rounded-left" name="formWorkcenter" id="formWorkcenter" style="direction:ltr !important;" value="<?php echo e(old('FormEduSection')); ?>">
                                        <option value="">Select</option>
                                        <option value="Company" <?php if($getworks->WorkCenter == "Company"): ?> selected <?php endif; ?>>Company</option>
                                        <option value="Institute" <?php if($getworks->WorkCenter == "Institute"): ?> selected <?php endif; ?>>Institute</option>
                                        <option value="Organization" <?php if($getworks->WorkCenter == "Organization"): ?> selected <?php endif; ?>>Organization</option>
                                        <option value="Self_employment" <?php if($getworks->WorkCenter == "Self_employment"): ?> selected <?php endif; ?>>Self_employment</option>
                                        <option value="Freelancer" <?php if($getworks->WorkCenter == "Freelancer"): ?> selected <?php endif; ?>>Freelancer</option>
                                        <option value="Hospital" <?php if($getworks->WorkCenter == "Hospital"): ?> selected <?php endif; ?>>Hospital</option>
                                        <option value="Mental Hospital" <?php if($getworks->WorkCenter == "Mental Hospital"): ?> selected <?php endif; ?>>Mental Hospital</option>
                                        <option value="Medical center" <?php if($getworks->WorkCenter == "clinic"): ?> selected <?php endif; ?>>Clinic</option>
                                        <option value="clinic" <?php if($getworks->WorkCenter == "Medical center"): ?> selected <?php endif; ?>>Medical center</option>
                                        <option value="Store" <?php if($getworks->WorkCenter == "Store"): ?> selected <?php endif; ?>>Store</option>
                                        <option value="Foundation" <?php if($getworks->WorkCenter == "Foundation"): ?> selected <?php endif; ?>>Foundation</option>
                                        <option value="University" <?php if($getworks->WorkCenter == "University"): ?> selected <?php endif; ?>>University</option>
                                        <option value="School" <?php if($getworks->WorkCenter == "School"): ?> selected <?php endif; ?>>School</option>
                                        <option value="educational institutions" <?php if($getworks->WorkCenter == "educational institutions"): ?> selected <?php endif; ?>>Educational institutions</option>
                                        <option value="Center" <?php if($getworks->WorkCenter == "Center"): ?> selected <?php endif; ?>>Center</option>
                                        <option value="Workshop" <?php if($getworks->WorkCenter == "Workshop"): ?> selected <?php endif; ?>>Workshop</option>
                                    </select>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right">Employment Center</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formworktitlecenter" name="formworktitlecenter" value="<?php echo e($getworks->WorkTitleCenter); ?>" class="form-control border-left-info rounded-left text-right">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right">Name of the center</span>
                            </div>
                        </div>
                        <div class="input-group" style="direction:ltr;">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded">How to cooperate</span>
                            </div>
                            <div class="mr-4">
                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "Full time"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_1" value="Full time" required>
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_1">Full time</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "Part time"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_2" value="Part time">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_2">Part time</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "A project"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_3" value="A project">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_3">A project</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "Hour"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_4" value="Hour">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_4">Hour</label>
                                </div>
                                <div class="mr-4">
                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "Telework"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_5" value="Telework">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_5">Telework</label>
                                </div>
                                <div class="mr-4">

                                    <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getworks->WorkCooperation == "The internship"): ?> checked <?php endif; ?> name="formworkcooperation" id="formworkcooperation_6" value="The internship">
                                    <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formworkcooperation_6">The internship</label>
                                </div>
                        &nbsp;
                        </div>
                    </div>

                    <br>
                        <div class="input-group mb-3 " style="direction:ltr;">
                                <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark border-dark text-white rounded-right">Course type</span>
                                </div>
                                <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "Language"): ?> checked <?php endif; ?> name="formcoursestype" id="formcoursestype_1" value="Language" required>
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formcoursestype_1">Language</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "Programming"): ?> checked <?php endif; ?> name="formcoursestype" id="formcoursestype_2" value="Programming">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formcoursestype_2">Programming</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "software"): ?> checked <?php endif; ?> name="formcoursestype" id="formcoursestype_3" value="software">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formcoursestype_3">software</label>
                                    </div>
                                    <div class="mr-4">
                                        <input type="radio" class="d-flex d-inline-flex align-self-center position-relative top-3" <?php if($getcourses->CoursesType == "Others"): ?> checked <?php endif; ?> name="formcoursestype" id="formcoursestype_4" value="Others">
                                        <label class="ml-2 mt-2 d-flex d-inline-flex align-self-center" for="formcoursestype_4">Others</label>
                                    </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formCoursesTitle" name="formcoursestitle"  value="<?php echo e($getcourses->CoursesTitle); ?>" placeholder="If more than one, it will be separated by a dash" class="form-control border-left-dark rounded-left text-right">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark border-dark text-white rounded-right">Courses Title</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formCoursesInstitute" name="formcoursesinstitute" value="<?php echo e($getcourses->CoursesInstitute); ?>" class="form-control border-left-dark rounded-left text-right">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark border-dark text-white rounded-right">Institute title</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="formProjectTitle" value="<?php echo e($getprojects->ProjectTitle); ?>" name="formprojecttitle" class="form-control border-left-info rounded-left text-right" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right">Project Title</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" id="formProjectdate" value="<?php echo e($getprojects->ProjectDate); ?>" name="formprojectDate" class="form-control border-left-info rounded-left text-right" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info border-info text-white rounded-right">Project Date</span>
                            </div>
                            <div class="invalid-feedback p-2 bg-danger text-right text-white font-weight-bold rounded">Please fill in this field</div>
                        </div>
                        <div class="input-group mb-3" style="direction:ltr;">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="/home" class="btn btn-danger mx-1">Back</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>
<script>
        $(document).ready(function(){
            $("#customFile").change(function(){
                $("#updo").val("1");
            });
        });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="<?php echo e(asset('js/bootstrap4.4.1.js')); ?>"></script>
<script src="<?php echo e(asset('js/bundle.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/form-edit-fast-english-home.blade.php ENDPATH**/ ?>