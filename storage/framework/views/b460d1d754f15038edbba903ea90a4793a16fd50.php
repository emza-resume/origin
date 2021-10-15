<script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
            'sitekey' : '6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM'
            });
        };
</script>
<form method="post" action="/send-mail-to-user" name="sendmailform">
    <?php echo csrf_field(); ?>
 <div class="mb-3  float-right " id="txt-email" style="width:100%">
  <label  class="form-label" style="font-size: 13px;">آدرس ایمیل شما</label>
  <input id="mail" name="mail" tabindex="1" type="email" style="height: 40px;font-size: 14px;color:black !important;border: 1px solid #e20088;font-family:Arial !important" class="form-control text-right border-danger" required >
  <input id="eml" type="hidden" name="eml" value="<?php echo e($getbases->BaseEmail); ?>">
</div>
<div class="mb-3"  id="txt-family">
  <label  class="form-label" style="font-size: 13px;">نام شما</label>
  <input  id="family" name="family" tabindex="2" type="text" style="height: 40px;font-size: 14px;color:black !important;border: 1px solid #e20088"  class="form-control" required>
</div>
<div class="mb-3">
  <label  class="form-label" style="font-size: 13px;">موضوع</label>
  <input  id="title" name="title" tabindex="3" type="text"  style="height: 40px;font-size: 14px;color:black !important;border: 1px solid #e20088" class="form-control" required>
</div>
<div class="mb-3">
  <label  class="form-label"  style="font-size: 13px;">متن پیام</label>
  <br>
  <div style="background: #ff009908;width:100%;height: 45px;border: 1px solid #e20088;border-bottom: none;border-top-left-radius: 5px;border-top-right-radius: 5px;">
  <?php echo $__env->make('website.form.tools', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <textarea  id="desc" name="desc" tabindex="4" class="form-control" style="height: 219px;line-height: 1.9;border: 1px solid #e20088;border-top-left-radius: 0px;border-top-right-radius: 0px;padding-top: 10px;direction:rtl;text-align:justify;" rows="7" required></textarea>
  <textarea  id="codedesc" name="codedesc" style="display:none"></textarea>
</div> 
<input  id="direction" name="direction" type="hidden" value="rtl">
<input  id="font-f" name="font-f" type="hidden" value="vazir">
<input  id="font-s" name="font-s" type="hidden" value="13">
<input  id="font-c" name="font-c" type="hidden" value="#000">
<br/>
<div class="g-recaptcha" data-sitekey="6LekL78aAAAAAB8MovoUFwFkogv9N0pJIDpfgyLM"></div>
<br/>
<button class="btn btn-danger btn-lg" id="sbtn" type="submit" style="background: #e20088;">ارسال پیام</button>
</form>

<script>
$(document).scroll(function(){
   $("#abo").css("background","#9c27b0");
   $("#about1").css("color","white");
   $("#about1").css("text-shadow","1px 1px 1px black");
   $("#abo").css("border","none");
   
   $("#exp").css("background","#9c27b0");
   $("#experience1").css("color","white");
   $("#experience1").css("text-shadow","1px 1px 1px black");
   $("#exp").css("border","none");
   
   $("#edu").css("background","#9c27b0");
   $("#education1").css("color","white");
   $("#education1").css("text-shadow","1px 1px 1px black");
   $("#edu").css("border","none");
   
   $("#wor").css("background","#9c27b0");
   $("#work1").css("color","white");
   $("#work1").css("text-shadow","1px 1px 1px black");
   $("#wor").css("border","none");
   
   $("#por").css("background","#9c27b0");
   $("#project1").css("color","white");
   $("#project1").css("text-shadow","1px 1px 1px black");
   $("#por").css("border","none");
   
   $("#lan").css("background","#9c27b0");
   $("#language1").css("color","white");
   $("#language1").css("text-shadow","1px 1px 1px black");
   $("#lan").css("border","none");
   
   $("#the").css("background","#9c27b0");
   $("#thesis1").css("color","white");
   $("#thesis1").css("text-shadow","1px 1px 1px black");
   $("#the").css("border","none");
   
   $("#can").css("background","#9c27b0");
   $("#contact1").css("color","white");
   $("#contact1").css("text-shadow","1px 1px 1px black");
   $("#can").css("border","none");
   
});

$(document).ready(function(){
        $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  $("#desc").keypress(function(){
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  });
  $("#desc").keydown(function(){
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  });
  $("#desc").keyup(function(){
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  });
    $("#desc").focus(function(){
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  });
    $("#desc").click(function(){
    $("#codedesc").html("<p id='texthtml' style='text-align:justify;font-family:vazir;line-height:2;'>"+$("#desc").val()+"</p>");
  });
});

</script>
<script>
    function recaptchaCallback() {
        $('sbtn').removeAttr('disabled');
    };
</script>
<?php /**PATH /home/emzaapp1/mysite/resources/views/website/form/form.blade.php ENDPATH**/ ?>