<p class="font-weight-bold" style="font-size: 12px;">  <img src="<?php echo e(asset('img/site/new/title/translate.svg')); ?>" style="width: 20px;height: 20px;position: relative;top: 0px;" /> &nbsp;مهارت زبان</p>
  <hr>

    <table>

        <tr>
            <td class="pr-2 py-2" style="font-size: 12px;font-weight: bold;">نام زبان</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">خواندن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">نوشتن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">صحبت‌کردن</td>
            <td class="px-2 text-center" style="font-size: 12px;font-weight: bold;">گوش‌دادن</td>
        </tr>
        <?php $__currentLoopData = $getlangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        
            <td class="pr-2 py-2" style="font-size: 12px;#120048" id="langname0x"><?php echo e($langs->LangName); ?></td>
            <td class="px-2" id="langReading0x" <?php if($langs->LangReadingskills == ''): ?> style="visibility:hidden;" <?php endif; ?>>
            <div id="LR0Xx1" >
                <?php for($i=0;$i < $langs->LangReadingskills;$i++): ?>
                    <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                <?php endfor; ?>
                <?php $k = 5 - $langs->LangReadingskills; ?>
                <?php for($i=0;$i<$k;$i++): ?>
                    <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                <?php endfor; ?>
            </div>
            </td>
            <td class="px-2">
            <div id="LR0Xx2" id="langWriting0x" <?php if($langs->LangWritingskills == ''): ?> style="visibility:hidden;" <?php endif; ?>>
                <?php for($i=0;$i < $langs->LangWritingskills;$i++): ?>
                        <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                <?php endfor; ?>
                <?php $k = 5 - $langs->LangWritingskills; ?>
                <?php for($i=0;$i<$k;$i++): ?>
                        <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
                <?php endfor; ?>
            </td>
        
            <td class="px-2">
            <div id="LR0Xx3" <?php if($langs->LangTalkingskills == ''): ?> style="visibility:hidden;" <?php endif; ?>>
            <?php for($i=0;$i < $langs->LangTalkingskills;$i++): ?>
                        <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            <?php endfor; ?>
            <?php $k = 5 - $langs->LangTalkingskills; ?>
            <?php for($i=0;$i<$k;$i++): ?>
                        <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            <?php endfor; ?>
            </div>
            </td>
            <td class="px-2">
            <div id="LR0Xx4" <?php if($langs->LangListeningskills == ''): ?> style="visibility:hidden;" <?php endif; ?>>
            <?php for($i=0;$i < $langs->LangListeningskills;$i++): ?>
                <div class="border rounded-circle border-dark float-left bg-dark" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            <?php endfor; ?>
            <?php $k = 5 - $langs->LangListeningskills; ?>
            <?php for($i=0;$i<$k;$i++): ?>
                <div class="border rounded-circle border-dark float-left" id="LR0X1" style="width:8px;height:8px;margin-left:1px;margin-right:1px;"></div>
            <?php endfor; ?>
            </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    
    </table><?php /**PATH /home/emzaapp1/mysite/resources/views/component/resumex-up/lang.blade.php ENDPATH**/ ?>