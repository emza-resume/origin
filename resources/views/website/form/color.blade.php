<input type="color" id="favcolor" name="favcolor" value="#000" style="height: 27px;position: relative;top: 3px;margin-right: 8px;width: 30px;">
<script>
    $(document).ready(function(){
    $("#desc").css("color","#000");
    });
    $('#favcolor').on('change', function() {
      $("#desc").css("color",this.value);
      $("#font-c").val(this.value);
    });
</script>