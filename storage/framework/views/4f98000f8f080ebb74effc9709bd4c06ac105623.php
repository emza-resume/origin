<p class="font-weight-bold" style="font-size: 12px;">  <img src="<?php echo e(asset('img/site/new/title/file.svg')); ?>" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;پروژه‌ها</p>
  <hr>
  <?php $__currentLoopData = $getprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <P style="font-size: 12px;" id="projectTitlex0"><?php echo e($project->ProjectTitle); ?></P>
  <P style="font-size: 12px;"><span style="font-size: 12px;"><span style=";font-size:11px" id="textStartP0"><?php if($project->ProjectTitle != ''): ?>شروع: <?php endif; ?></span>  <span style="font-size:11px;color:darkblue !important;" id="projectMEx0"><?php if($project->ProjectTitle != ''): ?> <?php echo e($project->ProjectDateStart); ?> <?php endif; ?></span> <span style="font-size:11px" id="projectYEx0"></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:11px;" id="textEndP0"><?php if($project->ProjectTitle != ''): ?>پایان: <?php endif; ?></span>  <span style="font-size:11px;color:darkblue !important;" id="projectMEEd"><?php if($project->ProjectTitle != ''): ?> <?php echo e($project->ProjectDateEnd); ?> <?php endif; ?></span> <span style="font-size:11px" id="projectYEEx0"></span></span></P>
  <P style="font-size: 12px;"><?php if($project->ProjectTitle != ''): ?>کارفرما: <?php endif; ?><span style="font-size:11px" id="EmployerText0"><?php echo e($project->ProjectEmployer); ?></span><span style="font-size:11px" id="ProjectEmployerx0"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:11px;" ><?php if($project->ProjectTitle != ''): ?><a href="<?php echo e($project->ProjectLink); ?>" target="_black" style="font-size:11px;color:darkblue !important;" id="ProjectLink0" >لینک پروژه</a><?php endif; ?></span></P>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/emzaapp1/mysite/resources/views/component/resumex-up/project.blade.php ENDPATH**/ ?>