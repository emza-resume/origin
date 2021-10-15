 <?php $__env->startSection('title'); ?> 
Resume details
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-header" style="text-align:left">Resume details</div>

                <div class="card-body">
                    <div class="dcv" style="float:left">
                            <img width="320" height="320" src="<?php echo e(asset($getbases->BaseAvatar)); ?>">
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Name</span> : <?php echo e($getbases->BaseName); ?>

                    </div>
                     <div class="dcv" style="float:left">
                        <span class="spanbold">Family</span> : <?php echo e($getbases->BaseFamily); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Marital Status</span> : <?php echo e($getbases->BaseMarital); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Military Service Situation</span> : <?php echo e($getbases->BaseSolider); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Occupation title</span> : <?php echo e($getbases->BaseWorkTitle); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Date of birth</span> : <?php echo e($getbases->BaseBirthdate); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Email</span> : <?php echo e($getbases->BaseEmail); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Mobile</span> : <?php echo e($getbases->BaseMobile); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Telephone</span> : <?php echo e($getbases->BaseTel); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Website</span> : <?php echo e($getbases->BaseWebsite); ?>.emza.app  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Language</span> : <?php echo e($getlangs->LangName); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Writing skills</span> : <?php echo e($getlangs->LangWritingskills); ?> of 5  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Reading skills</span> : <?php echo e($getlangs->LangReadingskills); ?> of 5  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Experimental skills</span> : <?php echo e($getskills->SkillsName); ?>

                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Section</span> : <?php echo e($getedus->EduSection); ?>

                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Field of Study</span> : <?php echo e($getedus->EduMajor); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Orientation</span> : <?php echo e($getedus->EduOrientation); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Institute Title</span> : <?php echo e($getedus->EduLnstitute); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">GPA</span> : <?php echo e($getedus->EduAverage); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Previous Job Position</span> : <?php echo e($getworks->WorkPost); ?>

                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Center Name</span> : <?php echo e($getworks->WorkCenter); ?> <?php echo e($getworks->WorkTitleCenter); ?>   
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">How to collaborate</span> : <?php echo e($getworks->WorkCooperation); ?>

                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Type of course</span> : <?php echo e($getcourses->CoursesType); ?>

                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Course name</span> : <?php echo e($getcourses->CoursesTitle); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Title of educational institution</span> : <?php echo e($getcourses->CoursesInstitute); ?> 
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Project Title</span> : <?php echo e($getprojects->ProjectTitle); ?>  
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Project Defense Date</span> : <?php echo e($getprojects->ProjectDate); ?>    
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Time to create this resume</span> : <?php echo e($created_at); ?>    
                    </div>
                    <div class="dcv" style="float:left">
                        <span class="spanbold">Resume status</span> : Good   
                    </div>
            

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout-out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/details-cv-english.blade.php ENDPATH**/ ?>