<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
    <meta name="description" content="Welcome to the Marwa El-Manawy home page, entry point to information about innovative Marwa El-Manawy products and projects, business solutions and business consulting services">
    <meta name="Keywords" content="">
    <link rel="shortcut icon" href="{{ asset('img/final-logo-small.png') }}" type="image/x-icon" />
<title>وب سایت  {{$getbases->BaseName}} {{$getbases->BaseFamily}}</title>    
<style>
        @media (min-width: 992px) {
            .sub-page-inner {
                padding-right: 130px !important;
            }
        }
.section-head h4:before {
    content: ''!important;
    width: 1px!important;
    height: 35px!important;
    position: absolute!important;
    right: -8px!important;
    bottom: 0!important;
}
    </style>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="{{ asset('fonts/vazir/font.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/Yekan/font.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/bootstrap.min.css" type="text/css">
    <!-- Animation -->
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/animate.min.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/owl.carousel.min.css" type="text/css">
    <!-- Light Case -->
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/lightcase.min.css" type="text/css">
    <!-- Template style -->
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/css/colors/blue.css" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="preloader-circle">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /preloader -->
    <div class="wrapper-page">
        <!-- Header -->
        <header class="header" style="right:0">
            <div class="header-content">
                <div class="profile-picture-block">
                    <div class="my-photo">
                        <img src="{{ asset($getbases->BaseAvatar) }}" class="img-fluid" style="box-sizing: border-box;width:70px" alt="Reza Ahmadi">
                    </div>
                </div>
                <!-- Header Head -->
                <div class="site-title-block">
                    <div class="site-title">{{$getbases->BaseName}} {{$getbases->BaseFamily}}</div>
                    <div class="type-wrap">
                        <div class="cd-headline clip">
                            <span class="cd-words-wrapper">
                                                                            <b>  {{$getbases->BaseWorkTitle}}
</b>


</b>

                                                                    </span>
                        </div>
                    </div>
                </div>
                <!-- /Header Head -->

                <!-- Navigation -->
                <div class="site-nav">
                    <!-- Main menu -->
                    <ul class="header-main-menu" id="header-main-menu">
                        <li style="
    padding-left: 0px;
    padding-right: 30px;
"><a class="active" href="#home" style="

    text-align: right;
    border-radius: 0px 30px 30px 0px;

"> خانه&nbsp;&nbsp;<img width="20" height="20" src="{{ asset('img/site/home.png') }}"></a></li>
                        <li style="
    padding-left: 0px;
    padding-right: 30px;
"><a href="#about-me" style="

    text-align: right;
    border-radius: 0px 30px 30px 0px;

"> درباره من&nbsp;&nbsp;<img width="20" height="20" src="{{ asset('img/site/about.png') }}"></a></li>
                        <li style="
    padding-left: 0px;
    padding-right: 30px;
"><a href="#resume" style="

    text-align: right;
    border-radius: 0px 30px 30px 0px;

"> رزومه&nbsp;&nbsp;<img width="20" height="20" src="{{ asset('img/site/curriculum.png') }}"></a></li>
                        <li>
                    </ul>
                    <!-- /Main menu -->
                </div>
                <!-- /Navigation -->
            </div>
        </header>
        <!-- /Header -->

        <!-- Mobile Header -->
        <div class="responsive-header">
            <div class="responsive-header-name">
                <img class="responsive-logo" src="{{ asset($getbases->BaseAvatar) }}" /> رضا احمدی </div>
            <span class="responsive-icon"><img width="20" height="20" src="{{ asset('img/site/menu.png') }}"></span>
        </div>
        <!-- /Mobile Header -->
        <!-- Main Content Pages -->
        <div class="content-pages" style="
    margin-left: 0px;
    margin-right: 204px;
">
            <!-- Subpages -->
            <div class="sub-home-pages">
                <!-- Start Page home -->
                <section id="home" class="sub-page start-page">
                    <div class="sub-page-inner" style="background: url('https://www.elmanawy.info/demo/mulan-cms//cdn/settings/home-bg.jpeg');">
                        <div class="mask"></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>سلام من  {{$getbases->BaseName}}  {{$getbases->BaseFamily}} هستم  </h2>
                                    <div class="type-wrap">
                                        <div class="cd-headline clip">

                                            <span class="cd-words-wrapper">
                                                                            <b>  {{$getbases->BaseWorkTitle}}
</b>
                                                                                

                                                                            </span>
                                        </div>
                                    </div>
                                    <div class="home-buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Start Page home -->

                <!-- About Me Subpage -->
                <section id="about-me" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>درباره من</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <!-- about me -->
                            <div class="row pb-30">

                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                    <div class="box-img">
                                        <img src="https://www.elmanawy.info/demo/mulan-cms//cdn/settings/about-bg.png" class="img-fluid" alt="image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <h3 class="text-right">{{$getbases->BaseName}} {{$getbases->BaseFamily}}</h3>
                                    <span class="about-location text-right">یزد>
                                    <p class="about-content text-right">من متولد یک اردیبهشت سال 1373 (26 ساله) و برنامه نویس وب هستم
                                    </p>
                                    <p class="about-content text-right">
                                        من لیسانس مهندسی کامپیوتر گرایش نرم افزار از دانشگاه امام جواد (ع) یزد دارم. همچنین مدرک فوق دیپلم خود را در دانشکده فنی امام علی (یزد) در رشته کامپیوتر اخذ کردم
                                    </p>
                                    <p class="about-content text-right">
                                        اینجانب سابقه 10 سال برنامه نویسی در زمینه های مختلف دارم ولی بیش از 5 سال است که فقط در زمینه وب فعالیت میکنم.. حدود 2 ماه در شرکت سپهر سلامت دوره کارآموزی خور را گذراندم. تخصص من در برنامه نویسی وب فریم ورک محبوب لاراول در سمت سرور و فریم ورک بوت استرپ در سمت ظاهر است
                                    </p>
                                    <p class="about-content"></p>

                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <!-- About Me Subpage -->

                <!-- Resume Subpage -->
                <section id="resume" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>رزومه من</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <!-- Work History -->
                                    <div class="pb-300">
                                        <div class="section-head">
                                            <h4 class="text-right">
                                            سوابق شغلی                                       </h4>
                                        </div>
                                        <div class="main-timeline">

                                            <div class="timeline currecnt">
                                                <div class="timeline-icon">
                                                    <img src="{{ asset('img/final-logo-mediun.png') }}" alt="امضا رزومه ساز آنلاین">
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="date">

                                                         کار فعلی </span>

                                                    <h5 class="title">مدیر محصول  <span class="place-title">امضا</span></h5>
                                                    <p class="description">
                                                        امضا سامانه رزومه ساز آنلاین است که هیچ کس دست خالی این سایت را ترک نمیکند. قالب های امضا هم رایگان و هم پولی هستند </p>
                                                </div>
                                            </div>

                                            <div class="timeline ">
                                                <div class="timeline-icon">
                                                    <img src="{{ asset('img/site/paziresh24.png') }}" alt="پذیرش 24">
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="date">
                                                         </span>

                                                    <h5 class="title">برنامه نویس ظاهر وب<span class="place-title">&nbsp;پذیرش24&nbsp;</span></h5>
                                                    <p class="description">
                                                        به مدت 2 ماه در این شرکت به عنوان کارآموز مشغول به کار شدم و توانستم تجربه های خوبی به دست بیاورم </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Work History -->

                                    <!-- Skills -->
                                    <div class="pb-30 pt-30">
                                        <div class="row list-skills">

                                            <!-- Work Skills -->
                                            <div class="col-md-6">
                                                <div class="special-block-bg">
                                                    <div class="section-head">
                                                        <h4 class="text-right">

                                                            مهارت های تجربی                                                        </h4>
                                                    </div>
                                                    <div class="skills-items skills-progressbar">
                                                        <div class="skill-item">
                                                            <h4>PHP</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>70%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>Larevel</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="60%" style="width: 60%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>60%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>JavaScript</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>75%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>Bootstrap</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>95%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Work Skills -->

                                            <!-- Work Skills -->
                                            <div class="col-md-6">
                                                <div class="special-block-bg">
                                                    <div class="section-head">
                                                        <h4 class="text-right">
                                                            مهارت های زبان - زبان انگلیسی
                                                        </h4>
                                                                                
                                                    </div>
                                                    <div class="skills-items skills-progressbar">
                                                        <div class="skill-item">
                                                            <h4>مهارت نوشتن</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="60%" style="width: 60%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>60%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>مهارت خواندن</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="60%" style="width: 60%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>60%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>مهارت صحبت کردن</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="20%" style="width: 20%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="skill-item">
                                                            <h4>مهارت گوش کردن</h4>
                                                            <div class="progress">
                                                                <div class="progress-bar wow fadeInLeft" data-progress="20%" style="width: 20%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                            </div>
                                                            <span>20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Work Skills -->
                                        </div>
                                    </div>
                                    <!-- /Skills -->

                                    <!-- Education History -->
                                    <div class="pt-30">
                                        <div class="section-head">
                                            <h4 class="text-right">
                                            سوابق تحصیلی                                       </h4>
                                        </div>
                                        <div class="main-timeline">

                                            <div class="timeline ">
                                                <div class="timeline-icon">
                                                    <img src="{{ asset('img/site/iju.png') }}" alt="دانشگاه امام جواد">
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="date">
                                                        در حال تحصیل </span>
                                                    <h5 class="title d-inline-block">
                                                    کارشناسی
                                                    ارشد مهندسی نرم افزار </h5>
                                                    <h6>گرایش داده</h6>

<span class="place-title">موسسه آموزش عالی امام جواد (ع)</span>
                                                </div>
                                            </div>

                                            <div class="timeline ">
                                                <div class="timeline-icon">
 <img src="{{ asset('img/site/iju.png') }}" alt="دانشگاه امام جواد" />
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="date">
                              1395 - 1397</span>
                                                    <h5 class="title d-inline-block">
                                                   کارشناسی مهندسی کامپیوتر   </h5>
                                                    <h6>گرایش نرم افزار</h6>

<span class="place-title">موسسه آموزش عالی امام جواد (ع)</span>
<br>
                                                    <p class="description">
معدل: 17.77
</p>
                                                </div>
                                            </div>

                                            <div class="timeline ">
                                                <div class="timeline-icon">
                                                                                                        <img src="{{ asset('img/site/imamali.jpg') }}" alt="دانشگاه امام علی">
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="date">
                                                        1390 - 1393 </span>
                                                    <h5 class="title d-inline-block">
                                                    کاردانی
کامپیوتر</h5>
                                                    <h6>گرایش نرم افزار</h6>

<span class="place-title">دانشکده فنی امام علی (ع) یزد</span>
<br>
                                                    <p class="description">
معدل: 14.31
</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Education History -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <!-- /Blog Subpage -->

                <!-- Contact Subpage -->
                <!-- End Contact Subpage -->
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
    </div>

    <!--JS Files-->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/jquery.min.js"></script>
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/bootstrap.min.js"></script>
    <!--Owl Coursel-->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/owl.carousel.min.js"></script>
    <!-- Typing Text -->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/typed.min.js"></script>
    <!--Images LightCase-->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/lightcase.min.js"></script>
    <!-- Portfolio filter -->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/jquery.isotope.min.js"></script>
    <!-- Wow Animation -->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/wow.min.js"></script>
    <!-- Map -->
    <!-- Main Script -->
    <script src="https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/js/script.js"></script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg&amp"></script>
    <script>
        if ($('#google-map').length > 0) {
            //set your google maps parameters
            var latitude = 51.5255069,
                longitude = -0.0836207,
                map_zoom = 14;

            //google map custom marker icon 
            var marker_url = 'https://www.elmanawy.info/demo/mulan-cms/styles/site/default/assets/images/map-marker.png';

            //we define here the style of the map
            var style = [{
                "featureType": "landscape",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 65
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 51
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.highway",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 30
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "road.local",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 40
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "transit",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "administrative.province",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -100
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ffff00"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -97
                }]
            }];

            //set google map options
            var map_options = {
                    center: new google.maps.LatLng(latitude, longitude),
                    zoom: map_zoom,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: style,
                }
                //inizialize the map
            var map = new google.maps.Map(document.getElementById('google-map'), map_options);
            //add a custom marker to the map				
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map,
                visible: true,
                icon: marker_url,
            });
        }
    </script>
</body>

</html>