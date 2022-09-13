<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="iconsidebar-menu">
    <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
        <li><a class="bar-icons" href="javascript:void(0)">
            <!--img(src='assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>عمومی    </span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">داشبورد</li>
            <li><a href="{{url('admin')}}">داشبورد</a></li>


          </ul>
        </li>



        <li><a class="bar-icons" href="javascript:void(0)"><i class="fas fa-door-open"></i><span> نوع پروفیل </span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class = "iconbar-header"> پروفیل </li>
            <li> <a href="{{ route('profile.create') }}"> ساخت پروفیل جدید </a> </li>
            <li> <a href="{{ route('profile.index') }}"> همه پروفیل </a> </li>

          </ul>
        </li>





        <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-user"></i><span> مدیریت شیشه </span></a>
            <ul class="iconbar-mainmenu custom-scrollbar">
              <li class = "iconbar-header"> مدیریت شیشه </li>
              <li> <a href="{{ route('glass.create') }}"> ساخت شیشه جدید </a> </li>
              <li> <a href="{{ route('glass.index') }}"> همه شیشه </a> </li>

            </ul>
          </li>
          <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-wrench"></i><span> سرویس ها </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class = "iconbar-header"> مدیریت سرویس ها </li>
                  <li> <a href="{{ url('admin/services/create') }}"> ساخت سرویس جدید </a> </li>
                  <li> <a href="{{ route('service.index') }}"> همه سرویس ها </a> </li>

              </ul>
          </li>






          <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i><span> پروژه ها </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class = "iconbar-header"> پروژه ها </li>
                <li> <a href="{{ url('admin/projects/index') }}"> همه پروژه ها </a> </li>

              </ul>
            </li>
          <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-shopping-cart"></i><span> برند ها  </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class = "iconbar-header"> برند ها </li>
                  <li> <a href="{{ route('brands.create') }}"> ساخت برند جدید </a> </li>
                  <li> <a href="{{ route('brands.index') }}"> همه برند ها </a> </li>

              </ul>
          </li>


          <li><a class="bar-icons" href="javascript:void(0)"><i class="far fa-comment"></i><span> تماس با ما </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class = "iconbar-header"> تماس با ما </li>
                  <li> <a href="{{ url('admin/contact-us/index') }}"> تماس با ما </a> </li>

              </ul>
          </li>
          <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-cog"></i><span> تنظیمات </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class = "iconbar-header"> تنظیمات </li>
                  <li> <a href="{{ url('admin/setting/edit') }}"> تنظیمات </a> </li>

              </ul>
          </li>
          <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-file-o"></i><span> کامپوننت ها </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class = "iconbar-header"> هدر </li>
                  <li> <a href="{{url('admin/header/edit/')}}"> ویرایش هدر </a> </li>
                  <li class = "iconbar-header"> درباره ما </li>
                  <li> <a href="{{ url('admin/about-us/edit') }}">ویرایش درباره ما </a> </li>
                  <li class = "iconbar-header"> چرا ما را انتخاب می کنید </li>
                  <li> <a href="{{ url('admin/why-choose-us/edit') }}">ویرایش چرا ما را انتخاب می کنید </a> </li>
              </ul>
          </li>

      </ul>
    </div>
  </div>
