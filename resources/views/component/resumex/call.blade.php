<div class="d-flex mx-5">
    <div class="p-2  flex-fill" style="width: 220px;">
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/email.svg') }}">
            &nbsp;
            <span id="emailx"  style="font-family: arial !important;" ></span>
        </p>
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/world.svg') }}">
            &nbsp;
            <span id="weblogx"  style="font-family: arial !important;" ></span>
        </p>
        @if(@$getbases->RequestSite != 1 && @$getbases->RequestSite != NULL)
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/world2.png') }}">
            &nbsp;
            <a id="websitex" href="http://{{ @$getbases->BaseWebsite }}.emza.app" target="_blank" style="font-family: arial !important;color:black" >{{ $getbases->BaseWebsite }}.emza.app</a>
        </p>
        @endif
    </div>
    <div class="p-2 text-center  flex-fill">
        &nbsp;
        <img id="avatarxx" style="width: 150px;height: 150px;margin-left: 8px;border: 3px solid #fff;box-shadow: 0px 0px 11px 3px #dcdcdc;" class="rounded-circle"
            src="{{ asset('img/avatar/avatar.png') }}">
    </div>
    <div class="p-2 text-right flex-fill" style="width: 220px;">
        <p style="margin-bottom: 20px;">
             <span id="mobilex" ></span>&nbsp;<span id="precountryx"></span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/phone.svg') }}">
        </p>
        <p style="margin-bottom: 20px;">
            <span id="prenumberx" ></span><span id="phonex" ></span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/call.svg') }}">

        </p>
        <p style="margin-bottom: 20px;font-family: 'Nunito Sans',sans-serif !important;">
            <span id="instagramx"  style="font-family: arial !important;" ></span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/instagram.jpg') }}">

        </p>
    </div>
</div>