<script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
            'sitekey' : '6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM'
            });
        };
</script>
<!-- recaptcha -->
<div class="text-center d-block mx-auto p-4" style="padding-right: 0px !important;" id="captcha">
<div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM"
            data-callback="recaptchaCallback"></div>
</div>

<script>
    function recaptchaCallback() {
        $('#rec').removeAttr('disabled');
    };
</script><?php /**PATH C:\xampp\mysite\resources\views/captcha.blade.php ENDPATH**/ ?>