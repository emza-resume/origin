<button type="button" id="bpre" class="btn btn-orange box-shadow btn-md d-block mx-auto" data-toggle="modal" data-target="#myModal">
<!-- <span class="glyphicon glyphicon-eye-open" style="font-family:arial !important"></span> -->
<span  style="color: white;font-weight: 400;position: relative;top: 4px;font-size: 17px;text-shadow: 0px 0px 6px blue;">پیش‌نمایش</span>&nbsp;&nbsp; <div id="f9" style="background:black;color:White;width: 30px;height: 30px;display: inline-block;"><span class="text-white font-weight-bold" style="font-family: arial !important;position: relative;top: 4px;">F9</span></div>
</button>
<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 860px;">
    <div class="modal-content " style="width:218mm;height:320mm;overflow-x: scroll;background: #f8f9fa;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">پیش‌نمایش رزومه</h4>
        <button type="button" class="close" data-dismiss="modal" id="closeModel">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body mx-auto bg-light">
        
        <!-- صفحه رزومه A4 -->
        <div class="border bg-white" style="width:210mm;height:279mm;@if(@$getbases->Background != '')background:url({{ asset(@$getbases->Background) }}) !important;background-size: cover !important;@endif">
          @include('component.resume')
        </div>


      </div>

      <!-- Modal footer -->
      <div style="background: #f8f9fa;" class="modal-footer">
        <button type="button" id="closeBtn" class="btn btn-danger" style="position: fixed;bottom: 40px;" data-dismiss="modal">بستن</button>
      </div>

    </div>
  </div>
</div>