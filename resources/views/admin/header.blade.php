<div class="page-main-header">
    @php
        $setting=App\Models\Setting::find(1);
    @endphp
    <div class="main-header-right">
      <div class="main-header-left text-center">
        <div class="logo-wrapper"><a href="index.html"><img src="{{url('uploads/settings/'.$setting->logo)}}" alt=""></a></div>
      </div>
      <div class="mobile-sidebar">
        <div class="media-body text-right switch-sm">
          <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
        </div>
      </div>

      </script>
      <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage"> جستجوی شما 0 نتیجه را پیدا کرد. این به احتمال زیاد به معنای داون بودن سرور است! </div></script>
    </div>
  </div>
