@extends('master.layout-out')

@section('title')

  @yield('s-title')
 
@endsection

@section('content')
<div class="container-fluid bg-light">
  <div class="row px-3">
@include('component.preview')
  </div>
</div>
<div class="container-fluid bg-light">
  <div class="row px-3">

  <form name="@yield('formName')" action="@yield('actionPath')" method="post">
  @csrf

  <input type="hidden" name="uid" value="{{ $UID }}">
    <br>
  @include('component.base')
  @include('component.education')
  @include('component.language')
  @include('component.work')
  @include('component.courses')
  @include('component.thesis')
  @include('component.projects')
  @include('component.skills')

  <button type="submit" class="btn btn-md btn-success mb-5 p-3" id="btnsubmit">
  <img src="@yield('button-icon')" alt="" style="width:30px;height:30px;">
  @yield('button-title')
  </button>
  </form>

  </div>
</div>
<script>

if(innerWidth <= 600){
	$("#v-list").remove();
	$("#clist").remove();
	$(".fsl0").remove();
	$(".lu0").remove();
	$("#f9").remove();
	$("#bpre").css("padding-bottom","15px");
	$("#bpre").css("padding-left","5px");
	$("#bpre").css("padding-right","12px");
	$("#langname0").remove();
  $("#workPostdata0").remove();
  $("#year-list").remove();
  $("#prenumber").remove();
  $("#courcesTypedata0").remove();
  $("#courcesYearData0").remove();
  $("#year-list-1").remove();
  $("#year-list-2").remove();
  $("#year-list-s").remove();
  $("#year-list-e").remove();
}
</script>
<script>
	$(document).keydown(function (e) {
	  if (e.keyCode === 120) {
          $("#myModal").addClass("show");
          $("#myModal").css({"padding-right":"10px","display":"block","overflow-y":"auto"});
           
        }
		});

    $(document).keydown(function (e) {
		    if (e.keyCode === 115) {
          $("#myModal").removeClass("show");
          $("#myModal").css({"display":"none"}); 
        }
		});
    

    $("#closeModel").click(function () {
      $("#myModal").removeClass("show");
      $("#myModal").css({"display":"none"});
    });
    $("#closeBtn").click(function () {
      $("#myModal").removeClass("show");
      $("#myModal").css({"display":"none"});
    });

    @yield('scripts')
</script>
@endsection




