<script>
    var changeLanguage = function (ele) {
        var value = ele.options[ele.selectedIndex].value;
        var query = '', res, loc = location.href;
        if (loc.indexOf('?') > 0) {
            query = loc.substring(loc.indexOf('?'), loc.length);
        }
        if (loc.indexOf('?') > 0) {
            loc = loc.substring(0, loc.indexOf('?'));
        }
        if (loc.indexOf('/fa') > 0 || loc.indexOf('/Fa') > 0 || loc.indexOf('/FA') > 0) {
            res = loc.replace('/fa', '/' + value);
        }
        else if (loc.indexOf('/en') > 0 || loc.indexOf('/En') > 0 || loc.indexOf('/EN') > 0) {
            res = loc.replace('/en', '/' + value);
        }
        else {
            res = loc + '/' + value;
        }
        location.href = res + query;
    }
</script>
<script>
    var helps = {
        resumeTitle: { title: "عنوان شغلی رزومه", content: "از نوشتن «رزومه»، «رزومه کاری»، «رزومه تحصیلی»، «رزومه شخصی» و کلماتی از این دست، به شدت پرهیز کنید. &#xD;&#xA;باید نام شغلی که برای رسیدن به  آن رزومه نوشته اید را در این بخش بنویسید. عنوان رزومه قرار است که به خواننده رزومه  بگوید که شما چه کاره هستید و برای چه شغلی رزومه ارسال کرده اید." },
        abstract: {title:'توصیف خلاصه', content: '<p>«مهندس عمران با بیش از 8 سال سابقه کار تخصصی و مدیریت 24 پروژه ساختمانی اداری و مسکونی به ارزش 150 میلیارد تومان و توانمند در تیم سازی و رهبری گروه های کاری بزرگ»</p><p>«جراح و دندان پزشک با بورد تخصصی از آلمان و بیش از 2000 عمل ایمپلنت و انجام 1356 واحد لمینت و انجام 3000 واحد پروتز دندانی»</p><p>«مدیر مالی با بیش از 10 سال سابقه کار تخصصی و انجام بیش از 10 پروژه صنعتی و افزایش سود دهی شرکت ها به طور میانگین 5 تا 15 درصد پس از پیاده سازی روند حسابداری صنعتی»</p>'},
        skill: {title:"مهارت های تجربی", content: "در بخش مهارت ها از نوشتن چندین مهارت در یک باکس پرهیز کنید و هر مهارت را در یک ردیف مجزا بنویسید. در ضمن از کلمات مسلط به ، تسلط به، آشنایی با و غیره به شدت پرهیز کنید. میزان تسلط خود به هر مهارت را با ستاره هایی در مقابل آن قرار داده شده اند مشخص کنید. میزان تسلط شما بر مهارت هایتان با درصد نمایش  داده می شوند. اگر یک ستاره را انتخاب کنید 20 درصد، دو ستاره 40 درصد، سه ستاره 60 درصد، چهار ستاره 80 درصد و پنج ستاره مقدار 100 درصد را در رزومه شما نمایش می دهد."},
        language: { title: "زبان", content: "در این بخش اگر حتی در حد خیلی کمی با یک زبان دیگر (انگلیسی، ترکی استانبولی، فرانسه، عربی و غیره) آشنایی دارید، حتماً آن را در رزومه قید کنید. مهارت زبان (نه صرفاً زبان انگلیسی) برای شرکت ها بسیار ارزشمند است.&#xD;&#xA;در ضمن اگر درحال نوشتن یک رزومه انگلیسی هستید، حتماً در بخش زبان تسلط خود بر زبان فارسی را هم قید کنید." },
        email: {title: "ایمیل", content: "از نوشتن آدرس ایمیل های فانتری پرهیز کنید. ایمیل حرفه ای شامل نام و نام خانوداگی یا ترکیب آنها با یک عدد معنادار مثل تاریخ تولد است."}
    };

    setTimeout(function a() {
        Offline.options = { checks: { xhr: { url: '/online.png?' + Math.floor(Math.random() * Math.floor(10000)) } } }
        Offline.check();
        setTimeout(a, 10000);
    }, 10000);
</script>
<script>
        var params = {
            iemessage: 'جهت ساخت رزومه لطفا از مروگر های دیگر استفاده کنید',
            language:'fa',
            underGraduate: 'UnderGraduate',
            diploma:'Diploma',
            culture: 'fa',
            choosePhoto: 'انتخاب عکس',
            photoId: 'Photo',
            changePhoto: 'تغییر عکس',
            cultureVar: 'fa',
            minAverageSalaryId: 'RecI_MAvgS',
            hasUserId: false,
            ConnectionFailedMessage:'اشکال در ارتباط با سرور؛ لطفا از اتصال به اینترنت مطمئن شوید (کد 401)',
            ElseConnectionFailedMessage:'اشکال در ارتباط با سرور؛ لطفا از اتصال به اینترنت مطمئن شوید (کد 402)',
            GetPasswordAgain:'دریافت مجدد رمز عبور',
            PasswordSentViaEmail: 'رمز عبور برای شما ایمیل شد',
            PasswordSentViaSMS: 'رمز عبور برای شما پیامک شد',
            ProblemInSendingPassword:'اشکال در ارسال رمز عبور؛ لطفا بعدا تلاش نمایید',
            Sending: 'در حال ارسال ...',
            whatCanBeImproved: 'نقاط ضعف رزومه&zwnj;ساز  چیست؟',
            whatIsStrengths: 'نقاط قوت رزومه&zwnj;ساز  چیست؟',
            mobileIsMandatory: 'جهت ذخیره اطلاعات رزومه، موبایل یا ایمیل خود را در بخش اطلاعات پایه وارد کنید',
            isLocal: false,
            reloadButton: 'بارگذاری مجدد',
            errorModalTitle: 'اشکال در ذخیره اطلاعات'
        };
</script>
<script async="">
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-101108363-3');
</script>

