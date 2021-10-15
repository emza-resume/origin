<div class="btn-group m-3 border border-secondary" role="group" style="position: relative;top: -1px;border-radius: 2px;margin-right: -1px !important;" aria-label="Basic example">
    <button type="button" title="از راست به چپ" id="btn-dir-rtl"  style="background-color:#eee" class="btn btn-white border alm">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
    </button>


    <button type="button" title="از چپ به راست" id="btn-dir-ltr" style="background-color:white;border-left: 1px solid #6c757d;" class="btn btn-white border alm">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>

    </button>
 </div>
 <script>
  $("#btn-dir-ltr").click(function(){
    $("#desc").css("direction","ltr");
    $("#direction").val("ltr");
    $(this).css("background-color","#eee");
    $("#btn-dir-rtl").css("background-color","#fff");
  });
    $("#btn-dir-rtl").click(function(){
    $("#desc").css("direction","rtl");
    $("#direction").val("rtl");
    $(this).css("background-color","#eee");
    $("#btn-dir-ltr").css("background-color","#fff");
  });
 </script>