<select id="fontf" class="form-select" style="font-size:12px;position: relative;top: -1px !important;height: 27px;margin-right: -3px;">
  <option selected id="f-vazir" value="1" style="font-family:vazir !imporatant;font-size:12px;">وزیر</option>
  <option  value="2" id="f-sahel" style=";font-size:12px;">ساحل</option>
  <option value="3" id="f-arial" style="font-family:Arial !important;font-size:12px;">Arial</option>
  <option value="4" id="f-tahoma" style="font-family:Tahoma !important;font-size:12px;">Tahoma</option>
</select>
<script>
  $("#fontf").click(function(){
       valf = $(this).val();
       if(valf == 1)
      {
             $("#desc").removeClass("font-sahel");
             $("#desc").removeClass("font-arial");
             $("#desc").removeClass("font-tahoma");
             $("#desc").addClass("font-vazir");
             $("#font-f").val("vazir");
      }
     if(valf == 2)
     {
             $("#desc").removeClass("font-vazir");
             $("#desc").removeClass("font-tahoma");
             $("#desc").removeClass("font-arial");
             $("#desc").addClass("font-sahel");
             $("#font-f").val("sahel");

     }
      if(valf == 3)
      {
                 $("#desc").removeClass("font-vazir");
                 $("#desc").removeClass("font-sahel");
                 $("#desc").removeClass("font-tahoma");
                 $("#desc").addClass("font-arial");
                 $("#font-f").val("arial");

      }
      if(valf == 4)
      {     
             $("#desc").removeClass("font-arial");
             $("#desc").removeClass("font-sahel");
             $("#desc").removeClass("font-vazir");
             $("#desc").addClass("font-tahoma");
             $("#font-f").val("tahoma");
      }
      

   });
</script>