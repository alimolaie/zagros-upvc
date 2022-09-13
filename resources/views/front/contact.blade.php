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

    <title>تماس با ما</title>

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
                    <a href="index.html">
                        <img src="asset2/images/logo.png" alt="logo">
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

<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>تماس با ما</h2>

            <ul class="pages-list">
                <li><a href="index.html">خانه</a></li>
                <li>تماس با ما</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="contact-form-wrap">
                    <h3>پیام بگذارید</h3>

                    <form id="contactForm" method="post" action="{{url('post-contact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>نام</label>
                                    <input type="text" name="full_name" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>ایمیل</label>
                                    <input type="text" name="email" class="form-control" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>تلفن</label>
                                    <input type="text" name="mobile" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>موضوع</label>
                                    <input type="text" name="subject" class="form-control" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>پیام شما</label>
                                    <textarea name="message" class="form-control" cols="30" rows="6"></textarea>
                                    <div class="help-block with-errors"></div>
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
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">ارسال پیام</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="contact-support">
                    <h3>پشتیبانی مشتری</h3>
                    <span>به کمک نیاز دارید؟ با ما در تماس باشید.</span>

                    <ul class="information">
                        <i class="fa fa-address-card" aria-hidden="true"></i> {{$settings->address}}</li>
                        <br>
                        <br>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a></li>
                        <br>
                        <br>
                        <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                    </ul>

                    <div class="working-hours">
                        <h4>ساعت کاری</h4>

                        <ul class="list">
                            <li>{{$settings->work_day}}: <span>{{$settings->work_time}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->


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
