<div class="container-fluat" style="position:relative;top:-20px;">
    <div class="row p-5" style="position:relative;top:6px;width:auto;margin-left: 0px;margin-right: 0px;padding-bottom: 0px !important;">
        <div id="property1" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/icons/paper-plane.svg') }}" id="fast" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #071c6b;">سریع</h5>
            <p class="text-justify text-center mx-5" style="color: #040b2b;font-weight: bold;font-size: 14px;">برای ساخت یک رزومه کامل کمتر از 15 دقیقه زمان لازم است. </p>
            
        </div>
        <div id="property2" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/easy.png') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #4e4003;">آسان</h5>
            <p class="text-justify text-center mx-5" style="color: #352001;font-weight: bold;font-size: 14px;">ساخت رزومه با این سامانه به دلیل طراحی هوشمند فرم‌ها خیلی آسان است.
            </p>
        </div>
        <div id="property3" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/icons/star.svg') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #774104;">حرفه‌ای</h5>
            <p class="text-justify text-center mx-5" style="color: #462908;font-weight: bold;font-size: 14px;">با این سامانه می‌توانید رزومه‌های حرفه‌ای همراه وب‌سایت داشته
                باشید. </p>
        </div>
        <div id="property1" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/icons/success.svg') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #075d45;">زیبا</h5>
            <p class="text-justify text-center mx-5" style="color: #0c3e2f;font-weight: bold;font-size: 14px;">قالب رزومه زیبا طراحی شده و به مرور زمان تم‌های جذاب اضافه خواهد
                شد. </p>
        </div>
        <div id="property2" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/icons/bookmark.svg') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #770a05;">جذاب</h5>
            <p class="text-justify text-center mx-5" style="color: #481210;font-weight: bold;font-size: 14px;">قالب رزومه و وب‌سایت دارای جذابیت بصری زیادی است. </p>
        </div>
        <div id="property3" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/icons/gift.svg') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #690202;">رایگان</h5>
            <p class="text-justify text-center mx-5" style="color: #4a1a23;font-weight: bold;font-size: 14px;">ساخت رزومه رایگان است. ضمنا داشتن وب‌سایت نیز رایگان است. </p>
        </div>
        <div id="property3" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/secure-shield-shield.png') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #193101;">امن</h5>
            <p class="text-justify text-center mx-5" style="color: #263516;font-weight: bold;font-size: 14px;">این وب‌سایت توسط یکی از بهترین دیتاسنترهای آلمان که محیط کاملاً
                امنی دارد میزبانی می‌شود. </p>
        </div>
        <div id="property3" class="col-lg-3 col-md-6 col-sm-12 my-4"><img
                src="{{ asset('img/safe.png') }}" width="64" height="64"
                class="mx-auto d-block mb-3" loading="lazy">
            <h5 class="text-center font-weight-bold my-3" style="color: #015632;">مطمئن</h5>
            <p class="text-justify text-center mx-5" style="color: #013e24;font-weight: bold;font-size: 14px;">مطمئن باشید اطلاعاتی مثل اطلاعات حساب شما در اختیار شخصی ثالثی قرار
                نخواهد گرفت. </p>
        </div><a href="#jobp1" style="position:relative;top:-3rem;" class="text-center d-block mx-auto"><img id="down"
                src="{{ asset('img/down.png') }}" class="d-block mx-auto"
                style="width:50px;height:50px;" loading="lazy"></a>
    </div>
</div>
<script>
    $(function () {
        $('a[href*=\\#]:not([href=\\#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

</script>
