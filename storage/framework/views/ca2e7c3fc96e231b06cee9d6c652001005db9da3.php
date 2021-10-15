
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?php echo e(asset($getbases->BaseAvatar)); ?>"  sizes="16x16">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link href="<?php echo e(asset('fonts/vaziren/font.css')); ?>" rel="stylesheet">
    <title> Website  <?php echo e($getbases->BaseName); ?> <?php echo e($getbases->BaseFamily); ?> </title>
    <style>
        .box {
            width: 981px;
            height: 1307px;
            background: #ecf0f1;
            display: block;
            margin: 120px auto;
        }
        .checked {
          color: orange;
        }
        .headbox {
            width: 307px;
            height: 24px;
            padding: 10px;
            text-align: center;
            display: block;
            margin: 0 auto;
            color: white;
            font-size: 16px;
        }
        .subtext
        {
            color: white;
            text-align: left;
            font-size: 14px;
            direction: ltr;
            color: black;
            font-weight: bold;
        }
        .fa
        {
                font: normal normal normal 18px/1 FontAwesome !important;
        }
        .bluecolor
        {
            color:blue !important;
        }
        .pbox
        {
                padding: 29px;
                margin: 20px;
                margin-top: 32px;
                background: white;
                border-radius: 7px;   
                height:180px;
                position:relative;
                top:-10px;
        }

        .ex
        {
                background: white;
                border: 1px solid black;
                border-top-left-radius: 10px;
                border-bottom-right-radius: 10px;
                padding: 10px;
                float: left;
                margin-left: 15px;
                margin-top: 15px;
                font-weight: bold;
                
        }
        body {
            background: linear-gradient(-45deg, #ffdd8b, #b7ffb9, #aac9ff, #e0d0ff);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        @keyframes    gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        img {
            margin: 38px auto;
            display: block;
            border-style: ridge;
        }
        
        .boxp {
            width: 327px;
            height: 327px;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="box">
        <div id="L3" class="boxp" style="background: #1abc9c;">
            <div class="headbox" style="background: #169c82;">Avatar</div>
            <div><img width="200" height="200px" src="<?php echo e(asset($getbases->BaseAvatar)); ?>" /></div>
        </div>
        <div id="L2" class="boxp" style="background: #16a085;left:327px;top: -327px;">
            <div class="headbox" style="background: #11806a;">Base Information</div>
            <div class="pbox">
            <p class="subtext">Name : <span class="bluecolor"><?php echo e($getbases->BaseName); ?></span></p>
            <p class="subtext">Family : <span class="bluecolor"><?php echo e($getbases->BaseFamily); ?></span></p>
            <p class="subtext">Marital status : <span class="bluecolor"><?php echo e($getbases->BaseMarital); ?></span></p>
            <p class="subtext">Military status : <span class="bluecolor"><?php echo e($getbases->BaseSolider); ?></span></p>
            </div>
        </div>
        <div id="L1" class="boxp" style="background: #f1c40f;left: 654px;top: -654px;">
            <div class="headbox" style="background: #d0a90d;">Contacts</div>
            
            <div class="pbox">
            <p class="subtext">Mobile  : <span class="bluecolor"><?php echo e($getbases->BaseMobile); ?></span></p>
            <p class="subtext">Telephone : <span class="bluecolor"><?php echo e($getbases->BaseTel); ?></span></p>
            <p class="subtext">Email : <span class="bluecolor"><?php echo e($getbases->BaseEmail); ?></span></p>
            </div>
        </div>


        <div id="L4" class="boxp" style="background: #e67e22;left:0px;top: -654px;">
            <div class="headbox" style="background: #c16a1d;">Language</div>
            <div class="pbox">
            <p class="subtext">Language name : <span class="bluecolor"><?php echo e($getlang->LangName); ?></span></p>
            <p class="subtext">Writing skills : &nbsp;    
                            <?php for($i=0;$i<$getlang->LangWritingskills;$i++): ?>
                                <span class="fa fa-star checked"></span> 
                            <?php endfor; ?>
                            <?php for($j=5;$j>$i;$j--): ?>
                               <span class="fa fa-star"></span>                                   
                            <?php endfor; ?>
            <p class="subtext">Reading skills : 
                            <?php for($i=0;$i<$getlang->LangReadingskills;$i++): ?>
                                <span class="fa fa-star checked"></span> 
                            <?php endfor; ?>
                            <?php for($j=5;$j>$i;$j--): ?>
                               <span class="fa fa-star"></span>                                   
                            <?php endfor; ?>
            </p> </p>
            </div>
        </div>
        <div id="L5" class="boxp" style="background: #27ae60;left: 327px;top: -981px;">
            <div class="headbox" style="background: #1f864a;">Skills</div>
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="ex"><?php echo e($skill); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    </div>
        <div id="L6" class="boxp" style="background: #f39c12;left: 654px;top: -1308px;">
            <div class="headbox" style="background: #cc8311;">Education</div>
            <div class="pbox">
            <div style="
    position: relative;
    top: -19px;
">
            <p class="subtext">Section : <span class="bluecolor"><?php echo e($getedu->EduSection); ?></span></p>
            <p class="subtext">Major : <span class="bluecolor"><?php echo e($getedu->EduMajor); ?></span>  </p>
            <p class="subtext">Orientation : <span class="bluecolor"><?php echo e($getedu->EduOrientation); ?></span> </p>
            <p class="subtext">Institute : <span class="bluecolor"><?php echo e($getedu->EduLnstitute); ?></span>     </p>
            <p class="subtext">GPA :  <span class="bluecolor"><?php echo e($getedu->EduAverage); ?></span> of 20</p>
            </div>
            </div>
        </div>
        <div id="L7" class="boxp" style="background: #8e44ad;left:0px;top: -1308px;">
            <div class="headbox" style="background: #693380;">Work experience</div>
            <div class="pbox">
            <p class="subtext">Post : <span class="bluecolor"><?php echo e($getwork->WorkPost); ?></span>   </p>
            <p class="subtext">Type of center :  <span class="bluecolor"><?php echo e($getwork->WorkCenter); ?></span> </p>
            <p class="subtext">Name of the center : <span class="bluecolor"><?php echo e($getwork->WorkTitleCenter); ?></span> </p>
            <p class="subtext">How to collaborate : <span class="bluecolor"><?php echo e($getwork->WorkCooperation); ?></span></p>
            </div>
        </div>

        <div id="L9" class="boxp" style="background: #2980b9;left: 327px;top: -1635px;">
            <div class="headbox" style="background: #206592;">Education Courses</div>
            <div class="pbox">

            <p class="subtext">Course type :  <span class="bluecolor"><?php echo e($getcources->CoursesType); ?></span> </p>
            <p class="subtext">Courses  :  <span class="bluecolor"><?php echo e($getcources->CoursesTitle); ?></span> </p>
            <p class="subtext">Institution :  <span class="bluecolor"><?php echo e($getcources->CoursesInstitute); ?></span> </p>
            </div>
        </div>
        <div id="L10" class="boxp" style="background: #c0392b;left: 654px;top: -1962px;">
            <div class="headbox" style="background: #9c3024;">Thesis</div>
            <div class="pbox">
                <p class="subtext">Thesis title :  <span class="bluecolor"><?php echo e($getproject->ProjectTitle); ?></span></p>
                <p class="subtext">Defense title: <span class="bluecolor"><?php echo e($getproject->ProjectDate); ?></span></p>
            </div>
        </div>
        <div id="L11" class="boxp" style="background: #2c3e50;left: 0px;top: -1962px;">
            <div class="headbox" style="background: #161e27;">Age</div>
                                    <div class="pbox">
            <p class="subtext" > Date of birth : <span class="bluecolor"><?php echo e($getbases->BaseBirthdate); ?></span> </p>
            
            <p class="subtext" style="    text-align: center;
    font-size: 24px;"> <span class="bluecolor" style="font-size:45px;"><?php echo e($old); ?></span>  Year </p>
            </div>
        </div>
        <div id="L12" class="boxp" style="background: #e74c3c;left: 327px;top: -2289px;">
            <div class="headbox" style="background: #bd3f32;">The profession</div>
                        <div class="pbox">
            <p class="subtext bluecolor" style="font-size:26px;text-align:center;position: relative;top: 43px;"><?php echo e($getbases->BaseWorkTitle); ?></p>
            </div>
        </div>

    </div>
    <audio controls="" autoplay="" name="media" style="display:none;"><source src="<?php echo e(asset('music/back.mp3')); ?>" type="audio/mpeg"></audio>

</body>

</html><?php /**PATH C:\xampp\mysite\resources\views/websites/site-fast-english.blade.php ENDPATH**/ ?>