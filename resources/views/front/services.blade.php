<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Kadi - Air Conditioning & Heating Services HTML Template" >
    <meta name="description" content="Kadi - Air Conditioning & Heating Services HTML Template">
    <meta name="author" content="Barat Hadian">
    @php
        $setting=App\Models\Setting::find(1);
    @endphp
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{asset('asset2/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/selectize.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('asset2/css/rtl.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset2/datepicker-jalali/css/persianDatepicker-default.css')}}" />

    <title>در و پنجره زاگرس-خدمات</title>

    <link rel="icon" type="image/png" href="{{url('uploads/settings/'.$setting->icon)}}">
</head>

<body>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->



<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{url('uploads/settings/'.$setting->logo)}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('uploads/settings/'.$setting->logo)}}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-5" style="margin-left: 100px">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">خانه</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('services')}}" class="nav-link">خدمات</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('contact-us')}}" class="nav-link">تماس با ما</a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">





                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#" class="search-box"><i class="ri-search-line"></i></a>
                        </div>

                        <div class="option-item">
                            <a href="appointment.html" class="default-btn">قرار ملاقات</a>
                        </div>

                        <div class="option-item">
                            <div class="call-us">
                                <span>تماس بگیرید 24/7</span>
                                <a href="tel:15143125678">+1 (514) 312-5678</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Navbar Area -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="جستجو...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->

<!-- Start Page Banner -->
<div class="page-banner-area item-bg-4">
    <div class="container">
        <div class="page-banner-content">
            <h2>خدمات ما</h2>

            <ul class="pages-list">
                <li><a href="index.html">خانه</a></li>
                <li>خدمات ما</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Services Area -->
<div class="services-area bg-transparent pt-100 pb-100">
    <div class="container">
        <div class="section-title-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span>خدمات ما</span>
                    <h2>تمام خدماتی که ما به مشتریان ارائه می دهیم</h2>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($services as $row)
            <div class="col-lg-4 col-md-6 services-more-item">

                <div class="single-services-card">
                    <a href="#"><img src="{{asset('uploads/service/'.$row->image)}}" alt="image" width="600" height="600"></a>
                    <div class="services-content">
                        <h3>
                            <a href="services-details.html">{{$row->title}}</a>
                        </h3>

                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- End Services Area -->

<!-- Start Footer Area -->
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="footer-widget-logo">
                        <a href="{{url('/')}}"><img src="{{url('uploads/settings/'.$setting->logo)}}" alt="image" height="100" width="100"></a>
                    </div>
                    <ul class="footer-information">
                        <li><i class="fa fa-map-marker"></i> کرمانشاه، شهرک دانش،خیابان دانش، درب و پنجره زاگرس</li>
                        <li><i class="fa fa-phone"></i> <a href="tel:09213993142">09213993142</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:aa6008457@gmail.com">aa6008457@gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>خدمات</h3>

                    <ul class="quick-links">
                        @foreach($services as $s)
                            <li><i class="fa fa-arrow-left"></i> <a href="#">{{$s->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>لینک های مفید</h3>

                    <ul class="quick-links">
                        <li><i class="fa fa-arrow-left"></i> <a href="{{url('services')}}">خدمات</a></li>
                        <li><i class="fa fa-arrow-left"></i> <a href="{{url('contact-us')}}">تماس با ما</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>کپی رایت © 1401 زاگرس. تمام حقوق قالب محفوظ است . طراحی و توسعه توسط <a  target="_blank">Amir Mohammad Asadi</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top -->
<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
<!-- End Go Top -->

<!-- Links of JS files -->
<script src="{{asset('asset2/js/jquery.min.js')}}"></script>
<script src="{{asset('asset2/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset2/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('asset2/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset2/js/jquery.appear.js')}}"></script>
<script src="{{asset('asset2/js/odometer.min.js')}}"></script>
<script src="{{asset('asset2/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset2/js/fancybox.min.js')}}"></script>
<script src="{{asset('asset2/js/jquery-ui.js')}}"></script>
<script src="{{asset('asset2/js/selectize.min.js')}}"></script>
<script src="{{asset('asset2/js/aos.js')}}"></script>
<script src="{{asset('asset2/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('asset2/js/form-validator.min.js')}}"></script>
<script src="{{asset('asset2/js/contact-form-script.js')}}"></script>
<script src="{{asset('asset2/js/wow.min.js')}}"></script>
<script src="{{asset('asset2/js/main.js')}}"></script>

<script src="{{asset('asset2/datepicker-jalali/js/persianDatepicker.min.js')}}"></script>
<script src="{{asset('asset2/datepicker-jalali/picker-style.js')}}"></script>

</body>
</html>
