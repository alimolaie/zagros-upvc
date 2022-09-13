<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    @php
        $setting=App\Models\Setting::find(1);
    @endphp
    <link rel="icon" href="{{url('uploads/settings/'.$setting->logo)}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('uploads/settings/'.$setting->logo)}}" type="image/x-icon">
    <title>پنل مدیریت</title>
    <!--font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts/fonts.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-design-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe7-icon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- login js-->
    <!-- Plugin used-->

    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body main-theme-layout="rtl">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="typewriter">
        <h1>در حال بارگیری پنل مدیریت...</h1>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right">
            <div class="main-header-left text-center">
                <div class="logo-wrapper"><a href="index.html"><img src="{{url('uploads/settings/'.$setting->logo)}}" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
                </div>
            </div>

            <script id="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName"></div>
                    </div>
                </div>
            </script>
            <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage"> جستجوی شما 0 نتیجه را پیدا کرد. این به احتمال زیاد به معنای داون بودن سرور است! </div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
    @include('admin.sidebar')
    <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold"> وضعیت مخاطبین </h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
            </div>
        </div>

        <!-- Right sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 main-header">
                            <h2> <span> پروژه ها</span></h2>
                            <h6 class="mb-0">نمایش پروژه ها</h6>
                        </div>
                        <div class="col-lg-6 breadcrumb-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                                <li class="breadcrumb-item">پنل مدیریت</li>
                                <li class="breadcrumb-item">سرویس ها</li>
                                <li class="breadcrumb-item active">نمایش پروژه ها</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        @php
            use Hekmatinasser\Verta\Verta;
        @endphp

        <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>نمایش پروژه ها</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"> نام و نام خانوادگی </th>
                                        <th scope="col"> موبایل </th>
                                        <th scope="col"> ایمیل </th>
                                        <th scope="col">موضوع</th>
                                        <th scope="col">تاریخ </th>
                                        <th scope="col">پیام </th>
                                        <th scope="col"> حذف </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $a=0
                                    @endphp
                                    @foreach ($contact as $row)

                                        <tr>

                                            <th scope="row">{{$a+=1}}</th>
                                            <td> {{$row->full_name}} </td>
                                            <td> {{$row->mobile}} </td>
                                            <td> {{$row->email}} </td>
                                            <td> {{$row->subject}} </td>
                                            <td> {{verta($row->created_at)->format('%B %d، %Y H:i')}} </td>
                                            <td> {{$row->message}} </td>
                                            <td>

                                                <button type="submit" style="border:0 solid black; background-color: transparent;" class="remove-service" data-action="{{route('contact.delete',$row->id)}}"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></button>

                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach

                                </table>

                            </div>

                        </div>
                        <div class="mb-5">
                            {{$contact->links()}}
                        </div>

                    </div>




                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">حق کپی رایت © 2021 پوکو ، کلیه حقوق محفوظ است</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">بومی شده با <i class="fa fa-heart"></i> توسط : <a href="https://www.rtl-theme.com/author/iman1300/">ایمان پاکروح </a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
<script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<p></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type="text/javascript">
    $("body").on("click", ".remove-service", function () {
        var current_object = $(this);
        swal({
            title: "آیا مطمئن هستید",
            text: "آیا میخواهید این زیر ییام رو حذف کنید",
            type: "error",
            showCancelButton: true,
            dangerMode: true,
            cancelButtonClass: '#DD6B55',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'حذف',
            cancelButtonText: 'لغو',
        }, function (result) {
            if (result) {
                var action = current_object.attr('data-action');
                var id = current_object.attr('data-id');
                $('body').html("<form class='remove-form2' method='post' action='" + action + "'></form>");
                $('body').find('.remove-form2').append('<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">');
                $('body').find('.remove-form2').append('<input name="id" type="hidden" value="' + id + '">');
                $('body').find('.remove-form2').submit();
            }
        });
    });
</script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>

