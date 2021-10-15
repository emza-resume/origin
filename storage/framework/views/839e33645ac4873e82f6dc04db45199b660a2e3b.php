<div class="d-flex mx-5" style="padding-top: 7px !important;">
    <div class="p-2  flex-fill" style="width: 220px;">
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/email.svg')); ?>">
            &nbsp;
            <a id="emailx" href="mailto:<?php echo e($getbases->BaseEmail); ?>" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important"><?php echo e($getbases->BaseEmail); ?></a>
        </p>
        <?php if($getbases_b->BaseWeblog != NULL): ?>
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/world.svg')); ?>">
            &nbsp;
            <a id="weblogx" href="http://<?php echo e($getbases_b->BaseWeblog); ?>" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important"><?php echo e($getbases_b->BaseWeblog); ?></a>
        </p>
        <?php endif; ?>
        <?php if($getbases->RequestSite != 1 && $getbases->RequestSite != NULL): ?>
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/world2.png')); ?>">
            &nbsp;
            <a id="websitex" href="http://<?php echo e($getbases->BaseWebsite); ?>.emza.app" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important"><?php echo e($getbases->BaseWebsite); ?>.emza.app</a>
        </p>
        <?php endif; ?>
    </div>
    <div class="p-2 text-center  flex-fill" style="position: relative;top: -17px;">
        &nbsp;
        <img id="avatarx" style="width: 150px;height: 150px;margin-left: 8px;border: 3px solid #fff;box-shadow: 0px 0px 11px 3px #dcdcdc !important;" class="rounded-circle"
            src="<?php echo e(asset($getbases->BaseAvatar)); ?>">
    </div>
    <div class="p-2 text-right flex-fill" style="width: 220px;">
        <p style="margin-bottom: 20px;">
             <span id="mobilex"><?php echo e($getbases->BaseMobile); ?></span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/phone.svg')); ?>">
        </p>
        <p style="margin-bottom: 20px;">
            <span id="phonex"><?php echo e($getbases->BaseTel); ?></span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/call.svg')); ?>">

        </p>
        <?php if($getbases_b->BaseSocial != NULL): ?>
        <?php
         $insta = "http://www.instagram.com/".$getbases_b->BaseSocial;
         $instaurl1 =  substr($insta, 0, -1);      
        ?>
        <p style="margin-bottom: 20px;font-family: 'Nunito Sans',sans-serif !important;">
            <a id="instagramx" href="<?php echo e($instaurl1); ?>" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important"><?php echo e($getbases_b->BaseSocial); ?></a>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="<?php echo e(asset('img/icons/contactus/instagram.png')); ?>">

        </p>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\mysite\resources\views/component/resumex-up/call.blade.php ENDPATH**/ ?>