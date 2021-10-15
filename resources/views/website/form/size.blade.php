<select id="sizet" class="form-select" style="font-size:12px;position: relative;top: -1px !important;height: 27px;margin-right: 8px;">
  <option value="10" style="font-size:12px">10</option>
  <option value="11" style="font-size:12px">11</option>
  <option value="12" style="font-size:12px">12</option>
  <option value="13" selected style="font-size:12px">13</option>
  <option value="14" style="font-size:12px">14</option>
  <option value="16" style="font-size:12px">16</option>
  <option value="18" style="font-size:12px">18</option>
  <option value="20" style="font-size:12px">20</option>
</select>
<script>
$(document).ready(function(){
$("#desc").css("font-size","13px");
});
$('#sizet').on('change', function() {
  $("#desc").css("font-size",this.value+"px");
  $("#font-s").val(this.value+"px");
});
</script>