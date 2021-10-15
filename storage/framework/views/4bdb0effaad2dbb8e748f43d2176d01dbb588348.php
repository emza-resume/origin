<button type="button"  class="btn btn-orange box-shadow btn-md d-block mx-auto" data-toggle="modal" data-target="#myModal">
<!-- <span class="glyphicon glyphicon-eye-open" style="font-family:arial !important"></span> -->
<span style="color: white;font-weight: 400;position: relative;top: 4px;font-size: 17px;text-shadow: 0px 0px 6px blue;">پیش‌نمایش</span>&nbsp;&nbsp; <div style="background:black;color:White;width: 30px;height: 30px;display: inline-block;"><span class="text-white font-weight-bold" style="font-family: arial !important;position: relative;top: 4px;">F9</span></div>
</button>
<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 860px;">
    <div class="modal-content " style="width:218mm;height:320.4mm;overflow-x: scroll;background: #f8f9fa;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">پیش‌نمایش رزومه</h4>
        <button type="button" class="close" data-dismiss="modal" id="closeModel">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body mx-auto bg-light">
        
        <!-- صفحه رزومه A4 -->
        <div class="border bg-white" style="width:210mm;height:279.4mm">
          <?php echo $__env->make('component.resume', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>


      </div>

      <!-- Modal footer -->
      <div style="background: #f8f9fa;" class="modal-footer">
        <button type="button" id="closeBtn" class="btn btn-danger" style="position: fixed;bottom: 40px;" data-dismiss="modal">بستن</button>
      </div>

    </div>
  </div>
</div><?php /**PATH /home/emzaapp1/mysite/resources/views/component/preview.blade.php ENDPATH**/ ?>