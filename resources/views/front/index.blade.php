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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="{{asset('asset2/css/aos.css')}}">
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

    <title>درب و پنجره زاگرس</title>

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
</div>
<!-- End Navbar Area -->

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

<!-- Start Main Banner Area -->
<div class="main-banner-area" style="background-image:url({{asset('/uploads/headers/'.$header->image)}})">
    <div class="container">
        <div class="main-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">
            <h1>{{$header->title}}</h1>
            <p>{{$header->description}}</p>


        </div>
    </div>
</div>
<!-- End Main Banner Area -->



<!-- Start About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image-wrap">
                    <img src="{{asset('uploads/about/'.$about->image) }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span>درباره ما</span>
                    <h3>درباره درب و پنجره زاگرس</h3>
                    <p>{{$about->description}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Funfact Area -->
<div class="fun-fact-area bg-image pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-content">
                    <span>آمار ما</span>
                    <h3>تجربه کاری ما در زاگرس</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-6">
                <div class="single-funfact-card">
                    <br>
                    <div class="icon mt-4">
                        <br>
                        <i class="fa fa-check"></i>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>
                        <span class="odometer" data-count="390">00</span>
                        <span class="small-text">+</span>
                    </h3>
                    <p>پروژه تکمیل شده</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-6">
                <div class="single-funfact-card">
                    <br>
                    <div class="icon mt-4">
                        <br>
                        <i class="fa fa-user"></i>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>
                        <span class="odometer" data-count="20">00</span>
                        <span class="small-text">+</span>
                    </h3>
                    <p>کارمند فعال</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="single-funfact-card">
                    <br>
                    <div class="icon mt-4">
                        <br>
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>
                        <span class="odometer" data-count="100">00</span>
                        <span class="small-text">%</span>
                    </h3>
                    <p>رضایت مشتری</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Funfact Area -->

<!-- Start Services Area -->
<div class="services-area bg-transparent pt-100 pb-75">
    <div class="container">
        <div class="section-title-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span>خدمات ما</span>
                    <h2>تمام خدماتی که ما به مشتریان ارائه می دهیم</h2>
                </div>

            </div>
        </div>

        <div class="services-slides-two owl-carousel owl-theme">
            @foreach($services as $service)
            <div class="single-services-card">
                <a href="#"><img src="{{asset('uploads/service/'.$service->image)}}" alt="image"></a>
                <div class="services-content">
                    <h3>
                        <a href="#">{{$service->title}}</a>
                    </h3>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Services Area -->

<!-- Start Choose Area -->
<div class="choose-area bg-f9fafb pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="choose-content">
                    <span>چرا ما را انتخاب می کنید؟</span>
                    <h3>{{$why->title}}</h3>
                    <p>{{$why->description	}}</p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="choose-image-wrap">
                    <img src="{{asset('uploads/why_choose_us/'.$why->image)}}" alt="image">

                    <div class="choose-warrenty">
                        <h3>%100</h3>
                        <span>ضمانت خدمات فنی ما</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Area -->

<!-- Start Partner Area -->
<div class="partner-area bg-transparent pt-100 pb-75">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-12">
                <div class="partner-content">
                    <span>برندهای ما</span>
                    <h3>برندهای قابل اعتمادی که با آنها کار می کنیم</h3>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">

                <div class="partner-slides-two owl-carousel owl-theme">
                    @foreach($brands as $brand)
                    <div class="image-box">
                        <a href="index-2.html" target="_blank">
                            <img src="{{asset('uploads/brands/'.$brand->image)}}" alt="image">
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Appointment Area -->
<div class="appointment-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="appointment-image">
                    <img src="asset2/images/appointment/appointment.png" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="appointment-form-wrap">
                    <div class="content">
                        <h3>درخواست سفارش</h3>
                    </div>

                    <form class="appointment-form" action="{{url('post-project')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="طول" name="height">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="عرض" name="weight">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام و نام خانوادگی" name="full_name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="شماره موبایل" name="mobile">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="کد ملی" name="nationality_code">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="selectize-filter" name="glass_id">
                                        <option value="service">نوع شیشه</option>
                                         @foreach($glass as $g)
                                        <option value="{{$g->id}}">{{$g->title_glass}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="selectize-filter" name="profile_id">
                                        <option value="profil">نوع پروفیل</option>
                                        @foreach($profiles as $profil)
                                        <option value="{{$profil->id}}">{{$profil->title_profile}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="selectize-filter" name="brand_id">
                                        <option value="brand">برند</option>
                                        @foreach($brands as $b)
                                        <option value="{{$b->id}}">{{$b->title_brand}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="address" class="form-control" placeholder="آدرس خود را بنویسید..."></textarea>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">ارسال درخواست</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Appointment Area -->


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
    <i class="fa fa-arrow-up"></i>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
