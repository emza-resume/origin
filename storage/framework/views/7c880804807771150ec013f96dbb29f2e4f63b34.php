
<div class="btn-group m-3 border border-secondary" role="group" style="position: relative;top: -1px;border-radius: 2px;" aria-label="Basic example">
    <button type="button" title="راست ‌چین کردن" id="btn-rtl"  style="background:white" class="btn btn-white border alm">

        <svg xmlns="http://www.w3.org/2000/svg" id="sr" width="16" height="16" fill="currentColor" class="bi bi-text-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>

    <button type="button" title="وسط ‌چین کردن" id="btn-center" style="background-color:white" class="btn btn-white border alm">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-center"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>

    </button>
    <button type="button" title="چپ‌ چین کردن" id="btn-ltr" style="background-color:white" class="btn btn-white border alm">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>

    </button>

    <button type="button" title="justify" id="btn-justify" style="background-color:#eee;border-left: 1px solid #6c757d;" class="btn btn-white border alm">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>

    </button>
</div>

 <?php echo $__env->make('website.form.direction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('website.form.font', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('website.form.size', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('website.form.color', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
  $("#btn-rtl").click(function(){
    $("#desc").css("text-align","right");
    $("#codedesc").html("<p id='texthtml' style='text-align:right;font-family:tahoma;'>"+$("#desc").val()+"</p>");
    $(this).css("background-color","#eee");
    $("#btn-ltr").css("background-color","#fff");
    $("#btn-center").css("background-color","#fff");
    $("#btn-justify").css("background-color","#fff");
  });
  $("#btn-ltr").click(function(){
    $("#desc").css("text-align","left");
    $("#codedesc").html("<p id='texthtml' style='text-align:left;font-family:tahoma;'>"+$("#desc").val()+"</p>");
    $(this).css("background-color","#eee");
    $("#btn-rtl").css("background-color","#fff");
    $("#btn-center").css("background-color","#fff");
    $("#btn-justify").css("background-color","#fff");
  });
  $("#btn-center").click(function(){
    $("#desc").css("text-align","center");
    $("#codedesc").html("<p id='texthtml' style='text-align:center;font-family:tahoma;'>"+$("#desc").val()+"</p>");
    $(this).css("background-color","#eee");
    $("#btn-rtl").css("background-color","#fff");
    $("#btn-ltr").css("background-color","#fff");
    $("#btn-justify").css("background-color","#fff");
  });
  $("#btn-justify").click(function(){
    $("#desc").css("text-align","justify");
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:tahoma;'>"+$("#desc").val()+"</p>");
    $(this).css("background-color","#eee");
    $("#btn-rtl").css("background-color","#fff");
    $("#btn-ltr").css("background-color","#fff");
    $("#btn-center").css("background-color","#fff");
  });
</script>

<?php /**PATH /home/emzaapp1/mysite/resources/views/website/form/tools.blade.php ENDPATH**/ ?>