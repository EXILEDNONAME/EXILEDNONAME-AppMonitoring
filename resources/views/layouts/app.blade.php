<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    @include('includes.logo-mobile')
    @include('includes.toolbar-mobile')
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        @include('includes.logo-desktop')
        @include('includes.sidebar-menu')
      </div>

      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        @include('includes.header-menu')

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          @include('includes.subheader')

          <div class="d-flex flex-column-fluid">
            <div class="container-fluid">
              @stack('content')
              @if ( !empty($page) && $page == 'profile')
              @stack('profile')
              @endif
            </div>
          </div>

        </div>

        @include('includes.footer')

      </div>
    </div>
  </div>

  @include('includes.scroll-top')
  @include('includes.js')
  @stack('js')
</body>
</html>
