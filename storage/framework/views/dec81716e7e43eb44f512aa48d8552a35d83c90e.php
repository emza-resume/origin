<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>
        <?php echo $__env->yieldContent("title"); ?>
        </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/final-very-small.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/auth.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('fonts/sahel/font.css')); ?>" rel="stylesheet">
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    </head>
    <body style="background: #5f028e0f;padding:10px !important">
         <!-- recaptcha script-->
        <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
            'sitekey' : '6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM'
            });
        };
        </script>

        <!-- Page content-->
        <div class="mx-auto w-sm-100 w-md-75 w-lg-50 w-xl-50 m-4 re-10 style-auth">
            <div class="title-auth">
                <h4 class="title-text">
                    <?php echo $__env->yieldContent("form-title"); ?>
                </h4>
            </div>
            <?php echo $__env->yieldContent("form-code"); ?>
        </div>
        <script src="https://www.google.com/recaptcha/api.js?hl=fa" async defer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>
<?php /**PATH /home/emzaapp1/mysite/resources/views/auth/template.blade.php ENDPATH**/ ?>