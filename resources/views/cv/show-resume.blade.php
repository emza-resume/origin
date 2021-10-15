@extends('master.layout-out-print')
<title>resume</title>
@section('css')
<link href="https://emza.app/fonts/sahel/font.css" rel="stylesheet">
<style>

{{ $getbases->Styles }};
#pageA4{
  background:url({{ asset($getbases->Background) }}) !important;
  background-size:cover;
  background-repeat: no-repeat !important;
}
</style>
@endsection

<div class="d-block mx-auto" id="pageA4" 
style="width:210mm;height:279.4mm;transform: scale(0.8);display:block !important;margin-top:0px;margin-button:0px;">
@include('component.resume-up')
</div>
<script defer>
try {
document.getElementById('emailx').removeAttribute('href');
document.getElementById('weblogx').removeAttribute('href');
document.getElementById('instagramx').removeAttribute('href');
document.getElementById('websitex').removeAttribute('href');
} catch (error) {
  document.getElementById('websitex').removeAttribute('href');
  document.getElementById('instagramx').removeAttribute('href');
  console.error(error);
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
}
</script>
