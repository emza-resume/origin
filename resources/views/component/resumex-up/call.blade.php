<div class="d-flex mx-5" style="padding-top: 7px !important;">
    <div class="p-2  flex-fill" style="width: 220px;">
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/email.svg') }}">
            &nbsp;
            <a id="emailx" href="mailto:{{ $getbases->BaseEmail }}" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important">{{ $getbases->BaseEmail }}</a>
        </p>
        @if($getbases_b->BaseWeblog != NULL)
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/world.svg') }}">
            &nbsp;
            <a id="weblogx" href="http://{{ $getbases_b->BaseWeblog }}" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important">{{ $getbases_b->BaseWeblog }}</a>
        </p>
        @endif
        @if($getbases->RequestSite != 1 && $getbases->RequestSite != NULL)
        <p style="font-family: 'Nunito Sans',sans-serif !important;margin-bottom: 20px;">
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/world2.png') }}">
            &nbsp;
            <a id="websitex" href="http://{{ $getbases->BaseWebsite }}.emza.app" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important">{{ $getbases->BaseWebsite }}.emza.app</a>
        </p>
        @endif
    </div>
    <div class="p-2 text-center  flex-fill" style="position: relative;top: -17px;">
        &nbsp;
        <img id="avatarx" style="width: 150px;height: 150px;margin-left: 8px;border: 3px solid #fff;box-shadow: 0px 0px 11px 3px #dcdcdc !important;" class="rounded-circle"
            src="{{ asset($getbases->BaseAvatar) }}">
    </div>
    <div class="p-2 text-right flex-fill" style="width: 220px;">
        <p style="margin-bottom: 20px;">
             <span id="mobilex">{{ $getbases->BaseMobile }}</span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/phone.svg') }}">
        </p>
        <p style="margin-bottom: 20px;">
            <span id="phonex">{{ $getbases->BaseTel }}</span>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/call.svg') }}">

        </p>
        @if($getbases_b->BaseSocial != NULL)
        <?php
         $insta = "http://www.instagram.com/".$getbases_b->BaseSocial;
         $instaurl1 =  substr($insta, 0, -1);      
        ?>
        <p style="margin-bottom: 20px;font-family: 'Nunito Sans',sans-serif !important;">
            <a id="instagramx" href="{{ $instaurl1 }}" target="_blank" style="font-family: arial !important;color:black;font-size:13px !important">{{ $getbases_b->BaseSocial }}</a>
            &nbsp;
            <img style="width:20px;height:20px;"
                src="{{ asset('img/icons/contactus/instagram.png') }}">

        </p>
        @endif
    </div>
</div>