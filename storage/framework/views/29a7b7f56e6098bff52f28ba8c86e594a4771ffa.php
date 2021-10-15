<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>امضا : پنل مدیریت</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/uikit.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/themes/basic/assets/fonts/font.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/admin/final-very-small.png')); ?>">
    <script src="<?php echo e(asset('js/uikit/uikit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/uikit/uikit-icons.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/rtl.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/button.css')); ?>" />
    <link  rel="stylesheet" href="<?php echo e(asset('Semantic-UI-1.0/dist/components/icon.css')); ?>" />
    <script src="<?php echo e(asset('Semantic-UI-1.0/dist/semantic.min.js')); ?>"></script>

    <style>
    *{
        font-size:13px;
    }
    .p-10{
        padding: 10px !important;
    }
    .p-32-right{
        padding-right: 32px !important;
    }
    a {
        text-decoration: none;
        color:black;
        font-weight:bold;
        font-size:13px;
    }
    .top-3{
    position: relative !important;
    top: 3px !important;
    }
    a:hover {
        text-decoration: none;
        color:darkblue;
        font-weight:bold;
    }
    </style>
</head>
<body>
<!-- This is the modal -->
<div id="modal-avatar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <img style="width:320px;height:410px;" uk-toggle="target: #modal-avatar" class="uk-align-center"  src="<?php echo e(asset($getbases->BaseAvatar)); ?>" alt="">
    <button class="uk-button uk-button-default uk-modal-close uk-align-center" type="button" uk-toggle="target: #modal-d">بستن کادر</button>
    </div>
</div>

<div class="uk-container uk-margin-medium uk-margin-auto" style="width: 850px;">
<table style="direction:rtl;" class="ui orange table">
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->BaseName); ?></td>
            <td class="uk-text-bolder uk-text-left">Name</td>
            <td class="uk-text-left"><a class="mini ui inverted blue button" uk-toggle="target: #modal-avatar" >Show</a></td>
            <td class="uk-text-bolder uk-text-left">Avatar</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->BaseMarital); ?></td>
            <td class="uk-text-bolder uk-text-left">Marital status</td>
            <td class="uk-text-left"><?php echo e($getbases->BaseFamily); ?></td>
            <td class="uk-text-bolder uk-text-left">Family</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->BaseSolider); ?></td>
            <td class="uk-text-bolder uk-text-left">Military service situation</td>
            <td class="uk-text-left"><?php echo e($getbases->BaseWorkTitle); ?></td>
            <td class="uk-text-bolder uk-text-left">Title of profession</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->BaseEmail); ?></td>
            <td class="uk-text-bolder uk-text-left">Email</td>
            <td class="uk-text-left"><?php echo e($getbases->BaseBirthdate); ?></td>
            <td class="uk-text-bolder uk-text-left">Date of birth</td>

          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->BaseMobile); ?></td>
            <td class="uk-text-bolder uk-text-left">Mobile</td>
            <td class="uk-text-left"><?php echo e($getbases->BaseTel); ?></td>
            <td class="uk-text-bolder uk-text-left">Telephone</td>
          </tr>
          <tr>
          <td class="uk-text-left"><?php echo e($getlangs->LangName); ?></td>
          <td class="uk-text-bolder uk-text-left">Language name</td>
          <td class="uk-text-left"><?php echo e($getbases->BaseWebsite); ?></td>
          <td class="uk-text-bolder uk-text-left">Website</td>
          </tr>
          <tr>
            <td class="uk-text-left uk-text-left">
            <?php for($i=0;$i<$getlangs->LangReadingskills;$i++): ?>
            <i class="orange star icon icon-semantic"></i>
            <?php endfor; ?>
            </td>
            <td class="uk-text-bolder uk-text-left">Reading skills</td>

            <td class="uk-text-left uk-text-left"> 
            <?php for($i=0;$i<$getlangs->LangWritingskills;$i++): ?>
            <i class="orange star icon icon-semantic"></i>
            <?php endfor; ?>
            </td >
            <td class="uk-text-bolder uk-text-left">Writing skills</td>


          </tr>
          <tr>
            <td class="uk-text-left"></td>
            <td class="uk-text-bolder uk-text-left">Speech skills</td>
            <td class="uk-text-left"></td>
            <td class="uk-text-bolder uk-text-left">Listening skills</td>

          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getedus->EduSection); ?></td>
            <td class="uk-text-bolder uk-text-left">Grade</td>
            <td class="uk-text-left"><?php echo e($getskills->SkillsName); ?></td>
            <td class="uk-text-bolder uk-text-left">Experimental skills</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getedus->EduOrientation); ?></td>
            <td class="uk-text-bolder uk-text-left">Orientation</td>
            <td class="uk-text-left"><?php echo e($getedus->EduMajor); ?></td>
            <td class="uk-text-bolder uk-text-left">Major</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getedus->EduAverage); ?></td>
            <td class="uk-text-bolder uk-text-left">GPA</td>
            <td class="uk-text-left"><?php echo e($getedus->EduLnstitute); ?></td>
            <td class="uk-text-bolder uk-text-left">Name of institution or university</td>
          </tr>
          <tr>
          <td class="uk-text-left"><?php echo e($getworks->WorkCenter); ?> <?php echo e($getworks->WorkTitleCenter); ?> </td>
          <td class="uk-text-bolder uk-text-left">Job Experience - Employment Center</td>
          <td class="uk-text-left"><?php echo e($getworks->WorkPost); ?></td>
          <td class="uk-text-bolder uk-text-left">Job records - job position</td>
          </tr>
          <tr>
          <td class="uk-text-left"><?php echo e($getcourses->CoursesType); ?></td>
          <td class="uk-text-bolder uk-text-left">Course - Type of course</td>
          <td class="uk-text-left"><?php echo e($getworks->WorkCooperation); ?></td>
          <td class="uk-text-bolder uk-text-left">Career history - how to work together</td>
          </tr>
          <tr>
          <td class="uk-text-left"><?php echo e($getcourses->CoursesInstitute); ?></td>
          <td class="uk-text-bolder uk-text-left">Course - Institute Title</td>
          <td class="uk-text-left"><?php echo e($getcourses->CoursesTitle); ?></td>
          <td class="uk-text-bolder uk-text-left">Course - Course Title</td>
          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getprojects->ProjectTitle); ?></td>
            <td class="uk-text-bolder uk-text-left">Project Title</td>
            <td class="uk-text-left"><?php echo e($getprojects->ProjectDate); ?></td>
            <td class="uk-text-bolder uk-text-left">Project defense date</td>
          </tr>
          <tr>
          <td class="uk-text-left"><?php echo e($updated_at); ?></td>
          <td class="uk-text-bolder uk-text-left">Resume Editing Date</td>

            <td class="uk-text-left"><?php echo e($created_at); ?></td>
          <td class="uk-text-bolder uk-text-left">Date of resume creation</td>


          </tr>
          <tr>
            <td class="uk-text-left"><?php echo e($getbases->Status); ?></td>
            <td class="uk-text-bolder uk-text-left">Resume status</td>
            <td class="uk-text-left">1000<?php echo e($getbases->Baseid); ?></td>
            <td class="uk-text-bolder uk-text-left">Resume number</td>
          </tr>
        </table> 
        <button onclick="window.history.back();" class="ui primary button" style="display:block;margin:0 auto;font-weight:100">
          Back
        </button>
</div>

</body>
</html>











<?php /**PATH /home/emzaapp1/mysite/resources/views/admin/en-cv-detail.blade.php ENDPATH**/ ?>