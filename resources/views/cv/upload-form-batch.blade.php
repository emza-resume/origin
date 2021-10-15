<div class="alert alert-success w-75 mx-auto">
    <h5>قوانین تصویر چهره</h5>
    <p class="text-left">1. تصویر حتماً باید تمام‌رخ باشد.</p>
    <p class="text-left">2. تصویر بانوان حتماً باید با حجاب کامل باشد وگرنه حذف می‌شود.</p>
</div>
<br>
<form name="upload-form" method="post" action="/send-upload-avatar-by-batch" enctype="multipart/form-data">
    @csrf
    <div class="custom-file" style="width: 60%;">
        <input type="hidden" name="batch" value="{{$batch}}">
        <input type="hidden" name="userid" value="{{$getbases->BaseUserid}}">

        <input type="file" class="custom-file-input" name="avatar" id="customFile" accept="image/gif, image/jpeg, image/png">
        <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
        <br><br>
        <div class="w-50 mx-auto">
        </div>
        <button type="submit" id="submitBtn" class="btn btn-primary m-4" >آپلود تصویر چهره</button>
    </div>
</form>
<br><br><br>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };


</script>
