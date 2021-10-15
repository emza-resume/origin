<!-- class="uk-modal uk-open" -->
<div id="imageEditorModal" uk-modal="" style="display: none" >  
    <div class="uk-modal-dialog uk-modal-body">
        <nav class="uk-navbar-container uk-navbar" uk-navbar="">
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-margin-small-bottom">
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="Rotate(90)">90° <img src="<?php echo e(asset('img/uikit/rotation.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="Rotate(1)">1° <img src="<?php echo e(asset('img/uikit/rotation.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="FlipH()"><img src="<?php echo e(asset('img/uikit/flip-h.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="FlipV()"><img src="<?php echo e(asset('img/uikit/flip-v.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="Zoom(1.0)"><img src="<?php echo e(asset('img/uikit/zoom-in.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="Zoom(-1.0)"><img src="<?php echo e(asset('img/uikit/zoom-out.svg')); ?>"></button></li>
                    <li><button class="uk-button uk-button-default uk-button-small" onclick="ResetImage()">بازنشانی</button></li>
                    <li><button class="uk-button uk-button-danger uk-button-small uk-modal-close" style="color:white !important">بستن</button></li>
                    <li><button class="uk-button uk-button-primary uk-button-small" onclick="SaveEditedImage()" id="btn-save-edited-photo" style="color:white !important">ذخیره</button></li>
                </ul>
            </div>
        </nav>
             <div id="image-editor-wrapper">
                <img src="" />     
             </div>
    </div>
</div>
<?php /**PATH C:\xampp\mysite\resources\views/pro/imageEditor.blade.php ENDPATH**/ ?>